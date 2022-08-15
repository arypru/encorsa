<template>
    <div class="secc">
        <img width="w-auto"
             height="h-auto"
             src="/img/energiakyut.png">

        <div class="px-10 px-lg-16 py-12">
            <v-row>
                <v-col
                    cols="12"
                    sm="12"
                    lg="6"
                >

                    <div class="block lg:hidden">
                        <img width="600px"
                             height="600px"
                             src="/img/uniteencor.svg">
                    </div>

                    <titulo class="pb-10" texto="Unite a Nosotros "></titulo>

                    <descripcion
                        texto="ENCOR S.A. lleva más de 10 acuerdos y convenios de Cooperacion, con Empresas, Cooperativas,
distintas Unidades Académicas y de Investigacion de UNNE, y la Municipalidad de Corrientes">
                    </descripcion>

                    <descripcion
                        texto="Te invitamos a sumarte y contactarnos para continuar desarrollando juntos energías renovables en nuestra provincia">
                    </descripcion>

                    <div class="d-flex justify-center align-center py-lg-12">
                        <inertia-link href="/proveedores">
                            <v-btn
                                x-large
                                to="/proveedores"
                                data-aos="zoom-in-up"
                                data-aos-delay="50"
                                color="green darken-1"
                                rounded="true">
                                <p class="text-xs lg:text-lg text-white my-2">
                                    Quiero sumarme
                                    <v-icon> keyboard_arrow_right </v-icon>
                                </p>
                            </v-btn>
                        </inertia-link>
                    </div>

                </v-col>

                <v-col
                    cols="12"
                    sm="12"
                    lg="6"
                    align="center"
                >

                    <div class="hidden lg:block">
                        <img width="600px"
                             height="600px"
                             src="/img/uniteencor.svg">
                    </div>

                </v-col>
            </v-row>
        </div>


        <img width="w-auto"
             height="h-auto"
             src="/img/waveabajo.png">
    </div>
</template>

<script>
import Titulo from "@/Pages/Componentes/Titulo";
import Descripcion from "@/Pages/Componentes/Descripcion";

export default {
    components: {
        Titulo,
        Descripcion
    },
}
</script>

<style>
.secc {
    background-image: linear-gradient(to top, #96fbc4 0%, #f9f586 100%);
}
</style>
