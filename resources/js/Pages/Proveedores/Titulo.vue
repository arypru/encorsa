<template>
    <div class="secc">
        <img
            class="px-0"
            width="w-auto"
            height="h-auto"
            src="/img/energiakyut.png">

        <div class="px-12 px-lg-16 px-md-0">
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
                             src="/img/Proveedores.svg">
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
                             src="/img/Proveedores.svg">
                    </div>
                    <titulo class="pb-10" texto="Bienvenido"></titulo>

                    <descripcion
                        texto=" Bienvenido a la sección de proveedores de ENCOR S.A en donde encontrará los formularios y requisitos para darse de alta como proveedor en nuestra empresa.">
                    </descripcion>
                    <descripcion
                        texto="ENCOR S.A. ya lleva mas de 10 acuerdos y convenios de Cooperacion, con Empresas, Cooperativas, distintas Unidades Academica y de Investigacion de UNNE, y la Municipalidad de Corrientes.">
                    </descripcion>
                    <descripcion
                        texto="Te invitamos a sumarte y contactarnos para continuar desarrollando juntos energías renovables en nuestra provincia.">
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
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    .texto {
        font-family: 'Roboto', sans-serif;
        color: black;
        font-weight: bold;
    }
    .secc {
        background-image: linear-gradient(to top, #96fbc4 0%, #f9f586 100%);
    }
</style>
