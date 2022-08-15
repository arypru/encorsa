<template>
    <encorsa-layout>
        <encabezado-prov></encabezado-prov>

        <div class="flex flex-col px-14 lg:px-0 lg:justify-around lg:flex-row bg-white ">
            <div v-for="x in secciones">
                <a :href="x.secc"
                   class="button b-green rot-90 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 ">
                    <div class="flex pr-2">
                        <img width="38px"
                             height="38px"
                             :src="x.image">

                        <div class="Domine pl-5">
                            {{ x.titulo }}
                        </div>
                    </div>
                </a>
            </div>
        </div>


        <section id="Titulo">
            <Titulo></Titulo>
        </section>

        <section id="RequisitosFormularios">
            <v-row>
                <v-col
                    align="center"
                    cols="12"
                    lg="6"
                >
                    <requisitos></requisitos>
                </v-col>

                <v-col
                    align="center"
                    cols="12"
                    lg="6"
                >
                    <formularios></formularios>
                </v-col>
            </v-row>
        </section>

    </encorsa-layout>
</template>

<script>
import EncorsaLayout from "@/Layouts/EncorsaLayout";
import Requisitos from "@/Pages/Proveedores/Requisitos";
import EncabezadoProv from "@/Pages/Proveedores/EncabezadoProv";
import Formularios from "@/Pages/Proveedores/Formularios"
import Titulo from "@/Pages/Proveedores/Titulo"

export default {
    components: {
        Requisitos,
        EncorsaLayout,
        EncabezadoProv,
        Formularios,
        Titulo
    },
    data: () => ({
        secciones: [
            {
                titulo: "Requisitos",
                ico: "mdi-domain",
                secc: "#RequisitosFormularios",
                image: "/img/IconosProveedores/Requisitos.svg"
            },

            {
                titulo: "Formularios",
                ico: "mdi-domain",
                secc: "#RequisitosFormularios",
                image: "/img/IconosProveedores/Formulario.svg"
            },

        ],
    }),
}

</script>
<style>
    html {
        scroll-behavior: smooth;
    }

    .b-green, .b-green:before {
        background: linear-gradient(-60deg, #16a085 0%, #f4d03f 100%);
    }

    .button {
        font-family: Domine;
        display: inline-block;
        position: relative;
        border-radius: 3px;
        text-decoration: none;
        padding: .5em;
        margin: .5em;
        font-size: 1.8em;
        transition: all .2s;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .rot-90:hover {
        filter: hue-rotate(90deg);
    }

</style>
