<?php
    
    // funzione per password randomica

    function generatePass($lunghezza){
        $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|<>,.?/\ ";
        $password= '';
        for($i=0; $i<$lunghezza; $i++){
            $password .= $characters[rand(0, strlen($characters) -1)];
        }
        return $password;
    }

    // $error = '';
    // if(isset ($_GET['password']) && $_GET['password'] < 8 || $_GET['password'] > 32){
    //     $error= 'Valore sbagliato';
    // }
    // elseif(isset ($_GET['password']) && $_GET['password'] !== ''){
    //     generatePass($_GET['password']);

    // }
    

?>