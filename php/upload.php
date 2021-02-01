<?php

session_start();
require_once 'config.php';

if (isset($_POST['upload'])) {

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $name = $_POST['name'];
    $type = $_POST['type'];
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    $files = reArrayFiles($_FILES['files']);

    $research = $bdd->prepare('SELECT classe, id FROM alpine.users WHERE username="' . $_SESSION['username'] . '"');
    $research->execute();
    $researchresult = $research->fetch();
    $classid = $researchresult['classe'];
    $id = $researchresult['id'];

    $path = "../" . htmlspecialchars($type) . "/" . htmlspecialchars($subject) . "/" . htmlspecialchars($classid) . "/";
    if (!file_exists($path)) {
        if(!file_exists("../" . htmlspecialchars($type) . "/" . htmlspecialchars($subject) . "/")){
            if(!file_exists("../" . htmlspecialchars($type) . "/")){
                mkdir("../" . htmlspecialchars($type));
                mkdir("../" . htmlspecialchars($type) . "/" . htmlspecialchars($subject));
                mkdir("../" . htmlspecialchars($type) . "/" . htmlspecialchars($subject) . "/" . htmlspecialchars($classid));
            } else {
                mkdir("../" . htmlspecialchars($type) . "/" . htmlspecialchars($subject));
                mkdir("../" . htmlspecialchars($type) . "/" . htmlspecialchars($subject) . "/" . htmlspecialchars($classid));
            }
        } else {
        mkdir("../" . htmlspecialchars($type) . "/" . htmlspecialchars($subject) . "/" . htmlspecialchars($classid));
        }
    }
    $filepath = "";
    foreach ($files as $file) {
        $file_name = str_replace(" ", "_", $file['name']);
        if (!file_exists($path . htmlspecialchars($file_name))) {
            move_uploaded_file($file['tmp_name'], $path . basename($file_name));
            $filepath .= $file_name."&"; 
        } else {
            $newnametab = explode(".", $file_name);
            $newnametab[1] = "." . $newnametab[1];
            $newnametab[0] = "";
            for ($i = 0; $i < 50; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $newnametab[0] .= $characters[$index];
            }
            $newnametab = implode($newnametab);
            move_uploaded_file($file['tmp_name'], $path . basename($newnametab));
            $filepath .= $newnametab."&";
        }
    }

    $sql = 'INSERT INTO documents(user_id, name, type_id, subject_id, date, file_path, class_id) VALUES("'.htmlspecialchars($id).'","'.$name.'","' .$type . '","' . $subject. '","' . $date . '","' . $filepath . '","' . $classid . '")';
    if(mysqli_query($conn, $sql)){
        header("Location:../upload.php?sql_err=success");
    }  else {
        header("Location:../upload.php?sql_err=error");
    }
}


function reArrayFiles(&$file_post)
{

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i = 0; $i < $file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}
