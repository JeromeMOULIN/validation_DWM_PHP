<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel=" stylesheet" href="style.css"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Index</title>
</head>
<body>
  <?php require('top.php'); ?>
  <?php
    if ($_SESSION['imag'] == 'on'){
      echo '<img src="./images/image.jpg" alt="imagedelactionencour">';
    };
    if ($_SESSION['lorem'] == 'on'){
      echo '<p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br> Hic odit cupiditate final fantasy c est pas si mal en faite veniam aliquid, <br>id magni corrupti aut ipsum ut at vero optio voluptate eligendi quaerat, ducimus mollitia quia.</p>';
    };
    if ($_SESSION['autre'] == 'on'){
      echo '<p class="autre">On peux avoir des points bonux si on dis que FF ça peut-etre pas mal en faite ? :D ce référé ligne 3 du lorem</p>';
    };
    ?>

  <?php require('bottom.php'); ?>
</body>
</html>