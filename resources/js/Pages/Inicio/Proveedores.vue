<template>
    <div class="">
        <TituloIcon titulo="Proveedores"></TituloIcon>
        <Descripcion texto="Te invitamos a sumarte y contactarnos para continuar desarrollando juntos energías renovables en nuestra provincia."></Descripcion>

        <inertia-link href="/proveedores">
            <v-btn
                data-aos="zoom-in-up"
                data-aos-delay="50"
                class="titulo my-3"
                color="green darken-1"
            >

                <p class="text-sm text-white my-1 mx-12">
                    Sumate
                    <v-icon> keyboard_arrow_right</v-icon>
                </p>
            </v-btn>
        </inertia-link>

    </div>
</template>

<script>
import TituloIcon from "@/Pages/Inicio/TituloIcon";
import Descripcion from "@/Pages/Componentes/Descripcion";
export default {
    components: {TituloIcon,Descripcion}
}
</script>
