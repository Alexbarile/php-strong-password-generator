<?php

    session_start();
    include __DIR__. '/./functions.php';

    // per aprire la password in un'altra pagina

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
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="bg-white rounded-2 p-4 mb-3">  
                        <span class="text-secondary">La tua password è: <?php echo generatePass($_GET['password']); ?></span>                                
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>