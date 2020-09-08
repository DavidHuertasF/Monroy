<?php include_once('processFormVideo.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'><link rel="stylesheet" href="./style.css">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="main-video.css">
</head>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>



<a href="admin.php">
  <img style="width: 5vw; margin:2vw;" src="../../images/back.png" alt="">
</a>


<div class="container">
    <div class="row">
      <div class="col-4 offset-md-4 form-div">
      <!-- <form action="admin.php" method="post" enctype="multipart/form-data"> -->

        <form action="new-video-post.php" method="post" enctype="multipart/form-data">
        
          <!-- <div class="form-group">
            <label>Bio</label>
            <textarea name="bio" class="form-control"></textarea>
          </div> -->




          <div class="newPost">


          <p class="subtitle"> Video de portada</p>
          <?php if (!empty($msg)): ?>
            <div class="alert <?php echo $msg_class ?>" role="alert">
              <?php echo $msg; ?>
            </div>
          <?php endif; ?>
          <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
             

              <video id="profileDisplay" controls>
                  <source src="movie.mp4" type="video/mp4">
                  <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
                </video>

                <button style="   
    border: none;
    cursor: pointer;
    color: #fff;
    outline: none;
    font-weight: bold;
    background: #009688;
    text-decoration: none;
    padding: 10px;
    margin: 4vh 5vw;"
     onclick="triggerClick();"   type="button" class="btn  btn-primary btn-block">Agregar 🎬</button>
            </span>
            <input required type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
          </div>

  <p class="subtitle">Post</p>

  <div class="form-group">
    <input required type="text" name="title" class="form-control" placeholder="Título">
  </div>

  <div class="form-group">
    <input required type="text" name="lead" class="form-control" placeholder="Descripción">
  </div>

  <div style="display: none;" class="form-group">
    <input   id="content"  type="text" name="content" class="form-control" placeholder="Enter title here">
  </div>

  <div class="toolbar">
    <button type="button" data-func="bold"><i class="fa fa-bold"></i></button>
    <button type="button" data-func="italic"><i class="fa fa-italic"></i></button>
    <button type="button" data-func="underline"><i class="fa fa-underline"></i></button>
    <button type="button" data-func="justifyleft"><i class="fa fa-align-left"></i></button>
    <button type="button" data-func="justifycenter"><i class="fa fa-align-center"></i></button>
    <button type="button" data-func="justifyright"><i class="fa fa-align-right"></i></button>
    <button type="button" data-func="insertunorderedlist"><i class="fa fa-list-ul"></i></button>
    <button type="button" data-func="insertorderedlist"><i class="fa fa-list-ol"></i></button>
   
    <div class="customSelect">
      <select data-func="formatblock">
        <option value="h1">Título 1</option>
        <option value="h2">Título 2</option>
        <option value="h4">Subtítulo</option>
        <option value="p" selected>Párrafo</option>
      </select>
    </div>
  </div>
  <div class="editor" contenteditable></div>
  <div class="buttons">
    <!-- <button type="button">save draft</button>  -->
    <button data-func="clear" type="button">Limpiar</button>
    <!-- <button data-func="save" type="button">save</button>  -->
  </div>
</div>








          <div style="display: flex;
            justify-content: center;" class="form-group">
            <button onclick="ok();" type="submit" name="save_profile" class="btn guardar btn-primary btn-block">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
<script>  

   function ok(){
    $content = $('.editor').html();
    $('#content').val($content);
  }

  $('.newPost button[data-func]').click(function(){
    document.execCommand( $(this).data('func'), false 	);
  });

  $('.newPost select[data-func]').change(function(){
    var $value = $(this).find(':selected').val();
    document.execCommand( $(this).data('func'), false, $value);
  });

  if(typeof(Storage) !== "undefined") {

  $('.editor').keypress(function(){
    $(this).find('.saved').detach();
  });
    $('.editor').html(localStorage.getItem("wysiwyg")) ;
    
    $('button[data-func="save"]').click(function(){
      $content = $('.editor').html();
      localStorage.setItem("wysiwyg", $content);
      
      alert( $content);
      $('.editor').append('<span class="saved"><i class="fa fa-check"></i></span>').fadeIn(function(){
        $(this).find('.saved').fadeOut(500);
      });
    });
    
    $('button[data-func="clear"]').click(function(){
      $('.editor').html('');
      localStorage.removeItem("wysiwyg");
    });
  } 

</script>

<script src="script-video.js"></script>
</html>