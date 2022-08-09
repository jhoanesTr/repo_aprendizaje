if (typeof window !== "undefined"){
    console.log("Estas en el browser")
}else{
    console.log("Estas en el server")
}

const div = document.createElement("div");  // <div></div> Creado pero no insertado
const comment = document.createComment("Esto es un comentario desde JS");
const texto = document.createTextNode("Hello!");

// Metiendo cosas dentro de los elementos creados
div.textContent = "Elemento 1";
div.id = "ele-1";
div.className = "domJS";

const div2 = div.cloneNode();   // Clonando elementos creados
div2.textContent = "Elemento 2";
div.id = "ele-2";
div.className = "domJS";
div.style = "color: blue";

// Recogiendo atributos
const x = document.querySelector(".p-pru");
console.log(x.hasAttributes()) // true
console.log(x.getAttributeNames()) // ['class', 'id']
console.log(x.getAttribute("class")) //  p-pru

console.log(x.hasAttribute("clas")) // false
console.log(x.hasAttribute("class")) // true

x.removeAttribute("id") // ID eliminado
console.log(x.getAttributeNames()) // ['class']
x.setAttribute("id", "id-pru")  // Añade un ID

/* Cambia el contenido del parrafo */   // .textContent
const parrafo = document.querySelector("p");
const accion = function (){
    parrafo.textContent = "Parrafo cambiado"
}
parrafo.addEventListener("click", accion);
//___________________________________________//

/*  */
//const inner = document.querySelector("div");
//inner.innerHTML = "<strong>Div convertido en strong</strong>";  //'<div><strong>Div convertido en strong</strong></div>'
//inner.textContent  // Div convertido en strong
//______________________________________________//

/*appendChild()*/


}