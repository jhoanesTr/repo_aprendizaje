/*
* Crear un elemento html para insertarlo en el DOM|
* ________________________________________________|
*/
const titulo = document.createElement('h1');
titulo.id = "unId";
titulo.style = "color: red";
titulo.textContent = "DOM 2";
document.body.appendChild(titulo);

/*
* Crear un elemento dentro de otro elemento|
* _________________________________________|
* Primero creamos el elemento hijo(parrafo)
* Ahora creamos el elemento padre(background)
* Por ultimo insertamos el elemnto padre al DOM
*/
const parrafo = document.createElement('p');
parrafo.textContent = "Texto dentro del div"

const background = document.createElement("div");
background.id = "idBackground";
background.style = "background-color: yellow"
background.appendChild(parrafo);    //Metemos el elemnto hijo al elemento padre

document.body.appendChild(background)

//--------------insertAdjacent--------------//
/*
* insertAdjacentElement()
* insertAdjacentHTML()
* insertAdjacentText()
*/
const div = document.createElement("div");
div.textContent = "insertAdjacentElement()";

const app = document.querySelector("#idBackground");
app.insertAdjacentElement("beforebegin", div); //inserta antes del div#idBackground
//afterbegin          //inserta dentro del div#idBackground pero antes del parrafo
//beforeend           //inserta dentro del div#idBackground pero despues del parrafo
//afterend            //inserta despues del div#idBackground


const eliminar = document.querySelector("#eliminar");
console.log(eliminar.isConnected);  //true
eliminar.remove();
console.log(eliminar.isConnected);  //false