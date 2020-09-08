<?php
  $msg = "";
  $msg_class = "";
  $conn = mysqli_connect("localhost", "root", "", "blog_monroy");
  // $conn = mysqli_connect("localhost", "u319816431_admin", "admin", "u319816431_blog");
  if (isset($_POST['save_profile'])) {
    // for the database
    $title = stripslashes($_POST['title']);
    $lead = stripslashes($_POST['lead']);
    $content = stripslashes($_POST['content']);
    date_default_timezone_set('America/Los_Angeles');
    $fecha_actual = date("Y-m-d H:i:s");


    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 200000) {
      $msg = "Image size should not be greated than 200Kb";
      $msg_class = "alert-danger" ;
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO post (`title`, `lead`, `content`, `date`, `author`, `media_link`, `video`) VALUES ('".$title."', '".$lead."', '".$content."', '".$fecha_actual."' , '3', '".$profileImageName."', '1') ";

        if(mysqli_query($conn, $sql)){
          $msg = "Post publicado con éxito !";
          $msg_class = "alert-success";
        } else {
          $msg = "There was an error in the database";
          $msg_class = "alert-danger";
        }
      } else {
        $error = "There was an erro uploading the file";
        $msg = "alert-danger";
      }
    }
  }
?>