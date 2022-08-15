<template>
    <encorsa-layout>
        <Encabezado></Encabezado>
        <NoticiaExpandida></NoticiaExpandida>
    </encorsa-layout>
</template>

<script>
import EncorsaLayout from "@/Layouts/EncorsaLayout";
import Encabezado from "@/Pages/Novedades/Encabezado";
import NoticiaExpandida from "@/Pages/Novedades/NoticiaExpandida";
export default {
    name: "VistaNoticia",
    components: {NoticiaExpandida, Encabezado, EncorsaLayout}
}
</script>

