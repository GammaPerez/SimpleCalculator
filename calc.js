let total = 0;

agregar = (num) => {
    let operacion = document.getElementById("operaciones");
    operacion.innerHTML += num;
}

suma = () => {
    let sumar = document.getElementById("operaciones");
    sumar.innerHTML += "+";
}

resta = () => {
    let sumar = document.getElementById("operaciones");
    sumar.innerHTML += "-";
}

multi = () =>{
    let sumar = document.getElementById("operaciones");
    sumar.innerHTML += "*";
}

div = () => {
    let sumar = document.getElementById("operaciones");
    sumar.innerHTML += "/";
}

let redex = /(\d+)/g;
let oper = /\D/g; 

igual = () => {
    let result = document.getElementById("operaciones").innerText;
    let numeros = result.match(redex);
    let operadores = result.match(oper);
    console.log(numeros.length % 2);
    if (numeros.length % 2){
        numeros.push("0");
    }
    console.log(numeros);
    console.log(operadores);
    while(operadores.length > 0){
        if(operadores.indexOf("*") != -1){
            let multi = operadores.indexOf("*");
            let val = parseFloat(numeros[multi]) * parseFloat(numeros[multi + 1]);
            numeros.splice(multi, 2, val);
            operadores.splice(multi, 1);
            console.log(numeros);
            console.log(operadores);
        }else if(operadores.indexOf("/") != -1){
            let div = operadores.indexOf("/");
            let val = parseFloat(numeros[div]) / parseFloat(numeros[div + 1]);
            numeros.splice(div, 2, val);
            operadores.splice(div, 1);
            console.log(numeros);
            console.log(operadores);
        }else if(operadores.indexOf("+") != -1){
            let suma = operadores.indexOf("+");
            let val = parseFloat(numeros[suma]) + parseFloat(numeros[suma + 1]);
            numeros.splice(suma, 2, val);
            operadores.splice(suma, 1);
            console.log(numeros);
            console.log(operadores);
        }else if(operadores.indexOf("-") != -1){
            let resta = operadores.indexOf("-");
            let val = parseFloat(numeros[resta]) - parseFloat(numeros[resta + 1]);
            numeros.splice(resta, 2, val);
            operadores.splice(resta, 1);
            console.log(numeros);
            console.log(operadores);
        }
    }
    document.getElementById("resultados").innerHTML = numeros[0];
}

borrar = () => {
    let borrar = document.getElementById("operaciones").innerText;
    if(borrar != ""){
        borrar = borrar.slice(0, -1);
        console.log(borrar);
        document.getElementById("operaciones").innerText = borrar;
    }
}

borrarAll = () => {
    document.getElementById("operaciones").innerHTML = "";
    document.getElementById("resultados").innerHTML = "";
}