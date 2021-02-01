<?php
session_start();
if (isset($_SESSION['username'])) {
  header('Location:main.php');
}
?>

<!DOCTYPE html>
<html class="font-oswald bg-gray-200">

<head lang="fr">
  <meta charset="utf-8">
  <title>Alpine V2 | The Alpine Project</title>
  <link href="styles/dist/main.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" type="image/x-icon" href="images/alpine_icon.png">
  <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>

<body>
  <div class="container mx-auto">
    <img class="sm:w-600 md:w-600 lg:w-400 mx-auto" src="images/alpine_title.png"></img>
  </div>
  <div class="container mx-auto lg:p-10px">
    <div class="bg-white p-4 shadow rounded-lg lg:flex lg:flex-inline">
      <div class="m-2em py-1em">
        <p class="sm:text-pmain md:text-pmain lg:text-pmainls">Alpine est un projet permettant à n'importe qui de :</p>
        <li class="sm:text-pmain md:text-pmain lg:text-pmainls">Créer sa propre classe
        <li class="sm:text-pmain md:text-pmain lg:text-pmainls">Partager des données scolaires avec ça classe :
        <li class="sm:text-pmain md:text-pmain lg:text-pmainls ml-2em">Des exercices
        <li class="sm:text-pmain md:text-pmain lg:text-pmainls ml-2em">Des cours
        <li class="sm:text-pmain md:text-pmain lg:text-pmainls ml-2em">Des évaluations
        <li class="sm:text-pmain md:text-pmain lg:text-pmainls ml-2em">Etc...
      </div>
      <div class="mx-auto sm:flex md:flex sm:items-stretch md:items-stretch my-auto lg:block">
        <a href="createclassroom.php"
          class="sm:inline-block md:sm:inline-block lg:block sm:mx-auto md:mx-auto mb-20px p-20px text-buttonmain bg-blue-600 uppercase rounded-lg text-white text-center">créer
          sa
          classe</a>
        <a href="register.php"
          class="sm:inline-block md:sm:inline-block lg:block sm:mx-auto md:mx-auto mb-20px p-20px text-buttonmain bg-blue-600 uppercase rounded-lg text-white text-center">s'inscrire</a>
        <a href="login.php"
          class="sm:inline-block md:sm:inline-block lg:block sm:mx-auto md:mx-auto mb-20px p-20px text-buttonmain bg-blue-600 uppercase rounded-lg text-white text-center">se
          connecter</a>
      </div>
    </div>
  </div>
  <footer class="text-center">© 2020 CRIOSSAMA ALL RIGHTS RESERVED</footer>
</body>

</html>