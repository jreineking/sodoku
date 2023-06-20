//arreglo para saber cuales DIVs ys están ocupados
let arreglo = ["","","","",""];

//funcion que evita que se abra como enlace al soltar un elemento
function allowDrop(ev)
{
    ev.preventDefault();
}

//que sucede cuando se arrastra un elemento
function drag(ev)
{
    //metodo que establece el tip de datos y el valor de dato arrastrado
    //en este caso el dato es el div donde se encuentra numero a arrastrar
    ev.dataTransfer.setData("text", ev.target.id);    
}

function drop(ev)
{
    //mediante ev.target.id tomo el nombre del id del DIV que puede ser 0 o 1 o 2 o 3 o 4 o 5
    //si el arreglo en diah position esta vacia, significa que no tiene nada, es decir
    //puedo soltar ahi, en caso contrario, ya tiene un elemento
    if(arreglo[parseInt(ev.target.id)] == "")
    {
        //obtengo los datos arrastrado con elemento dataTransfer.getData()
        //este metodo devolvera cualquier dato ques e haya establecido
        //en el mismo tipo en metodo serData()
        //en este ejemplo data quedara con cualquiera de los numeros de resultado
        var data = ev.dataTransfer.getData("text");
        //agrego al arreglo el nombre del id
        arreglo[parseInt(ev.target.id)] = data;
        //agrego el elemento arrastrado al elemento soltado
        ev.target.appendChild(document.getElementById(data));
    }
    
    //controlo que están arratsrados los elmentos
    if(arreglo[0] != "" && arreglo[1] != "" && arreglo[2] != "" && arreglo[3] != "" && arreglo[4] != "")
    {
        //controlo si hay coincidencia
        if(arreglo[0] == "d" && arreglo[1] == "e" && arreglo[2] == "b" && arreglo[3] == "c" && arreglo[4] == "a")
        {
            document.querySelector("h2").innerHTML = "Excelente...";
        }else{
            document.querySelector("h2").innerHTML = "Que Mal, intentalo de nuevo...";
        }
    }
}