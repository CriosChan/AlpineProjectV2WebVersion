<?php
session_start();
require_once 'config.php';

if (isset($_POST['upload'])) {

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    // Get name of images
    $Get_image_name = $_FILES['image']['name'];
    $Get_image_name = str_replace(" ", "_", $Get_image_name);
    $username = $_SESSION['username'];

    // image Path
    $image_Path = "../profil_img/" . basename($Get_image_name);

    if (!file_exists($image_Path)) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $image_Path)) {
            $base = "UPDATE alpine.users SET profil_img_path='$Get_image_name' WHERE username='$username'";
            $stmt = $bdd->prepare($base);
            $stmt->execute();
            $_SESSION['profil_img_path'] = $Get_image_name;
            header('Location:../main.php');
        }
    } else {
        $newnametab = explode(".", $Get_image_name);
        $newnametab[1] = ".".$newnametab[1];
        $newnametab[0] = "";
        for ($i = 0; $i < 50; $i++){
            $index = rand(0, strlen($characters) - 1);
            $newnametab[0] .= $characters[$index];
        }
        $newnametab = implode($newnametab);
        $image_Path = "../profil_img/" . basename($newnametab);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $image_Path)) {
            $base = "UPDATE alpine.users SET profil_img_path='$newnametab' WHERE username='$username'";
            $stmt = $bdd->prepare($base);
            $stmt->execute();
            $_SESSION['profil_img_path'] = $newnametab;
            header('Location:../main.php');
        }
    }
}
