<template>
    <div class="px-10 px-lg-12 px-md-0">
        <v-row>
            <v-col
                class="d-flex justify-lg-space-between justify-md-center justify-sm-center"
                cols="12"
                lg="6"
                v-for="card in cards" :key="card.title"
            >

                <v-card

                    align="center"
                    class="rounded-xl my-5 py-5 lg:py-2 lg:px-2"
                    max-width="mx-auto"
                    min-height="my-auto"
                >

                    <v-img max-width="mx-auto"
                           min-height="my-auto"  :src="card.src">
                    </v-img>

                    <v-card-title
                        class="titulo white pa-4 d-flex justify-center"
                        v-text="card.title"
                    >
                    </v-card-title>

                    <v-card-subtitle v-text="card.descripcion" align="justify" class="pa-4 text-black lg:text-base tracking-widest descripcion">

                    </v-card-subtitle>
                </v-card>
            </v-col>
        </v-row>

    </div>
</template>

<script>
export default {
    name: "MisionVision",
    data: () => ({
        cards: [
            {
                title: "Misión",
                src: "./img/Mision.png",
                descripcion: "Impulsar la generación, desarrollo, distribución y comercialización energías renovables o blandas, en consonancia con políticas públicas de la Provincia, observando y asegurando el resguardo del medioambiente y los recursos naturales, con el propósito de mejorar la calidad de vida y promover el desarrollo económico y social de los correntinos.",

            },
            {
                title: "Visión",
                src: "./img/Vision.png",
                descripcion: "Constituirnos como modelo de eficiencia y eficacia empresarial, regida por los logros y transparencia de gestión y el cumplimiento de las metas de la empresa.",

            },
        ],
    }),
}
</script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Domine&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    .titulo {
        font-family: 'Domine', serif;
        font-size: 2.2rem;
        color: black;
        font-weight: bold;
    }

    .subt {
        font-family: 'Domine', serif;
        font-size: 1.5rem;
        color: black;
        font-weight: bold;
    }

    .descripcion {
        font-family: 'Roboto', sans-serif;
        color: black;
        font-size: 1.2rem;
    }
</style>

