<template>
    <div class="mt-10">
        <Titulo texto="Contacto"
                data-aos="zoom-in"></Titulo>

        <v-row class="d-flex justify-center">
            <v-col cols="10" >
                <v-card
                    color="grey lighten-4"
                    elevation="3"
                    class="rounded-xl pa-6"
                    data-aos="zoom-in-up"
                    data-aos-delay="50"
                    data-aos-duration="1800"
                    data-aos-easing="ease-in-out-cubic"
                    data-aos-mirror="true"
                    data-aos-once="false"
                >
                    <v-row class="mt-3">
                        <v-text-field
                            solo
                            label="Nombre"
                            prepend-inner-icon="mdi-map-marker"
                            class="mx-3"
                        ></v-text-field>

                        <v-text-field
                            solo
                            label="Email"
                            prepend-inner-icon="alternate_email"
                            class="mx-3 "
                        ></v-text-field>
                    </v-row>

                    <v-textarea
                        solo
                        counter
                        label="Mensaje"
                        prepend-inner-icon="message"
                    ></v-textarea>

                    <div class="d-flex justify-center">
                        <v-btn
                            align="center"
                            class="titulo my-4 green lighten-1"
                            rounded="true"
                        >
                            <p class="text-sm text-white my-1">
                                Enviar
                                <v-icon> keyboard_arrow_right </v-icon>
                            </p>
                        </v-btn>
                    </div>

                </v-card>
            </v-col>
        </v-row>
    </div>
</template>

<script>
import Titulo from "@/Pages/Componentes/Titulo";
import Descripcion from "@/Pages/Componentes/Descripcion";
export default {
    name: "FormularioContacto",
    components: {
        Titulo, Descripcion
    }
}
</script>
