var array1 = ["Dinero",
    "Salarios Pendientes",
    "Prestaciones Laborales",
    "Acciones",
    "Seguros ",
    "Joyas",
    "Electrodomésticos",
    "Vehículos",
   "Edificaciones ",
   "Terrenos",
    "Animales",
    "Textiles ",
   " Creaciones de Sofware",
    "Aplicaciones ",
   "Creaciones Artisitcas",
   "Creaciones musicales",
  "Patentes",
   "Marcas",
  "Franquicias",
   "Empresas"
];



array1.forEach(element => $(".list-belongings").append( 
    "<div style='display:flex; align-items:center;'   class='col-sm-6 col-md-5'><i style='color:#125499;' class='fas fa-archive'></i> <p style='     white-space: nowrap; margin-left:5%; margin-top: 4%;'>"+element+"</p></div>" ));

var modalA = document.getElementById("myModalTestamento");
var modalB = document.getElementById("myModalParticion");
var modalC = document.getElementById("myModalSucesion");
var modalD = document.getElementById("myModalPertenencia");

var btn = document.getElementById("myBtn");
var btnB = document.getElementById("myBtnB");
var btnC = document.getElementById("myBtnC");
var btnD = document.getElementById("myBtnD");

var span = document.getElementsByClassName("close")[0];
var spanB = document.getElementsByClassName("close")[1];
var spanC = document.getElementsByClassName("close")[2];
var spanD = document.getElementsByClassName("close")[3];

btn.onclick = function() {
  modalA.style.display = "block";
}

btnB.onclick = function() {
  modalB.style.display = "block";
}

btnC.onclick = function() {
  modalC.style.display = "block";
}

btnD.onclick = function() {
  modalD.style.display = "block";
}


span.onclick = function() {
  modalA.style.display = "none";
}

spanB.onclick = function() {
  modalB.style.display = "none";
}

spanC.onclick = function() {
  modalC.style.display = "none";
}

spanD.onclick = function() {
  modalD.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modalA) {
    modalA.style.display = "none";
    modalB.style.display = "none";
    modalC.style.display = "none";
    modalD.style.display = "none";
  }
}


var show = false;
var showB = false;

window.addEventListener("scroll", function (event) {
  if (!show) {
    var scroll = this.scrollY;
    var height = document.getElementsByClassName("title_p")[0].offsetTop;
    if (scroll > height) {
      show = x();
    }
  }

  if (!showB) {
    var scroll = this.scrollY;
    var height = document.getElementsByClassName("illustration-a")[0].offsetTop;
    if (scroll > height) {
      show = xs();
    }
  }
});

function x() {
  document.getElementsByClassName("question-a_content")[0].style.display = "flex";
  return true;
  
}

function xs() {
  document.getElementsByClassName("question-b_content")[0].style.display = "flex";
  return true;
}
