<template>
    <encorsa-layout>
        <div class="hidden lg:block">
            <v-img src="./img/Headers/HeaderEmpresa.jpg"></v-img>
        </div>
        <div class="block lg:hidden">
            <v-img src="./img/Headers/HeaderEmpresaResponsive.jpg"></v-img>
        </div>

        <div class="flex flex-col lg:justify-around lg:flex-row bg-white ">
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

        <v-divider class="grey lighten-4"></v-divider>

        <section id="QueHacemos">
            <Texto></Texto>
        </section>

        <section id="kuarajhy">
            <KuyarajhuEnergia></KuyarajhuEnergia>
        </section>

        <section id="convenios">
            <Acuerdos></Acuerdos>
        </section>

        <section id="unite">
            <unite></unite>
        </section>

    </encorsa-layout>
</template>

<script>
import Texto from "@/Pages/QueHacemos/Texto"
import SeccionEmpresa from "@/Pages/QueHacemos/seccionEmpresa";
import KuyarajhuEnergia from "@/Pages/QueHacemos/KuyarajhuEnergia"
import EncorsaLayout from "@/Layouts/EncorsaLayout";
import Acuerdos from "@/Pages/QueHacemos/Acuerdos"
import Unite from "@/Pages/QueHacemos/unite"

export default {
    components: {
        Acuerdos,
        EncorsaLayout,
        SeccionEmpresa,
        Texto,
        KuyarajhuEnergia,
        Unite
    },

    data: () => ({
        secciones: [
            {
                titulo: "¿Qué Hacemos?",
                ico: "mdi-domain",
                secc: "#QueHacemos",
                image: "/img/icons/quehacemos.svg"
            },

            {
                //seccion que lleva al mapa
                titulo: "Kuarajhy Energía",
                ico: "mdi-domain",
                secc: "#kuarajhy",
                image: "/img/icons/foco.svg"
            },
            {
                titulo: "Acuerdos",
                ico: "mdi-domain",
                secc: "#convenios",
                image: "/img/icons/acuerdos.svg"
            },
            {
                titulo: "Unite a nosotros",
                ico: "mdi-domain",
                secc: "#unite",
                image: "/img/icons/unite.svg"
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
