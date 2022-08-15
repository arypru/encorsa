<template>
    <div class="secc">
        <img
            class="px-0"
            width="w-auto"
            height="h-auto"
            src="/img/energiakyut.png">

        <div class="px-10 px-lg-16 py-12">
            <v-row>
                <v-col
                    cols="12"
                    sm="12"
                    lg="6"
                    align="center"
                >
                    <div class="hidden lg:block">
                        <img width="600px"
                             height="600px"
                             src="/img/kuarajhy.svg">
                    </div>
                </v-col>

                <v-col
                    cols="12"
                    sm="12"
                    lg="6"
                >
                    <div class="block lg:hidden">
                        <img width="600px"
                             height="600px"
                             src="/img/kuarajhy.svg">
                    </div>
                    <titulo class="pb-10" texto="Kuarajhý Energía"></titulo>

                    <descripcion
                        texto="Con el objetivo de hacer más eficiente nuestro trabajo, lo organizamos en líneas. Así inauguramos Kuarajhý Energía, la línea que reúne toda la actividad relacionada a centrales solares fotovoltaicas en las que interviene la empresa. ">
                    </descripcion>

                    <div class="d-flex justify-center align-center py-16">
                        <inertia-link href="/proveedores">
                            <v-btn
                                x-large
                                to="/proveedores"
                                data-aos="zoom-in-up"
                                data-aos-delay="50"
                                color="green darken-1"
                                rounded="true">
                                <p class="text-xs lg:text-lg text-white my-2">
                                    Ver Centrales
                                    <v-icon> keyboard_arrow_right</v-icon>
                                </p>
                            </v-btn>
                        </inertia-link>
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
