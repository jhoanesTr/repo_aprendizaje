// const { colors } = require("laravel-mix/src/Log");

require("./bootstrap");

// BOTÓN DE CAMBIO DE COLOR
const btn = document.getElementById("btn");

btn.addEventListener("click", function onClick(event) {
    // RANDOMIZADOR DE COLORES
    var color = "#" + Math.random().toString(16).slice(-3);
    // ARRAY DE IDS QUE SE QUIERAN MODIFICAR DE COLOR (BG)
    var ids = ["box", "bus"];
    for (var i = 0; i < ids.length; i++) {
        document
            .getElementById(ids[i])
            .style.setProperty("background-color", color);
    }
    // UN SELECTOR QUE PUEDE LLEVAR VARIAS CLASES
    var cls = document.querySelectorAll(".text-nowrap");
    for (var j = 0; j < cls.length; j++) {
        cls[j].style.setProperty("background-color", color);
    }
});

// FILAS DE LAS TABLAS LLEVAN AL REGISTRO DE PERSONAS
document.addEventListener("DOMContentLoaded", () => {
    const rows = document.querySelectorAll("tr[data-href]");
    rows.forEach((row) => {
        row.addEventListener("click", () => {
            window.location.href = row.dataset.href;
        });
    });
});

// BOTÓN MODO OSCURO
const btnSwitch = document.querySelector("#switch");

btnSwitch.addEventListener("click", () => {
    document.body.classList.toggle("dark");
    btnSwitch.classList.toggle("active");
});

// CAMBIO DE TAMAÑO DE LETRA EN PANTALLA
var classes = ["f0", "f1", "f2", "f3", "f4"];
var classIndex = 2;

document.getElementById("aumentar").addEventListener("click", function () {
    let previousClass = classIndex;
    classIndex++;
    classIndex = classIndex == classes.length ? classes.length - 1 : classIndex;
    changeClass(previousClass, classIndex);
});
document.getElementById("disminuir").addEventListener("click", function () {
    let previousClass = classIndex;
    classIndex--;
    classIndex = classIndex < 0 ? 0 : classIndex;
    changeClass(previousClass, classIndex);
});

function changeClass(previous, next) {
    if (previous != next) {
        var htmlElement = document.querySelector("html");
        htmlElement.classList.remove(classes[previous]);
        htmlElement.classList.add(classes[next]);
    }
}
