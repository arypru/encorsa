<template>
    <encorsa-layout>
        <encabezado></encabezado>
        <card></card>
        <centrales></centrales>
        <noticias></noticias>
        <div class="secc">
            <img
                class="px-0"
                width="w-auto"
                height="h-auto"
                src="/img/energiakyut.png">

            <div class="px-16 lg:px-24 py-16">
                <TituloIcon image="/img/icons/contacto.svg" titulo="Contacto"></TituloIcon>
                <v-row justify="center">
                    <DatosContacto></DatosContacto>
                </v-row>
            </div>
            <img width="w-auto"
                 height="h-auto"
                 src="/img/waveabajo.png">
        </div>
    </encorsa-layout>
</template>

<script>
import EncorsaLayout from "@/Layouts/EncorsaLayout";
import Encabezado from "@/Pages/Inicio/Encabezado";
import Centrales from "@/Pages/Inicio/Centrales";
import DatosContacto from "@/Pages/Contacto/DatosContacto";
import TituloIcon from "@/Pages/Inicio/TituloIcon";
import Card from "@/Pages/Inicio/Card";
import Noticias from "@/Pages/Inicio/Noticias";


export default {
    components: {Encabezado, TituloIcon, Noticias,EncorsaLayout, Centrales, DatosContacto,Card}
}
</script>


<style>
.secc {
    background-image: linear-gradient(to top, #96fbc4 0%, #f9f586 100%);
}
</style>
