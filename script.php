<?php
session_start();

$users = [
[
    'login' => 'Michelle',
    'password' => 'delacompta',
],
[
    'login' => 'Jon',
    'password' => 'FF4EVER',
],
[
    'login' => 'Jerome',
    'password' => 'itryhard4myPHP',
],

];


foreach ($users as $user) {
    if($_POST['pseudo'] == $user['login']) {
        if ($_POST['password'] == $user['password']) {
            $_SESSION['pseudo'] = $_POST['pseudo'];
            $_SESSION['password'] = $_POST['password'];
            header('Location: ./admin.php');
        } else {
            echo 'ERROR'; 
            header('Location: form.php');
        }   
    } else {
        echo 'ERROR';
        header('Location: form.php');
    }
}