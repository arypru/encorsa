<template>
    <div class="px-5 lg:px-20">
        <v-row class="justify-between">
            <div
                class="px-6"
                v-for="card in cards" :key="card.title"
            >
                <v-card
                    data-aos="zoom-in-up"
                    data-aos-delay="50"
                    data-aos-duration="1300"
                    data-aos-easing="zoom-in-right"
                    data-aos-mirror="true"
                    data-aos-once="false"

                    align="center"
                    class="rounded-xl my-5 py-5 lg:py-5"
                    width="19rem"
                    height="20rem"
                    elevation="14"
                >
                    <v-img :src="card.src"  width="10rem" height="10rem">
                    </v-img>

                    <v-card-title
                        class="subt white pa-4 d-flex justify-center"
                        v-text="card.title"
                    >
                    </v-card-title>

                    <v-card-subtitle align="justify"
                                     class="descripcion pa-4 tracking-widest d-flex justify-center text-center"
                                     v-html="card.subtitle">
                    </v-card-subtitle>
                </v-card>
            </div>
        </v-row>
    </div>
</template>

<script>
export default {
    name: "DatosContacto",
    data: () => ({
        cards: [
            {
                title: "Email",
                src: "./img/correo.svg",
                color: "red accent-1",
                subtitle:"encorsactes@gmail.com",
            },
            {
                title: "Teléfono",
                src: "./img/telefono.svg",
                color: "red accent-1",
                subtitle:"+0379 4105077",
            },
            {
                title: "Dirección",
                src: "./img/direccion.svg",
                color: "red accent-1",
                subtitle:"Belgrano 1712, 3400<br>Corrientes, Argentina",
            },
            {
                title: "Horario de atención",
                src: "./img/horarioDeAtencion.svg",
                color: "red accent-1",
                subtitle: "Lunes a Viernes<br>8 a 17 hs",
            },
        ],
    }),
}
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Domine&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

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

