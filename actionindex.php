<?php
 
session_start();
 $_SESSION['imag'] = $_POST['imag'];
 $_SESSION['lorem'] = $_POST['lorem'];
 $_SESSION['autre'] = $_POST['autre'];
header('Location: ./index.php');
