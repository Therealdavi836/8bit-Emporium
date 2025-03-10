var quantity = [];
var sale_date = [];

//consumo de API
fetch('http://127.0.0.1:8000/api/graphicDetails')

//Then necesita una promesa y esa promesa se resuelve con una respuesta
.then(datos_obtenidos => datos_obtenidos.json())

//datos obtenidos es el resultado de la promesa respuesta
.then(function transformar(datos_obtenidos){
    //iterar sobre los datos obtenidos
    datos_obtenidos.forEach(function agregar(datos_obtenidos)
    {
        if (datos_obtenidos.sale_date != undefined && datos_obtenidos.quantity != undefined){
            quantity.push(datos_obtenidos.quantity);
            sale_date.push(datos_obtenidos.sale_date);
        }
    });

    //graficar
    var gtaf1 =
    {
        x: sale_date,
        y: quantity,
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
        text: 'Compras realizadas por fecha'
    },
    xaxis: {
        title:{
           text: 'Fecha'
        }
    },
    yaxis: {
        title:{
            text: 'cantidad'
        } 
    }
};
Plotly.newPlot('graphicDetails', datosGrafica, layout);
});