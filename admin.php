<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style.css'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    <?php require('top.php'); ?>
    <h1>Bienvenue !</h1>
    
    <h1>Voulez vous affiché :</h1>

    <div>
        <form action="./CONTROLLER/actionindex.php" method='POST'>
            <label for="imag">IMAGE:</label>
            <input name='imag' type="checkbox" checked>

            <label for="lorem">LOREM:</label>
            <input name='lorem'type="checkbox" checked>

            <label for="autre">AUTRE:</label>
            <input name='autre' type="checkbox" >

            <input type="submit">
        </form>

    </div>



    <?php require('bottom.php'); ?>
</body>
</html>