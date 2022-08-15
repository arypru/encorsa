<template>
    <div class="px-24 bg-white pt-4 pb-12">
        <v-row>

            <v-col
                v-for="n in secciones"
                :key="n"
            >
                <v-icon
                    large
                    color="green darken-2"
                >
                    {{ secciones.ico}}
                </v-icon>

                ¿Que Hacemos?
            </v-col>
        </v-row>
    </div>

</template>

<script>
export default {
    data: () => ({

        secciones: [
            {
                titulo: "Generación",
                ico: "./img/generacion.svg",
                secc: "#textoQueHacemos"
            },

        ],
    }),
}
</script>
