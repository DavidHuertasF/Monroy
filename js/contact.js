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
    "<div  class='col-sm-5 col-md-5'><p style='     white-space: nowrap; margin-left:5%;'><input type='checkbox' id='"+element+"' /><label style='margin-left:2%;' for='test1'>"+element+"</label></p></div>" ));

