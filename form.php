
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel=" stylesheet" href="style.css"/>
    <title>Formulaire de connexion</title>
</head>
<body>
    <?php require('top.php'); ?>
                 
    <div>
        <form action="./script.php" method="POST">
                     
            <label for="pseudo" name='pseudo'>PSEUDO</label>
            <input type="text" name='pseudo'>
            
            <label for="password" name='password'>PASSWORD</label>
            <input type="password" name='password'>
            
            <input class='submit' type="submit" value='Send'>

        </form>
    </div>





    <?php require('bottom.php');?>
</body>
</html>