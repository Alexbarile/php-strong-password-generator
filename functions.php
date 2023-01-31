<?php

    // $lunghezza = $_GET['password'];
    if(isset ($_GET['password'])){
        
        function generatePass($lunghezza){
            $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|<>,.?/\ ";
            $password= '';
            for($i=0; $i<$lunghezza; $i++){
                $password .= $characters[rand(0, strlen($characters) -1)];
            }
            return $password;
        }
    }
    

   
?>