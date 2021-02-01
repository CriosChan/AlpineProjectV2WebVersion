<?php
    require_once 'config.php';

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    if(isset($_POST['classname']) && isset($_POST['author']) && isset($_POST['email']))
    {
        $classname = htmlspecialchars($_POST['classname']);
        $author = htmlspecialchars($_POST['author']);
        $email = htmlspecialchars($_POST['email']);

        $check = $bdd->prepare('SELECT classname, author, email, code FROM alpine.classroom');
        $data = $check->fetch();

                if(strlen($classname)<= 100){
                    if(strlen($email)<= 100){
                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                            $classcode = "";
                            for ($i = 0; $i < 10; $i++){
                                $index = rand(0, strlen($characters) - 1);
                                $classcode .= $characters[$index];
                            }
                            $insert = $bdd->prepare('INSERT INTO alpine.classroom(classname, author, email, code) VALUES(:classname, :author, :email, :code)');
                                $insert->execute(array(
                                    'classname' => $classname,
                                    'author' => $author,
                                    'email' => $email,
                                    'code' => $classcode,
                                ));
                                header('Location:../createclassroom.php?createcr_err=success&code='.$classcode);
                        }else header('Location:../createclassroom.php?createcr_err=email');
                    }else header('Location:../createclassroom.php?createcr_err=email_length');
                }else header('Location:../createclassroom.php?createcr_err=classname_length');
        }