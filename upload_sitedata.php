<?php
  require ('database/db.php');
  if (isset($_POST['upload'])){
     $title=$_POST['site_title'];
     $link=$_POST['site_link'];
     $keywords=$_POST['site_keyword'];
     $description=$_POST['site_description'];
     $site_image=$_FILES['site_image']['name'];
     $site_image_tmp=$_FILES['site_image']['tmp_name'];//temporary name for the image

     if($title==''OR $link=='' OR $keywords=='' OR $description==''){
     	echo "<script>alert('Please fill all the fields!'); history.go(-1);</script>";
     	exit();
     }
     
     move_uploaded_file($site_image_tmp, "images/{$site_image}");
     
     $db_insert=mysqli_query($connect,"INSERT INTO site (site_title, site_link, site_keywords, site_description, site_image) VALUES('$title', '$link', '$keywords', '$description', '$site_image' )");
     if($db_insert){
     	echo "<script>alert('Your Site Content has been uploaded'); window.location='index.html'; </script>";
     }
     if(!$db_insert){
       echo "Failed to insert data";
     }
  }
?>