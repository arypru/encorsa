<template>
    <encorsa-layout>
        <Encabezado></Encabezado>
        <div class="pa-lg-14">
            <DatosContacto></DatosContacto>
<!--            <FormularioContacto></FormularioContacto>-->
        </div>
    </encorsa-layout>
</template>

<script>
import EncorsaLayout from "@/Layouts/EncorsaLayout";
import Encabezado from "@/Pages/Contacto/Encabezado";
import FormularioContacto from "@/Pages/Contacto/FormularioContacto";
import DatosContacto from "@/Pages/Contacto/DatosContacto";

export default {
    name: "Contacto",
    components: {FormularioContacto, Encabezado, EncorsaLayout, DatosContacto}
}
</script>
