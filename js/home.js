var array1 = ["Dinero",
    "Seguros",
    "Electrodomésticos",
    "Programas sofware",
   " Aplicaciones",
    "Patentes",
   " Industria",
    "Empresa",
   " Computadores",
   " Celulares",
    "Vídeo juegos",
    "Libros",
   " Revistas",
    "Diarios",
   " Franquicias",
  "  Marcas",
   " Escritorios",
  "  Ropa",
   " Textiles",
    "Vehículos",
   " Joyas",
    "Bienes preciosos",
    "Servicios organizados",
    "Contenidos multimedia"
];



array1.forEach(element => $(".list-belongings").append( 
    "<div  class='col-sm-5 col-md-3'><p style='     white-space: nowrap; margin-left:5%;'><input type='checkbox' id='"+element+"' /><label style='margin-left:5%;' for='test1'>"+element+"</label></p></div>" ));

    // "Servicios organizados de:"
    // alimentación,
    // Transporte,
    // Limpieza,
    // Telecomunicaciones,
    // Interpretación,
    // Traducción,
    // Editoriales,
    // Reparación,
    // Educativos,
    // Médicos,
    // De distribución
    // Muebles
    // Equipo de oficina
    // Maquinaria
    // Inmuebles
    // Fábricas
    // Talleres
    // Inversiones
    // Combustibles
    // Marcas
    // Envases
    // Paquetería
    // Producción cinematográfica
    
    // Contenidos multimedia
    // Diseños
    // Pinturas
    // Realizaciones
    // Coreografías
    // Publicaciones electrónicas
    // Ilustraciones
    // Diseños de vídeo juegos
    // Producciones televisivas
    // Producciones musicales
    // Regalias
    // Aeronaves







    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}