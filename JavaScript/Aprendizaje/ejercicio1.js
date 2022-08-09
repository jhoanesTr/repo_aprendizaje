function saludar() {
    console.log("Esto es una funcion");
}

saludar();
//------------------------------------//

// Tabla de multiplicacion del 1
for (i = 0; i <= 10; i++) {
    console.log("1 x", i, "=", 1 * i);
}
//-----------------------------------//

// Tabla de multiplicacion del 1 (Funcion)
function tablaDelUno(){
    for (i = 0; i <= 10; i++) {
        console.log("1 x", i, "=", 1 * i);
    }
}
//----------------------------------------//

//Tabla de multiplicar
function tabla(numero = 5) {
    for (i=0; i<=10; i++) {
        console.log(numero,"x", i, "=", numero*i)
    }
}
tabla(10);
tabla();
//_______________________________________________//

//Suma
function sumar(a, b) {
    console.log(a, "+", b)
    return a+b;
}
var resultado = sumar(5,5);
console.log("El resultado de la suma es", resultado);
console.log(sumar(7,11));
//___________________________________________________//

