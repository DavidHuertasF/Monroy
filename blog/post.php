


<?php
include_once("../backend/conection.php");
$conection = new conection();

  $id = ($_GET['content']);
 

  $get_post = "Select 
  *
  from post WHERE id = ".$id;

$result_get = $conection->query($get_post);
// echo '<script language="javascript">alert('.$result_get.');</script>';
$data = array();
$posts = array();
while ($row = mysqli_fetch_row($result_get["result"])) {
  $data["title"] = $row[0];
  $data["lead"] = $row[1];
  $data["content"] = $row[2];
  $data["date"] = $row[3];
  $data["id"] = $row[4];
  $data["author"] = $row[5];
  $data["media_link"] = $row[6];
  $data["video"] = $row[7];
  array_push($posts, $data);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $posts[0]["title"];?></title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="phone-post.css">
   
    
</head>
<body>




<section class="hero-wrap hero-wrap-2" style=" height:480px; background-image: url('../images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div  style="padding-bottom: 40vh !important;
          margin-left: 20vw;" class="col-md-9 ftco-animate pb-5 text-center">
            <!-- <img style="width: 25vw; margin-bottom:10vh;" src="../images/BLOG.png" alt=""> -->
            <!-- <p style="color: black;" >"Descubre Aquí, una nueva forma de ver lo jurídico” </p> -->
          </div>
        </div>
      </div>
    </section>

   	
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 order-md-last ftco-animate">


            <?php if ($posts[0]["video"] == 0): ?>
              <img src="admin/images/<?php echo $posts[0]["media_link"];?>" alt="" class="img-fluid media">
    <?php else: ?>
        <video  class="media img-fluid"  controls>
            <source  src="admin/images/<?php echo $posts[0]["media_link"];?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    <?php endif ?>







             
            </p>
            <h2 class="mb-3"><?php echo $posts[0]["title"]; ?></h2>
            <h3><?php echo $posts[0]["lead"]; ?></h3>
            <?php echo $posts[0]["content"]; ?> 
           
            
            <div style="margin-top: 15vh;" class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="../images/person_11.jpg" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc">
                <h3>Dra. Ana Consuelo Monroy Castro</h3>
                <p>Abogada de la Universidad LIBRE, Especialista en Derecho Procesal, líder de Monroy Abogados.</p>
              </div>
            </div>


            <div class="pt-5 mt-5">
              <h3 class="mb-5">0 Comentarios</h3>
              <!-- <ul class="comment-list">
                <li class="comment">
                  <div class="comment-body">
                    <h3>José Hurtado</h3>
                    <div class="meta">Octubre 03, 2020  2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  </div>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                  </div>
                  <div class="comment-body">
                    <h3>José Hurtado</h3>
                    <div class="meta">Octubre 03, 2020  2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  </div>
                        </li>

              </ul> -->
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Deja un comentario</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Nombre *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                

                  <div class="form-group">
                    <label for="message">Mensaje</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Comentar" class="btn py-3 px-4 btn-primary">
                  </div>
                </form>
              </div>
            </div>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <!-- <div class="form-group"> -->
                  <!-- <span class="icon icon-search"></span> -->
                  <!-- <input type="text" class="form-control" placeholder="Buscar..."> -->
                <!-- </div> -->
              </form>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Queremos que nuestras palabras le cautiven</h3>
              <p>
                Encuentre, análisis, diferentes puntos de vista, notas curiosas y nuestro compromiso en dar eco a cada uno de sus comentarios.
                </p>

                <p>Conecte con nosotros</p>
            </div>


            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//monroyabogados.co/blog/post.php?content=%2520<?php echo $posts[0]["id"];?>"> <img  style="width: 3vw; margin-right: 2vw;" src="../images/facebook.png" alt=""> Compartir en facebook <span class="ion-ios-arrow-forward"></span></a></li>
                <!-- <li><a href="#"> <img  style="width: 3vw;  margin-right: 2vw;" src="../images/whatsapp.png" alt=""> Whatsapp <span class="ion-ios-arrow-forward"></span></a></li> -->
                <!-- <li><a href="#"> <img  style="width: 3vw;  margin-right: 2vw;" src="../images/twitter.png" alt=""> Twitter <span class="ion-ios-arrow-forward"></span></a></li> -->
              </div>
            </div>

             <div class="sidebar-box ftco-animate">
              <!-- <h3>Blog recientes</h3> -->
              <!-- <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Tendencias en derecho procesal</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Enero 15, 2020</a></div>
                    <div><a href="#"><span class="icon-person"></span> Dra Ana Monroy</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. .</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> enero 15, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> enero 15, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div> -->
            </div> 


          
          </div>

        </div>
      </div>
    </section> <!-- .section -->

   

    <footer style="    width: 100% !important;
    left: 0 !important;
    margin-left: 0 !important;
    position: absolute  !important;" class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <img  style="margin-bottom: 5vh;
           width: calc(13vw + 13vh);"src="../images/logo2.svg" alt="">
              <p>Este sitio es su casa, con nosotros encontrará la información concreta, verídica y las respuestas a sus necesidades jurídicas.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://www.facebook.com/AnaConsueloMonroyCastro/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-whatsapp"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Contenido</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Inicio</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Sobre nosotros</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Blog</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Contáctenos</a></li>
              </ul>
            </div>
          </div>
       
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contacto</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><a href="tel:+57  314 2999 366"><span class="icon icon-phone"></span><span class="text">+57  314 2999 366</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">anamonroy@monroyabogados.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
          </div>
        </div>
      </div>
    </footer> 
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

</body>

<script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/jquery.timepicker.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>


  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-172447650-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-172447650-1');
</script>

</html>