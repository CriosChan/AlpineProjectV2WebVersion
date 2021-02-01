<?php
    try
    {
        $bdd = new PDO("mysql:host=localhost;dname=alpine;charset-utf8", "root", "pouetpouet");
        $conn = mysqli_connect("localhost", "root", "pouetpouet", "alpine");
    } catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }