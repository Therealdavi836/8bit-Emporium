var creation_date = [];
var amount = [];

//consumo de API
fetch('http://127.0.0.1:8000/api/graphicRechargeTarjets')

//Then necesita una promesa y esa promesa se resuelve con una respuesta
.then(datos_obtenidos => datos_obtenidos.json())

//datos obtenidos es el resultado de la promesa respuesta
.then(function transformar(datos_obtenidos){
    //iterar sobre los datos obtenidos
    datos_obtenidos.forEach(function agregar(datos_obtenidos)
    {
        if (datos_obtenidos.creation_date != undefined && datos_obtenidos.amount != undefined){
            creation_date.push(datos_obtenidos.creation_date);
            amount.push(datos_obtenidos.amount);
        }
    });

    //graficar
    var gtaf1 =
    {
        x: creation_date,
        y: amount,
        type: 'bar',
        marker: {
            color: 'rgba(55, 191, 89, 0.7)', 
            line: {
                color: "#000",
                width: 1
            }
        }
    };

    var datosGrafica = [gtaf1];
//estilos
var layout = {

    title:{
        text: 'Cambios en los montos de recarga a lo largo del tiempo.'
    },
    xaxis: {
        title:{
           text: 'Fecha'
        }
    },
    yaxis: {
        title:{
            text: 'Monto'
        } 
    }
};
Plotly.newPlot('graphicRechargeTarjets', datosGrafica, layout);
});