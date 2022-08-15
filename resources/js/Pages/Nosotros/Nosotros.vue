<template>
    <encorsa-layout>
        <Encabezado></Encabezado>
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

        <section id="LaEmpresa">
            <LaEmpresa></LaEmpresa>
        </section>

        <section id="MisionVision">
            <MisionVision></MisionVision>
        </section>

        <section id="Directorio">
            <Directorio></Directorio>
        </section>
    </encorsa-layout>
</template>

<script>
import Encabezado from '@/Pages/Nosotros/Encabezado'
import EncorsaLayout from "@/Layouts/EncorsaLayout";
import LaEmpresa from "@/Pages/Nosotros/LaEmpresa";
import MisionVision from "@/Pages/Nosotros/MisionVision";
import Directorio from "@/Pages/Nosotros/Directorio";

export default {
    name: "Nosotros",
    components: {Directorio, MisionVision, LaEmpresa, EncorsaLayout, Encabezado},
    data: () => ({
        secciones: [
            {
                titulo: "La empresa",
                secc: "#LaEmpresa",
                image: "/img/IconosNosotros/LaEmpresa.svg"
            },

            {
                titulo: "Misión-Visión",
                secc: "#MisionVision",
                image: "/img/IconosNosotros/MisionVision.svg"
            },
            {
                titulo: "Directorio",
                secc: "#Directorio",
                image: "/img/IconosNosotros/Directorio.svg"
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
