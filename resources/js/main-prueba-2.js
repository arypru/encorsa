const LONGITUD_CENTRO = -57.85757670195362,
      LATITUD_CENTRO =  -28.699024073455806,
      ZOOM = 7;

    const marcadores = []; // Arreglo para que se puedan agregar otros más tarde

    Capital = [-58.82127379287902, -27.48429683628819]
    Esquina = [-59.52613394536893, -29.962185716552124]
    Mercedes = [-58.0814082504577, -29.18048982836485]
    departamentos = [Capital, Esquina, Mercedes]

const mapa = new ol.Map({
    target: 'map', // el id del elemento en donde se monta
    layers: [
        new ol.layer.Tile({
            source: new ol.source.OSM()
        })
    ],
    view: new ol.View({
        center: ol.proj.fromLonLat([LONGITUD_CENTRO, LATITUD_CENTRO]),
        zoom: ZOOM,
    })
});

for (var i=0; i<departamentos.length; i++){
let marcador = new ol.Feature({
    geometry: new ol.geom.Point(
        ol.proj.fromLonLat(departamentos[i])// En dónde se va a ubicar
    ),
})

// Agregamos icono
marcador.setStyle(new ol.style.Style({
    image: new ol.style.Icon({
        src: "icon.png",
    })
}));

// marcadores debe ser un arreglo


marcadores.push(marcador);// Agregamos el marcador al arreglo
};

let capa = new ol.layer.Vector({
    source: new ol.source.Vector({
        features: marcadores, // A la capa le ponemos los marcadores
    }),
});



// Y agregamos la capa al mapa
mapa.addLayer(capa);

mapa.on('click', function(e){
    console.log(e.coordinate);
  })
