<template>
    <div>
        <v-row class="px-9 d-flex justify-center">
            <v-col
                class="px-9 d-flex"
                align="center"
                cols="12"
                md="10"
                v-for="card in cards" :key="card.title"
            >

                <v-card
                    data-aos="zoom-in-up"
                    data-aos-delay="50"
                    data-aos-duration="1300"
                    data-aos-easing="ease-in-out-cubic"
                    data-aos-once="true"

                    align="center"
                    class="rounded-xl my-5 py-5 lg:py-5"
                    width="auto"
                    height="auto"
                    elevation="0"
                >
                    <v-card-text class="text-right fecha"
                                 v-text="card.date">
                    </v-card-text>
                    <v-img :src="card.src" class="center" width="auto" height="30rem">
                    </v-img>

                    <v-card-title
                        class="titulo white pa-6 d-flex justify-center"
                        v-text="card.title"
                    >
                    </v-card-title>

                    <v-card-subtitle align="justify"
                                     class="descripcion pa-4 tracking-widest d-flex justify-center "
                                     v-html="card.textoExpandido">
                    </v-card-subtitle>
                    <v-card-actions>
                        <v-btn
                            color="green"
                            text
                            class="descripcion"
                            href="/novedades"
                        >
                            Volver
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </v-row>

    </div>
</template>

<script>
export default {
    name: "NoticiaExpandida",
    data: () => ({
        cards: [
            {
                date:"04/05/2021",
                title: "Título de la noticia",
                src: "./img/noticia.jpg",
                color: "red accent-1",
                textoExpandido:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. " +
                    "It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum." +
                    "<br><br>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.<br><br>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, comes from a line in section 1.10.32." +
                    "<br><br>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham." +
                    "<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)." +
                    "<br><br>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. " +
                    "<br><br>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc."
                // subtitle:"",
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
    font-size: 3rem;
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
    font-size: 1.8rem;
}
</style>
