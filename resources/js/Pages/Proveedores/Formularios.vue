<template>
    <div class="p-4">
        <titulo
            data-aos="zoom-in"
            texto="Formularios"
        ></titulo>

        <v-hover>
            <template v-slot:default="{ hover }">
                <v-card
                    data-aos="zoom-in-up"
                    data-aos-delay="50"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out-cubic"
                    data-aos-mirror="true"
                    data-aos-once="false"

                    class="mx-auto rounded-xl"
                    max-width="600"
                    tile
                >
                    <v-list class="green darken-2">
                        <v-list-item-group
                            class="pa-4"
                            v-model="selectedItem"
                            color="green lighten-4"
                        >
                            <v-list-item
                                v-for="(item, i) in items"
                                :key="i"
                            >
                                <div class="d-flex flex-row justify-center">
                                    <v-list-item-icon>
                                        <v-icon large color="white">picture_as_pdf</v-icon>
                                    </v-list-item-icon>

                                    <v-list-item-content>
                                        <v-list-item-title class="white--text" v-text="item.text"></v-list-item-title>
                                    </v-list-item-content>
                                </div>
                            </v-list-item>
                        </v-list-item-group>
                    </v-list>

                    <v-fade-transition>
                        <v-overlay v-if="hover" class="rounded-xl" absolute color="#036358">
                            Proximamente...
                            <v-icon> keyboard_arrow_right</v-icon>
                        </v-overlay>
                    </v-fade-transition>

                </v-card>
            </template>
        </v-hover>
    </div>
</template>

<script>
import Titulo from "@/Pages/Componentes/Titulo";

export default {
    name: "Requisitos",
    components: {
        Titulo
    },
    data: () => ({
        selectedItem: 1,
        items: [
            { text: 'Alta de Proveedor'},
            { text: 'Conflito de interés' },
        ],
    }),
}
</script>
