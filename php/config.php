<?php
    try
    {
        $bdd = new PDO("mysql:host=localhost;dname=alpine;charset-utf8", "NAME", "PASSWORD");
        $conn = mysqli_connect("localhost", "NAME", "PASWORD", "alpine");
    } catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
