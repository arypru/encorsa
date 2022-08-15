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
                    align="center"
                    cols="12"
                    lg="6"
                    sm="6"
                    md="12">
                    <div class="lg:py-8 hidden lg:block">
                        <v-card
                            elevation="12"
                            rounded="true"
                            width="700px"
                            class="pa-1"
                        >
                            <img
                                width="700px"
                                src="/img/Imagen2.jpg">
                        </v-card>
                    </div>
                </v-col>

                <v-col
                    cols="12"
                    lg="6"
                    sm="6"
                    md="12">

                    <titulo
                        class="pb-2"
                        texto="Central Conectadas a la Red"></titulo>

                    <div class="lg:py-8 block lg:hidden">
                        <v-card
                            elevation="12"
                            width="auto"
                            height="auto"
                            rounded="true"
                        >
                            <img
                                src="/img/Imagen2.jpg">
                        </v-card>
                    </div>


                    <descripcion
                        class="py-8 py-lg-0"
                        texto="Con el objetivo de construir, operar y supervisar el mantenimiento de las primeras cinco centrales fotovoltaicas conectadas a red, con inicio en el primer semestre del año 2021, firmamos y ejecutamos convenios con cooperativas eléctricas locales.
            "></descripcion>
                    <descripcion
                        texto="En cuanto a coste de mercado por megavatio solar instalado, es de 1 millón de USD.  ENCOR S.A., con aporte cercano al 40%de dicho valor, concreta la instalación de la potencia señalada en cada región."></descripcion>
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
import Mapa from "@/Pages/Mapa/mapa"
import Descripcion from "@/Pages/Componentes/Descripcion";

export default {
    components: {
        Titulo,
        Mapa,
        Descripcion
    },
}
</script>

<style>
.secc {
    background-image: linear-gradient(to top, #96fbc4 0%, #f9f586 100%);
}
</style>
