<template>
    <div class="px-10 px-lg-16 py-12">
        <v-row>
            <v-col
                cols="12"
                sm="6"
                md="6"
            >
                <titulo class="pb-lg-8" texto="Sumate a nosotros"></titulo>

                <div class="lg:py-8 block lg:hidden">
                    <v-card
                        elevation="12"
                        rounded="true"
                        class="pa-1"
                    >
                        <img
                            src="/img/Imagen3.jpg">
                    </v-card>
                </div>

                <descripcion
                    class="pt-12 pt-lg-0"
                    texto="ENCOR S.A. lleva más de 10 acuerdos y convenios de Cooperación, con Empresas, Cooperativas, distintas Unidades Académicas y de Investigación de UNNE, y la Municipalidad de Corrientes. ">
                </descripcion>

                <descripcion texto="Te invitamos a sumarte y contactarnos para continuar desarrollando juntos energías renovables en nuestra provincia."></descripcion>

            </v-col>

            <v-col
                cols="12"
                sm="6"
                md="6"
                align="center"
            >
                <div class="lg:py-8 hidden lg:block">
                    <v-card
                        width="550px"
                        elevation="12"
                        rounded="true"
                        class="pa-1"
                    >
                        <img
                            width="550px"
                            src="/img/Imagen3.jpg">
                    </v-card>
                </div>
            </v-col>
        </v-row>
    </div>
</template>

<script>
import Descripcion from "@/Pages/Componentes/Descripcion";
import Titulo from "@/Pages/Componentes/Titulo"
export default {
    components: {
        Descripcion,
        Titulo
    },
}

</script>
