<template>
    <l-map style="height: 450px;width: 380px;border-radius: 40px" :zoom="zoom" :center="center">
        <l-tile-layer :url="url"></l-tile-layer>

        <!--esquina, malvinas-->
        <l-marker
            :lat-lng="[-29.61375123349134, -58.98223203600463]"
            :icon="icon">
            <l-tooltip>Malvinas,Dpto Esquina. 345kW</l-tooltip>
        </l-marker>
        <!-- <l-polygon :lat-lngs="polygon.latlngs" :color="polygon.color"></l-polygon>-->

        <!--bella vista I-->
        <l-marker
            :lat-lng="[-28.711563318000003,-58.926594963000014]"
            :icon="icon">
            <l-tooltip>Bella Vista I, Dpto.Bella Vista.400kW</l-tooltip>
        </l-marker>

        <!--bella vista II-->
        <l-marker
            :lat-lng="[-28.508146934717697, -59.03801468186003]"
            :icon="icon">
            <l-tooltip>Bella Vista II, Dpto.Bella Vista.200kW</l-tooltip>
        </l-marker>


        <!--monte caseros I-->
        <l-marker
            :lat-lng="[-29.998088230999997,-57.613038130999996]"
            :icon="icon">
            <l-tooltip>Monte Caseros I, Dpto.Monte Caseros I. 400kW</l-tooltip>
        </l-marker>

        <!--monte caseros II-->
        <l-marker
            :lat-lng="[-30.512861602999976,-58.059579411000016]"
            :icon="icon">
            <l-tooltip>Monte Caseros II, Dpto.Monte Caseros II. 200kW</l-tooltip>
        </l-marker>

        <!--Monte Caseros,Aguara-->
        <l-marker
            :lat-lng="[-29.83167295999999,-57.858870008999986]"
            :icon="icon">
            <l-tooltip>Aguara, Dpto.Monte Caseros. 200kW</l-tooltip>
        </l-marker>
    </l-map>
</template>

<script>
import {LMap, LTileLayer, LMarker, LIcon, LTooltip,LPolygon} from 'vue2-leaflet';

export default {
    components: {
        LMap,
        LTileLayer,
        LMarker,
        LIcon,
        LTooltip,
        LPolygon
    },
    data() {
        return {
            url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            zoom: 7,
            center: [-28.699024073455806, -57.85757670195362],
            icon: L.icon({
                iconUrl: '/img/energia-renovable.svg',
                iconSize: [32, 37],
                iconAnchor: [16, 37]
            }),
            staticAnchor: [16, 37],
            customText: 'Foobar',
            iconSize: 64,
            polygon: {
                latlngs: [[-30.722017173401156, -57.805366749682605],[-30.594661313794415, -58.03373134287877],[-30.536720402132566, -57.977426413436646],[-30.414813529446736, -57.981546286283645],[-30.276151859818594, -58.00214564878656],[-30.07908170268655, -58.003518939735564],[-29.864946683959584, -58.06257045160866],[-29.81253244498011, -58.090036271254945],[-29.808607602933975, -58.01969742200852],[-29.824065347342188, -57.75672913138602],[-29.849081777576263, -57.59193421557354],[-29.941945058147947, -57.5424957414094],[-30.141663889576368, -57.51502992242933],[-30.18084702539797, -57.63862610550792],[-30.276957736410328, -57.616653451922765],[-30.401405715147924, -57.733383182588085],[-30.480732623769423, -57.86109924377676],[-30.588371677350636, -57.88169860847817],[-30.700614722904056, -57.81578064279273]],
                color: 'green'
            },
        };

    },
}
</script>
