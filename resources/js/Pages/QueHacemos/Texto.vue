<template>
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
                         src="/img/panelSolar.svg">
                </div>

                <titulo class="pb-10" texto="¿Qué Hacemos?"></titulo>

                <descripcion
                    texto="Nos dedicamos al estudio, exploración, explotación, transporte, almacenaje, distribución, producción, comercialización e industrialización de energías alternativas o blandas mediante la aplicación de fuentes renovables o biocombustibles, sus derivados directos e indirectos.
                    ">
                </descripcion>
                <descripcion
                    texto="Prestamos servicios públicos, de generación de energía fotovoltaica, de transporte y distribución de hidrocarburos. Transportamos, distribuimos y comercializamos energía eléctrica y bienes energéticos. ">
                </descripcion>
                <descripcion
                    texto="Podemos realizar todas estas actividades en Argentina y en el extranjero.">
                </descripcion>
                <descripcion
                    texto="Con el objetivo de hacer más eficiente nuestro trabajo, lo organizamos en líneas. Así inauguramos Kuarajhý Energía, la línea que reúne toda la actividad relacionada a centrales solares fotovoltaicas en las que interviene la empresa. ">
                </descripcion>
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
                         src="/img/panelSolar.svg">
                </div>
            </v-col>
        </v-row>
    </div>
</template>


<script>
import Titulo from "@/Pages/Componentes/Titulo";
import Descripcion from "@/Pages/Componentes/Descripcion";
import EncorsaLayout from "@/Layouts/EncorsaLayout";

export default {
    components: {
        EncorsaLayout,
        Titulo,
        Descripcion
    },
}
</script>

