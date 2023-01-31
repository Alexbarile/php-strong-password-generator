<?php

    include __DIR__. '/./functions.php';
   
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
                    <h1 class="text-secondary">Strong Password Generator</h1>
                    <h2 class="text-white">Genera una password sicura</h2>
                </div>
            </div>
            <div class="row justify-content-center">      
                <div class="col-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="bg-white rounded-2 p-4 mb-3">  
                                <span>Nessun parametro valido inserito</span>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="bg-white rounded-2">

                                <form action="./newpassword.php" method="GET">
                                    <div class="d-flex p-4">
                                        <div class="col-6">
                                            <label for="inputPassword6" class="col-form-label">Lunghezza Password:</label>
                                        </div>
                                        <div class="col-3">
                                            <input type="number" name="password" id="inputPassword6" class="form-control" placeholder="Inserisci un numero">
                                        </div>                                        
                                    </div>
                                    <div class="d-flex p-4">
                                        <div class="col-6">
                                            <label for="inputPassword6" class="col-form-label">Password Generata:</label>
                                        </div>
                                        <div class="col-3">
                                            <input type="text" class="form-control" placeholder="Nessun parametro" value="<?php echo generatePass($_GET['password']); ?>">                                            
                                        </div>                                        
                                    </div>
                                    <div class="col-12 p-4">
                                        <button type="submit" class="btn btn-primary">Invia</button>
                                        <button type="reset" class="btn btn-secondary">Annulla</button>
                                    </div>
                                </form>

                            </div>  
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </body>
</html>