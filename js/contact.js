var array1 = [
    "Testamento",
    "Herencia entre vivos",
    "Sucesión herencial notarial",
    "La pertenencia"
];



array1.forEach(element => $(".list-belongings").append( 
    "<div  class='col-sm-8 col-md-8'><p style='     white-space: nowrap; '><input name='category' type='checkbox' value='"+element+"' id='"+element+"' /><label style='margin-left:2%;' for='test1'>"+element+"</label></p></div>" ));
    $(".list-belongings").append("<div class='col-sm-8 col-md-8'>    <div  style= 'margin-top: 7vw; margin-left:-5vw;' class='block-23 mb-3'><ul> <li><a href='tel:+57  314 2999 366'><span style='color: black' class='icon icon-phone'></span><span class='text' style='color: black'>+57 314 2999 366</span></a></li><li><a href=''><span style='color: black' class='icon icon-envelope'></span><span   style='color: black' class='text'> &nbsp;&nbsp;&nbsp;anamonroy@monroyabogados.co </span></a></li></ul></div></div> ");

    function getLabel(id)
    {
   return $("#"+id).next("label").html();
    }
    function sendEmail(){
        var name = document.getElementById('name').value;
        var email =  document.getElementById('email').value;
        var phone =  document.getElementById('phone').value;


        var favorite = [];
        $.each($("input[name='category']:checked"), function(){
            favorite.push($(this).val());
        });
        var content = document.getElementById('content').value;
        var services = "Servicios seleccionados: " + favorite.join(", ");

        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
          } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             alert("Su mensaje ha sido enviado");
             location.reload();
            }
          };
          xmlhttp.open("GET", "email.php?n=" + name+ "&e=" + email+ "&p=" + phone+ "&c=" + content+ "&s=" + services, true);
          xmlhttp.send();
    }
    