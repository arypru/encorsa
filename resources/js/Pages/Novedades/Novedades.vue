<template>
    <encorsa-layout>
        <Encabezado></Encabezado>
        <Noticias></Noticias>
    </encorsa-layout>
</template>

<script>
import EncorsaLayout from "@/Layouts/EncorsaLayout";
import Encabezado from "@/Pages/Novedades/Encabezado";
import Noticias from "@/Pages/Novedades/Noticias";
export default {
    name: "Novedades",
    components: {Noticias, Encabezado, EncorsaLayout}
}
</script>
