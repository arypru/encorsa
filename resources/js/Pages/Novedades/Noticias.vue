<template>
    <div class="px-5 lg:px-20 place-content-center">
            <v-row class="justify-center">
                <v-col
                    data-aos="zoom-in-up"
                    data-aos-duration="1300"
                    data-aos-easing="zoom-in-right"
                    data-aos-mirror="true"

                    class="px-9 d-flex flex-column justify-center"
                    cols="12"
                    md="6"
                    lg="6"
                >
                    <titulo-icon image="/img/icons/noticias.svg" titulo="Novedades Recientes"></titulo-icon>
                    <div class="descripcion">Te invitamos que nos sigas a nuestras redes sociales para mantenerte informado sobre las ultimas novedades relacionadas con ENCOR S.A </div>

                    <div class="flex justify-center">
                        <a target="_blank" :href="'https://www.instagram.com/encorsactes/'" >
                            <img src="/img/instagram.svg" width="480" height="480"/>
                        </a>
                    </div>

                </v-col>

                <v-col
                    data-aos="zoom-in-up"
                    data-aos-delay="50"
                    data-aos-duration="1300"
                    data-aos-easing="zoom-in-right"
                    data-aos-mirror="true"
                    data-aos-once="false"

                    class="px-9 d-flex justify-center"
                    cols="12"
                    md="6"
                    lg="6"
                >
                    <img src="/img/encorsa-novedadesrecientes.svg" width="580" height="580"/>
                </v-col>

            </v-row>

    </div>
</template>

<script>
export default {
    name: "Noticias",
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

    .fecha {
        font-family: 'Roboto', sans-serif;
        color: black;
        font-size: 1rem;
    }
</style>
