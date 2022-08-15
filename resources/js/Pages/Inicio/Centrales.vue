<template>
    <div class="secc">
        <img
            class="px-0"
            width="w-auto"
            height="h-auto"
            src="/img/energiakyut.png">

        <div class="px-10 lg:px-24 py-10">
            <v-row>
                <v-col

                    data-aos="zoom-in-up"
                    data-aos-delay="50"
                    data-aos-duration="1300"
                    data-aos-easing="zoom-in-right"
                    data-aos-mirror="true"
                    data-aos-once="false"

                    cols="12"
                    sm="6"
                    md="6">

                    <div class="py-8 hidden lg:block">
                        <mapa></mapa>
                    </div>

                </v-col>

                <v-col
                    data-aos="zoom-in-up"
                    data-aos-delay="50"
                    data-aos-duration="1300"
                    data-aos-easing="zoom-in-right"
                    data-aos-mirror="true"
                    data-aos-once="false"

                    justify="center"
                    align="center"
                    cols="12"
                    sm="6"
                    md="6">

                    <TituloIcon image="/img/icons/central.svg" titulo="Centrales"></TituloIcon>

                    <div class="block lg:hidden py-8">
                        <mapa-celular></mapa-celular>
                    </div>

                    <descripcion
                        class="pb-12"
                        texto="Con el objetivo de construir, operar y supervisar el mantenimiento de las primeras cinco centrales fotovoltaicas conectadas a red, con inicio en el primer semestre del año 2021, firmamos y ejecutamos convenios con cooperativas eléctricas locales."></descripcion>

                    <inertia-link href="/centrales">
                        <v-btn
                            data-aos="zoom-in-up"
                            data-aos-delay="50"
                            class="titulo my-3"
                            color="green darken-1"
                            rounded="true"
                        >
                            <p class="text-sm text-white my-1 mx-12">
                                Ver Mas
                                <v-icon> keyboard_arrow_right</v-icon>
                            </p>
                        </v-btn>
                    </inertia-link>
                </v-col>
            </v-row>
        </div>
        <img width="w-auto"
             height="h-auto"
             src="/img/waveabajo.png">
    </div>
</template>

<script>
import mapa from "@/Pages/Mapa/mapa";
import MapaCelular from "@/Pages/Mapa/MapaCelular";
import TituloIcon from "@/Pages/Inicio/TituloIcon";
import Descripcion from "@/Pages/Componentes/Descripcion";

export default {
    components: {
        mapa,
        TituloIcon,
        Descripcion,
        MapaCelular
    },
}
</script>
