<!-- index.php -->

<?php
include_once "header.php";
include_once "nav.php";
?>

<div class="row" id="app">

    <div class="col-12">
<p> </p>        <h1 class="text-center">VINCULAR RFID</h1>

    </div>

    <div class="col-12">

        <div class="table-responsive">

            <table class="table">

                <thead>

                    <tr>

                        <th>

                            Empleado

                        </th>

                        <th>

                            RFID serial

                        </th>

                        <th>

                            Accion

                        </th>

                    </tr>

                </thead>

                <tbody>

                    <tr v-for="empleado in empleados">

                        <td>{{empleado.nombre}}</td>

                        <td>

                            <h4 v-if="employee.rfid_serial">
                                <span class="badge badge-success"><i class="fa fa-check"></i>&nbsp;Asignado ({{empleado.rfid_serial}})</span>
                            </h4>

                            <h4 v-else-if="employee.waiting">
                                <span class="badge badge-warning"><i class="fa fa-clock"></i>&nbsp;Esperando... Porfavor lee una tarjeta RFID</span>
                            </h4>

                            <h4 v-else>
                                <span class="badge badge-primary"><i class="fa fa-times"></i>&nbsp;No asignado</span>
                            </h4>

                        </td>

                        <td>

                            <button @click="removeRfidCard(employee.rfid_serial)" v-if="employee.rfid_serial" class="btn btn-danger">Borrar</button>

                            <button v-else-if="employee.waiting" @click="cancelWaitingForPairing" class="btn btn-warning">Cancelar</button>

                            <button @click="assignRfidCard(employee)" v-else class="btn btn-info">Assign</button>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

<!-- Incluye Vue y Vue Toasted -->
<script src="js/vue.min.js"></script>
<script src="js/vue-toasted.min.js"></script>

<script>

Vue.use(Toasted);

let shouldCheck = true;

const CHECK_PAIRING_EMPLOYEE_INTERVAL = 1000;

new Vue({

    el: "#app",

    data: () => ({
        empleados: [],
        date: "",
    }),

    async mounted() {
        try {
            await this.setReaderForReading();
            await this.refreshEmployeesList();
        } catch (error) {
            console.error("Error during component mounting:", error);
        }
    },

    methods: {

        async removeRfidCard(rfidSerial) {
            try {
                await fetch("./remove_rfid_card.php?rfid_serial=" + rfidSerial);
                this.$toasted.show("RFID removed", {
                    position: "top-left",
                    duration: 1000,
                });
                await this.refreshEmployeesList();
            } catch (error) {
                console.error("Error removing RFID card:", error);
            }
        },

        async cancelWaitingForPairing() {
            shouldCheck = false;
            try {
                await this.setReaderForReading();
            } catch (error) {
                console.error("Error cancelling waiting for pairing:", error);
            }
        },

        async setReaderForReading() {
            try {
                await fetch("./set_reader_for_reading.php");
            } catch (error) {
                console.error("Error setting reader for reading:", error);
            }
        },

        async assignRfidCard(empleado) {
            shouldCheck = true;
            const employeeId = empleado.id;
            empleado.waiting = true;
            try {
                await fetch("./set_reader_for_pairing.php?employee_id=" + empleadoId);
                await this.checkIfEmployeeHasJustAssignedRfid(empleado);
            } catch (error) {
                console.error("Error assigning RFID card:", error);
            }
        },

        async checkIfEmployeeHasJustAssignedRfid(empleado) {
            try {
                const r = await fetch("./get_employee_rfid_serial_by_id.php?employee_id=" + empleado.id);
                const serial = await r.json();

                if (!shouldCheck) {
                    empleado.waiting = false;
                    return;
                }

                if (serial) {
                    this.$toasted.show("RFID assigned!", {
                        position: "top-left",
                        duration: 1000,
                    });
                    await this.setReaderForReading();
                    await this.refreshEmployeesList();
                } else {
                    setTimeout(() => {
                        this.checkIfEmployeeHasJustAssignedRfid(employee);
                    }, CHECK_PAIRING_EMPLOYEE_INTERVAL);
                }
            } catch (error) {
                console.error("Error checking if empleado has assigned RFID:", error);
            }
        },

        async refreshEmployeesList() {
            try {
                let response = await fetch("./get_employees_ajax.php");
                let empleados = await response.json();

                let employeeDictionary = {};

                empleados = empleados.map((empleado, index) => {
                    employeeDictionary[empleado.id] = index;
                    return {
                        id: empleado.id,
                        nombre: empleado.name,
                        rfid_serial: null,
                        waiting: false,
                    }
                });

                response = await fetch(`./get_employees_with_rfid.php`);
                let rfidData = await response.json();

                rfidData.forEach(rfidDetail => {
                    let empleadoId = rfidDetail.empleado_id;
                    if (empleadoId in employeeDictionary) {
                        let index = employeeDictionary[empleadoId];
                        empleados[index].rfid_serial = rfidDetail.rfid_serial;
                    }
                });

                this.empleados = empleados;
            } catch (error) {
                console.error("Error refreshing empleados list:", error);
            }
        },

    },

});

</script>

<?php
include_once "footer.php";
?>

