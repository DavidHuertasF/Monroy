<?php
include_once("../backend/conection.php");

$conection = new conection();

$get_posts = "Select 
*
from post WHERE video = 0 ORDER BY `post`.`id` DESC LIMIT 5" ;

$get_posts_video = "Select 
*
from post WHERE video = 1 ORDER BY `post`.`id` DESC LIMIT 5";

$result_get = $conection->query($get_posts);
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

$result_get_video = $conection->query($get_posts_video);
// echo '<script language="javascript">alert('.$result_get.');</script>';
$data_video = array();
$posts_video = array();
while ($row = mysqli_fetch_row($result_get_video["result"])) {
  $data["title"] = $row[0];
  $data["lead"] = $row[1];
  $data["content"] = $row[2];
  $data["date"] = $row[3];
  $data["id"] = $row[4];
  $data["author"] = $row[5];
  $data["media_link"] = $row[6];
  $data["video"] = $row[7];
  array_push($posts_video, $data);
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Blog</title>
  <link  rel="stylesheet" href="phone_blog.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'><link rel="stylesheet" href="./style-carousel.css">

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

</head>

<style> .ftco-footer-widget ul li a, .ftco-footer-widget ul li a span {color: white !important;} </style>
<body>

<!-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
        <img style="width: 5vw; margin-left:2vw;" src="../images/icon.svg" alt="">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item "><a href="../index.html" class="nav-link">Inicio</a></li>
	          <li class="nav-item"><a href="../about.html" class="nav-link">Sobre nosotros</a></li>
	          <li class="nav-item"><a href="../contact.html" class="nav-link">Contáctenos</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    END nav -->

    <section class="hero-wrap hero-wrap-2" style="height:480px; background-image: url('../images/bg_2.jpg');" data-stellar-background-ratio="0.5">
     
    </section>
<div class="section-a" >
<div class="section-a__left"> 
  <p  style="margin-left: 2vw;"class="subtitle">Post recientes</p>
  <!-- <img class="decoration-a" src="../images/a.svg" alt=""> -->
</div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="carousel slide multi-item-carousel" id="theCarousel">
          <div class="carousel-inner">
            <div class="item active">
            <div class="col-xs-4"><a class="card" href="post.php?content= <?php echo $posts[0]["id"];?>">
                <img class="img" src="admin/images/<?php echo $posts[0]["media_link"];?>" alt="">
                <p class="title"><?php echo $posts[0]["title"]; ?> </p>
                <p class="leadd"><?php echo $posts[0]["lead"]; ?> </p>
              </a></div>
              </div>

              <?php for ($i = 1; $i < count($posts); $i++) { ?>
            <div class="item">
              <div class="col-xs-4"><a class="card" href="post.php?content= <?php echo $posts[$i]["id"];?>">
                <img class="img" src="admin/images/<?php echo $posts[$i]["media_link"];?>" alt="">
                <p class="title"><?php echo $posts[$i]["title"]; ?> </p>
                <p class="leadd"><?php echo $posts[$i]["lead"]; ?> </p>
              </a></div>
            </div>
            <?php } ?>

            
            
          </div>
          <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i style="  margin-left: -80px;" class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="right carousel-control" href="#theCarousel" data-slide="next"><i  style="  margin-right: -70px;"  class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>
  
</div>


<div class="section-video">
<div class="section-video__left">  
  <p class="subtitle">Último video</p>
  <p class="title" style="font-weight: bold;"><?php echo $posts_video[0]["title"]; ?> </p>
  <p class="leadd"><?php echo $posts_video[0]["lead"]; ?> </p>
</div>
<video style="border: #125499 3px solid;"  controls>
            <source src="admin/images/<?php echo $posts_video[0]["media_link"];?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>

</div>


<div class="section-b" >
<div class="section-b__left"> 
  <p  class="subtitle" style="    font-size: 4vh;
    margin-top: 10vh;
    text-align: center;
    ">Más videos</p>
  <img src="../img/blog/decoration-b.png" alt="">
</div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="carousel slide multi-item-carousel" id="theCarousel">
          <div class="carousel-inner">
            <div class="item active">
            <div class="col-xs-4"><a class="card" href="post.php?content= <?php echo $posts_video[0]["id"];?>">
            <img class="img" src="admin/images/video.jpg" alt="">
                <p class="title"><?php echo $posts_video[0]["title"]; ?> </p>
                <p class="leadd"><?php echo $posts_video[0]["lead"]; ?> </p>
              </a></div>
              </div>

              <?php for ($i = 1; $i < count($posts_video); $i++) { ?>
            <div class="item">
              <div class="col-xs-4"><a class="card" href="post.php?content= <?php echo $posts_video[$i]["id"];?>">
                <img class="img" src="admin/images/video.jpg" alt="">
                <p class="title"><?php echo $posts_video[$i]["title"]; ?> </p>
                <p class="leadd"><?php echo $posts_video[$i]["lead"]; ?> </p>
              </a></div>
            </div>
            <?php } ?>

            
            
          </div>
          <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i  style="  margin-left: -80px;"  class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="right carousel-control" href="#theCarousel" data-slide="next"><i   style="  margin-right: -70px;"  class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>
  


</div>
 
<footer style="    width: 100% !important;
    left: 0 !important;
    margin-left: 0 !important;
    margin-top:10vh;
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
              <li><a href="../index.html" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Inicio</a></li>
              <li><a href="../about.html" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Sobre nosotros</a></li>
              <li><a href="blog.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Blog</a></li>
              <li><a href="../contact.html" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Contáctenos</a></li>
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
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    


  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script><script  src="./script.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-172447650-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-172447650-1');
</script>


</body>
</html>
