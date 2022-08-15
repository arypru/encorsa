<template>
    <div class="secc">
        <img
            class="px-0"
            width="w-auto"
            height="h-auto"
            src="/img/energiakyut.png">

        <div class="px-10 px-lg-16 py-12">
            <v-row>
                <v-col
                    align="center"
                    cols="12"
                    lg="6"
                    sm="6"
                    md="12">

                    <div class="py-8 hidden lg:block">
                        <mapa></mapa>
                    </div>
                </v-col>

                <v-col
                    cols="12"
                    lg="6"
                    sm="6"
                    md="12">
                    <titulo texto="Centrales"></titulo>

                    <table class="table-auto rounded-xl w-full">
                        <tbody class="divide-y divide-green-500">
                            <tr class="bg-yellow-200 hover:bg-opacity-75">
                                <td></td>
                                <td class="font-semibold p-3">Departamento</td>
                                <td class="font-semibold p-3">kW</td>
                            </tr>
                            <tr class="hover:bg-yellow-200 hover:bg-opacity-75">
                                <td class="font-semibold p-3">Malvinas</td>
                                <td class="font-semibold p-3">Esquina</td>
                                <td class="font-semibold p-3">345kW</td>
                            </tr>
                            <tr class="hover:bg-yellow-200 hover:bg-opacity-75">
                                <td class="font-semibold p-3">Bella Vista I</td>
                                <td class="font-semibold p-3">Bella Vista</td>
                                <td class="font-semibold p-3">400kW</td>
                            </tr>
                            <tr class="hover:bg-yellow-200 hover:bg-opacity-75">
                                <td class="font-semibold p-3">Bella Vista II</td>
                                <td class="font-semibold p-3">Bella Vista</td>
                                <td class="font-semibold p-3">200kW</td>
                            </tr>
                            <tr class="hover:bg-yellow-200 hover:bg-opacity-75">
                                <td class="font-semibold p-3">Monte Caseros I</td>
                                <td class="font-semibold p-3">Monte Caseros</td>
                                <td class="font-semibold p-3">400kW</td>
                            </tr>
                            <tr class="hover:bg-yellow-200 hover:bg-opacity-75">
                                <td class="font-semibold p-3">Monte Caseros II</td>
                                <td class="font-semibold p-3">Monte Caseros</td>
                                <td class="font-semibold p-3">200kW</td>
                            </tr>
                            <tr class="hover:bg-yellow-200 hover:bg-opacity-75">
                                <td class="font-semibold p-3">Aguará</td>
                                <td class="font-semibold p-3">Monte Caseros</td>
                                <td class="font-semibold p-3">200kW</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="py-8 block lg:hidden">
                        <mapa-celular></mapa-celular>
                    </div>

                </v-col>
            </v-row>
        </div>


        <img width="w-auto"
             height="h-auto"
             src="/img/waveabajo.png">
    </div>
</template>

<script>
import mapa from "@/Pages/Mapa/mapa";
import Titulo from "@/Pages/Componentes/Titulo"
import MapaCelular from "@/Pages/Mapa/MapaCelular";
export default {
    components: {
        mapa,
        Titulo,
        MapaCelular
    },
}


</script>
