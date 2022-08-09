// Arrays
let listaCompra = ["Pera", "Manzana", "Cebolla"]
console.log(listaCompra.length) // 3
console.log(listaCompra[1]) // Manzana
listaCompra.push("Naranja") // Añade al array
console.log(listaCompra) // ['Pera', 'Manzana', 'Cebolla', 'Naranja']

// Foreach array
const manzanas = ["Verde", "Roja", "Azul"];
manzanas.forEach(function (manzana){
    console.log(manzana)
})

/* Objetos */
const perfil = {
    nombre: "Jhoanes",
    apellido1: "Villarroel",
    apellido2: "Duran",
    edad: "20",
}
// Imprimir
console.log(perfil.nombre);
console.log(perfil["edad"]);

//Añadir propiedades
perfil.añoNacimiento = 2002;

console.log(perfil)

//toString()
//console.log(perfil.toString())


// Recuperar primera palabra con indexOf()
function returnNombre(nombreCompleto){
    let espacio = nombreCompleto.indexOf(" ")
    let nombre = nombreCompleto.substring(0, espacio)
    return console.log(nombre);
}
returnNombre("Jhoanes Villarroel Duran");

// Recuperar primera palabra con split()
function returnNombre2(nombreCompleto) {
    let espacio = nombreCompleto.split(" ") // Convierte en un array de palabras
    let nombre = espacio[0];
    let apellido1 = espacio[1];
    let apellido2 = espacio[2];
    return console.log(`Tu nombre es: ${nombre}
    Y tus apellidos son: ${apellido1} ${apellido2}`);
}
returnNombre2("Jhoanes Villarroel Duran");