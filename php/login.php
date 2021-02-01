<?php
    session_start();
    require_once 'config.php';
    
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        $check = $bdd->prepare('SELECT * FROM alpine.users WHERE username = ?');
        $check->execute(array($username));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1)
        {
            $password = hash('sha256', $password);
            if($data['password'] === $password)
            {
                $_SESSION['username'] = $data['username'];
                $_SESSION['name'] = $data['name'];
                $_SESSION['profil_img_path'] = $data['profil_img_path'];
                header('Location:../main.php');

            }else header('Location:../login.php?login_err=password');
        }else header('Location:../login.php?login_err=already');

    } else header('Location:../login.php');