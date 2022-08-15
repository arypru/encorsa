<template>
    <div class="px-12 lg:px-20 place-content-center">

        <titulo-icon image="/img/icons/quehacemos.svg" titulo="¿Que Hacemos?"></titulo-icon>

        <v-row>
            <v-col
                class="d-flex justify-lg-space-between justify-md-center justify-sm-center"
                cols="12"
                md="6"
                lg="3"
                v-for="card in cards" :key="card.title"
            >
                <v-card
                    data-aos="zoom-in-up"
                    data-aos-delay="50"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out-cubic"
                    data-aos-mirror="true"
                    data-aos-once="false"

                    align="center"
                    class="rounded-xl my-5 py-5 lg:py-5 pa-8"
                    width="auto"
                    height="auto"
                    rounded="true"
                    elevation="10"
                >
                    <v-img :src="card.src" class="center" width="12rem" height="12rem">
                    </v-img>

                    <titulo-card class="justify-center py-4" :texto="card.title"></titulo-card>
                    <DescripcionCard class="tracking-normal" :texto="card.descrip"></DescripcionCard>
                </v-card>
            </v-col>
        </v-row>

        <div class="d-flex justify-center">

            <inertia-link href="/nosotros">
                <v-btn
                    data-aos="zoom-in-up"
                    data-aos-delay="50"
                    class="titulo"
                    color="green darken-1"
                    rounded="true">
                    <p class="text-xs lg:text-sm text-white my-1 px-16">
                        Conoce más
                        <v-icon> keyboard_arrow_right</v-icon>
                    </p>
                </v-btn>
            </inertia-link>

        </div>

    </div>
</template>

<script>
import TituloIcon from "@/Pages/Inicio/TituloIcon";
import TituloCard from "@/Pages/Componentes/TituloCard";
import DescripcionCard from "@/Pages/Inicio/DescripcionCard";
import Descripcion from "@/Pages/Componentes/Descripcion";

export default {
    components: {TituloIcon, TituloCard, DescripcionCard, Descripcion},
    data: () => ({
        cards: [
            {
                title: "Generación",
                src: "./img/generacion.svg",
                color: "red accent-1",
                descrip: "Nos dedicamos al estudio, exploración, explotación, transporte, almacenaje, distribución, producción, comercialización e industrialización de energías alternativas o blandas mediante la aplicación de fuentes renovables o biocombustibles, sus derivados directos e indirectos."
            },
            {
                title: "Transporte",
                src: "./img/transporte.svg",
                color: "red accent-1",
                descrip: "Prestamos servicios públicos, de generación de energía fotovoltaica, de transporte y distribución de hidrocarburos. Transportamos, distribuimos y comercializamos energía eléctrica y bienes energéticos. "
            },
            {
                title: "Distribución",
                src: "./img/distribucion.svg",
                color: "red accent-1",
                descrip: "Podemos realizar todas estas actividades en Argentina y en el extranjero."
            },
            {
                title: "Comercialización",
                src: "./img/comercializacion.svg",
                color: "red accent-1",
                descrip: "Con el objetivo de hacer más eficiente nuestro trabajo, lo organizamos en líneas. Así inauguramos Kuarajhý Energía, la línea que reúne toda la actividad relacionada a centrales solares fotovoltaicas en las que interviene la empresa. "
            },
        ],
    }),
};
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Viga&display=swap");

.subt {
    font-family: "Viga", sans-serif;
    font-size: 1.5rem;
    color: black;
}
</style>
