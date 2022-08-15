<template>
    <div>
        <div class="px-10 lg:px-24 py-10">
            <titulo texto="Centrales"></titulo>
                    <descripcion
                        class="pb-12"
                        texto="Con el objetivo de construir, operar y supervisar el mantenimiento de las primeras cinco centrales fotovoltaicas conectadas a red, con inicio en el primer semestre del año 2021, firmamos y ejecutamos convenios con cooperativas eléctricas locales."></descripcion>

            <descripcion texto="">
            </descripcion>

        </div>
    </div>
</template>

<script>

import mapa from "@/Pages/Mapa/mapa";
import MapaCelular from "@/Pages/Mapa/MapaCelular";
import Descripcion from "@/Pages/Componentes/Descripcion";
import EncorsaLayout from "@/Layouts/EncorsaLayout";
import Titulo from "@/Pages/Componentes/Titulo";

export default {
    components: {
        mapa,
        Descripcion,
        MapaCelular,
        EncorsaLayout,
        Titulo
    },
}

</script>
