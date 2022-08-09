// Ambito global
var a = 1;
console.log(a);

// Ambito a nivel funcion
function x(){
    var a = 2;
    console.log(a);
}
x();
//_______________________//

var b = "Hola!";
console.log("La variable tiene",b.length,"letras.");
console.log("En minusculas", b.toLowerCase());
console.log("En mayusculas", b.toUpperCase());
//_________________________________________________//

let lenguaje = "JavaScript"
console.log(`Estoy aprendiendo ${lenguaje}`);
//_________________________________________________//

// Primera letra mayuscula
function capitalize(word) {
    return word[0].toUpperCase() + word.substring(1).toLowerCase();
}
console.log(capitalize("sam")); // "Sam"
console.log(capitalize("ALEX")); // "Alex"
console.log(capitalize("chARLie")); // "Charlie"
//_______________________________________________________________//

//
let text = "Jhoanes";
if (text.length <= 10){
    console.log(text);
}else {
    console.log(text.substring(0,9)+"...")
}
//________________________________________//

//
function canVotar(edad) {
    if (edad >= 18){
        return true
    }else{
        return false
    }
}
console.log(canVotar(15));
console.log(canVotar(20));
//______________________________//