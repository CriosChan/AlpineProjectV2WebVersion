<?php
require_once 'config.php';

if (isset($_POST['realname']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['passwordverif']) && isset($_POST['classecode'])) {
    $realname = htmlspecialchars($_POST['realname']);
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $passwordverif = htmlspecialchars($_POST['passwordverif']);
    $classecode = htmlspecialchars($_POST['classecode']);

    $check = $bdd->prepare('SELECT username, email, password FROM alpine.users WHERE username = ?');
    $check->execute(array($username));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 0) {
        $check = $bdd->prepare('SELECT username, email, password FROM alpine.users WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        if ($row == 0) {
            $check = $bdd->prepare('SELECT code FROM alpine.classroom WHERE code = ?');
            $check->execute(array($classecode));
            $data = $check->fetch();
            $row = $check->rowCount();
            if ($row == 1) {
                if (strlen($username) <= 100) {
                    if (strlen($email) <= 100) {
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            if ($password == $passwordverif) {
                                $password = hash('sha256', $password);

                                $insert = $bdd->prepare('INSERT INTO alpine.users(name, username, email, password, classe, profil_img_path) VALUES(:name, :username, :email, :password, :classe, :profil_img_path)');
                                $insert->execute(array(
                                    'name' => $realname,
                                    'username' => $username,
                                    'email' => $email,
                                    'password' => $password,
                                    'classe' => $classecode,
                                    'profil_img_path' => 'default.jpg'
                                ));

                                header('Location:../register.php?reg_err=success');
                            } else header('Location:../register.php?reg_err=password');
                        } else header('Location:../register.php?reg_err=email');
                    } else header('Location:../register.php?reg_err=email_length');
                } else header('Location:../register.php?reg_err=pseudo_length');
            } else header('Location:../register.php?reg_err=classcode');
        } else header('Location:../register.php?reg_err=already');
    } else header('Location:../register.php?reg_err=already');
}
