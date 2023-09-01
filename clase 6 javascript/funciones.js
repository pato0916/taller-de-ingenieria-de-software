console.log("hola mundo");

$(document).ready(function() {
    alert("Hola, Mundo!!");

})

function hola(){
    alert("Hola, Mundo en js!");
}


function CambiarAzulPorId(){
    document.getElementById("azul").style.backgroundColor="blue";
}

function CambiarVerdePorClase(){
    document.getElementsByClassName("verde")[0].style.backgroundColor="green";
}

function Reset(){
    document.getElementById("azul").style.backgroundColor="red";
}
