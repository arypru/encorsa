<template>
    <encorsa-layout>
        <encabezado></encabezado>

        <div class="flex flex-col lg:justify-around lg:flex-row bg-white px-10 lg:px-0">
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

            <section id="Centrales">
                <CentralesMapa></CentralesMapa>
            </section>

            <section id="CentralHibrida">
                <central-hibrida-malvinas></central-hibrida-malvinas>
            </section>

            <section id="CentralRed">
                <centrales-red></centrales-red>
            </section>
    </encorsa-layout>
</template>

<script>
import EncorsaLayout from "@/Layouts/EncorsaLayout";
import MapaCelular from "@/Pages/Mapa/MapaCelular";
import TituloIcon from "@/Pages/Inicio/TituloIcon";
import Descripcion from "@/Pages/Componentes/Descripcion";
import CentralHibridaMalvinas from "@/Pages/Centrales/CentralHibridaMalvinas";
import CentralesRed from "@/Pages/Centrales/CentralesRed";
import Remate from "@/Pages/Centrales/Remate";
import CentralesMapa from "@/Pages/Centrales/CentralesMapa";
import Encabezado from "@/Pages/Centrales/EncabezadoCentrales"

export default {
    components: {
        TituloIcon,
        Descripcion,
        MapaCelular,
        EncorsaLayout,
        CentralHibridaMalvinas,
        CentralesRed,
        CentralesMapa,
        Encabezado
    },

    data: () => ({
        secciones: [
            {
                titulo: "Centrales",
                secc: "#Centrales",
                image: "/img/icons/quehacemos.svg"
            },

            {
                //seccion que lleva al mapa
                titulo: "Central Híbrida Solar Diésel Malvinas",
                secc: "#CentralHibrida",
                image: "/img/icons/foco.svg"
            },
            {
                titulo: "Centrales Conectadas a Red",
                secc: "#CentralRed",
                image: "/img/icons/acuerdos.svg"
            },

        ],
    }),


}
</script>

<style>
.secc {
    background-image: linear-gradient(to top, #96fbc4 0%, #f9f586 100%);
}

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
