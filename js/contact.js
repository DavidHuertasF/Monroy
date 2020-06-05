var array1 = [
    "Testamento",
    "Herencia entre vivos",
    "Sucesión herencial notarial",
    "La pertenencia"
];



array1.forEach(element => $(".list-belongings").append( 
    "<div  class='col-sm-8 col-md-8'><p style='     white-space: nowrap; '><input type='checkbox' id='"+element+"' /><label style='margin-left:2%;' for='test1'>"+element+"</label></p></div>" ));

