<template>
    <div class="px-lg-16 py-6">
        <titulo class="pb-8 flex justify-center" texto="Acuerdos"></titulo>
        <v-row class=" px-lg-0 px-md-0">
            <v-col
                class="d-flex justify-lg-space-between justify-md-center justify-sm-center px-16"
                cols="12"
                lg="6"
                v-for="card in cards" :key="card.title"
            >
                <v-card
                    align="center"
                    class="rounded-xl p-3 lg:p-6"
                    max-width="mx-auto"
                    min-height="my-auto"
                    elevation="4"
                >

                    <v-img max-width="mx-auto"
                           max-height="my-auto"
                           :src="card.src">
                    </v-img>

                    <v-divider class="m-2"></v-divider>

                    <v-card-title
                    >
                        <titulo-card
                            class="flex justify-center"
                            :texto="card.title">
                        </titulo-card>
                    </v-card-title>

                    <v-card-subtitle>
                        <descripcion
                            :texto="card.descripcion">
                        </descripcion>
                    </v-card-subtitle>
                </v-card>
            </v-col>
        </v-row>
    </div>
</template>

<script>

import Titulo from "@/Pages/Componentes/Titulo";
import Descripcion from "@/Pages/Componentes/Descripcion";
import TituloCard from "@/Pages/Componentes/TituloCard";


export default {

    components: {
        Titulo,
        Descripcion,
        TituloCard
    },

    data: () => ({
        cards: [
            {
                title: "FIDEICOMISO DE ADMINISTRACION SANTA CATALINA",
                src: "./img/catalina.jpg",
                descripcion: "Compromiso de constitución de usufructo por 25 años en un predio de 30 hectáreas en Santa Catalina a favor de ENCOR S.A. , con la finalidad del desarrollo de energías renovables. Actualmente se llevan a cabo gestiones para captar inversores para el desarrollo de Centrales de Generación Fotovoltaica en dicho predio",

            },
            {
                title: "POWERCHINA",
                src: "./img/chino.png",
                descripcion: "Acuerdo de cooperación con la Empresa “Power China Zhongnan Engineering Corporation Limited” con el objeto de colaboración para la implementación de Parques Fotovoltaicos en el territorio de la Provincia de Corrientes.",

            },
        ],
    }),
};
</script>
