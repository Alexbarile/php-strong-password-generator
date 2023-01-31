<?php

    include __DIR__. '/./functions.php';
    session_start();

    $_SESSION['password'] = $_GET['password'];
    if(empty($_SESSION['password'])){
        header("Location:./index.php");
    }
   
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <title>PHP Password</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-secondary">La tua password è: <?php echo generatePass($_GET['password']); ?></h1>
                </div>
            </div>
        </div>
    </body>
</html>