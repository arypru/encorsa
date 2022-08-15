<template>
    <div class="px-10 px-lg-16 py-8">
        <v-row>
            <v-col
                cols="12"
                xl="6"
                lg="6"
            >
                <titulo  texto="Central Híbrida Solar Diésel Malvinas"></titulo>

                <div class="lg:py-8 block lg:hidden">
                    <v-card
                        elevation="12"
                        width="auto"
                        height="auto"
                        rounded="true"
                    >
                        <img
                            src="/img/Imagen1.jpg">
                    </v-card>
                </div>


                <descripcion
                    class="py-12 py-lg-4"
                    texto="ENCOR S.A. explota la concesión del servicio público de generación eléctrica aislada con fuente de energía híbrida solar diésel, en la localidad de Malvinas, departamento de Esquina, provincia de Corrientes."></descripcion>
                <descripcion
                    class="pb-8"
                    texto="La planta micro red abastece en total a 101 usuarios"></descripcion>

                <div class="border-2 border-green-600">
                    <div class="d-flex flex-column flex-lg-row">
                        <div v-for="x in list1" :key="list1.icono">
                            <div class="text-xl pl-5 py-2">
                            <span class="material-icons text-green-600 px-2">
                                {{ x.icono }}
                            </span>
                                {{ x.descrip }}
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-lg-row">
                        <div v-for="x in list2" :key="list2.icono">
                            <div class="text-xl pl-8 py-2">
                            <span class="material-icons text-green-600">
                                {{ x.icono }}
                            </span>
                                {{ x.descrip }}
                            </div>
                        </div>
                    </div>
                </div>
            </v-col>

            <v-col
                cols="12"
                xl="6"
                lg="6"
                align="center"
            >
                <div class="lg:py-8 hidden lg:block">
                    <v-card
                        elevation="12"
                        width="30rem"
                        height="28.5rem"
                        rounded="true"
                    >
                        <img
                            src="/img/Imagen1.jpg">

                    </v-card>
                </div>
            </v-col>
        </v-row>
    </div>
</template>

<script>

import mapa from "@/Pages/Mapa/mapa";
import MapaCelular from "@/Pages/Mapa/MapaCelular";
import Descripcion from "@/Pages/Componentes/Descripcion";
import EncorsaLayout from "@/Layouts/EncorsaLayout";
import Titulo from "@/Pages/Componentes/Titulo";

export default {
    components: {
        Titulo,
        mapa,
        Descripcion,
        MapaCelular,
        EncorsaLayout,
    },

    data: () => ({
        list1: [
            {
                icono: "family_restroom",
                descrip: "89 Familias"
            },
            {
                icono: "school",
                descrip: "5 Escuelas"
            },
            {
                icono: "local_hospital",
                descrip: "1 Hospital"
            },
            {
                icono: "night_shelter",
                descrip: "1 Albergue"
            },
        ],

        list2:
            [
                {
                    icono: "local_police",
                    descrip: "1 Destacamento Policial"
                },
                {
                    icono: "local_library",
                    descrip: "3 Capillas"
                },
                {
                    icono: "local_library",
                    descrip: "1 Predio Identidad"
                },
            ],
    }),
}

</script>
