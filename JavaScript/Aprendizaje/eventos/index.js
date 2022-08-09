// function buttonClick(event){
//     alert('Externo')
// }
// document.getElementById('ext').onclick = buttonClick;
//____________________________________//

const boton = document.querySelector("p");
// boton.onclick = function (){
//     alert("HOLA!");
// }
const action = function (){
    alert("Add Event Listener")
}
const accion = function (){
    boton.textContent = "Parrafo cambiado"
}
boton.addEventListener("dblclick", accion)
