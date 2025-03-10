var start_date = [];
var percentage_discount = [];

//consumo de API
fetch('http://127.0.0.1:8000/api/graphicPromotions')

//Then necesita una promesa y esa promesa se resuelve con una respuesta
.then(datos_obtenidos => datos_obtenidos.json())

//datos obtenidos es el resultado de la promesa respuesta
.then(function transformar(datos_obtenidos){
    //iterar sobre los datos obtenidos
    datos_obtenidos.forEach(function agregar(datos_obtenidos)
    {
        if (datos_obtenidos.start_date != undefined && datos_obtenidos.percentage_discount != undefined){
            percentage_discount.push(datos_obtenidos.percentage_discount);
            start_date.push(datos_obtenidos.start_date);
        }
    });

    //graficar
    var gtaf1 =
    {
        x: start_date,
        y: percentage_discount,
        type: 'bar',
        marker: {
        color: 'rgba(191, 55, 180, 0.7)', 
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
        text: 'Promociones realizadas por fecha' 
    },
    xaxis: {
        title:{
           text: 'Fecha'
        }
    },
    yaxis: {
        title:{
            text: 'porcetaje del descuento'
            
        },
        range: [0, 70] 
    }
};
Plotly.newPlot('graphicPromotions', datosGrafica, layout);
});