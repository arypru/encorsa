<template>
    <div class="secc">
        <img
            class="px-0"
            width="w-auto"
            height="h-auto"
            src="/img/energiakyut.png">

        <div class="px-10 px-lg-12 px-md-0">
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
                             src="/img/mundosvg.svg">
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
                             src="/img/mundosvg.svg">
                    </div>
                    <titulo class="pb-10" texto="La empresa"></titulo>

                    <descripcion
                        texto=" Energía Correntina Sociedad Anónima, ENCOR S.A., es una Sociedad Anónima con Participación Estatal Mayoritaria, creada por Ley Provincial Nº 6085, reglamentada por Decreto Provincial Nº3178 de fecha 21 de diciembre del 2018, y constituida mediante Estatuto Social el 31 de enero del 2019, de acuerdo a las normas vigentes.">
                    </descripcion>

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
    name: "LaEmpresa",
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

