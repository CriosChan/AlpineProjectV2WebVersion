<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('Location:index.php');
}
?>
<!DOCTYPE html>
<html class="font-oswald bg-gray-200">

<head lang="fr">
  <meta charset="utf-8">
  <title>Alpine V2 | The Alpine Project</title>
  <link href="styles/dist/main.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="images/alpine_icon.png">
  <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>

<body>
  <?php
  require('php/navbar.php')
  ?>
  <div class="w-min mx-auto py-10px">
    <form class="" action="php/upload.php" method="post" enctype="multipart/form-data">
      <div class="bg-white w-min h-min mx-auto px-1em rounded-lg shadow-lg">
        <?php
        if (isset($_GET['sql_err'])) {
          $err = htmlspecialchars($_GET['sql_err']);

          switch ($err) {
            case 'success':
        ?>
              <label class='sm:text-pmain md:text-pmain lg:text-pmainls text-green-600'><strong>Réussie !</strong> Votre ajout est terminé</label>
            <?php
              break;
            case 'error':
            ?>
              <label class='sm:text-pmain md:text-pmain lg:text-pmainls text-red-600'><strong>Erreur :</strong> veuillez contacter un administateur, une erreur c'est produite...</label>
        <?php
              break;
          }
        }
        ?>
        <div class="p-2em w-max h-max mx-auto">
          <label class="sm:text-pmain md:text-pmain lg:text-pmainls" for="name">Nom du document : </label><br>
          <input class="sm:text-pmain md:text-pmain lg:text-pmainls bg-gray-200" type="text" id="name" name="name" required="required" autocomplete="off"><br>
          <label class="sm:text-pmain md:text-pmain lg:text-pmainls" for="type">Type : </label><br>
          <select class="sm:text-pmain md:text-pmain lg:text-pmainls bg-gray-200" id="type" name="type" required="required">
            <option value="cours">Cours</option>
            <option value="exercices">Exercices</option>
            <option value="corrections">Corrections</option>
          </select><br>
          <label class="sm:text-pmain md:text-pmain lg:text-pmainls" for="subject">Matière : </label><br>
          <select class="sm:text-pmain md:text-pmain lg:text-pmainls bg-gray-200" id="subject" name="subject" required="required">
            <option value="fr">Français</option>
            <option value="hg">Histoire-Géographie</option>
            <option value="en">Anglais</option>
            <option value="es">Espagnol</option>
            <option value="SES">SES</option>
            <option value="maths">Mathématiques</option>
            <option value="phch">Physique-Chimie</option>
            <option value="svt">SVT</option>
            <option value="emc">EMC</option>
            <option value="snt">SNT</option>
          </select><br>
          <label class="sm:text-pmain md:text-pmain lg:text-pmainls" for="date">Date (jj/mm/aa) : </label><br>
          <input class="sm:text-pmain md:text-pmain lg:text-pmainls bg-gray-200" type="text" id="date" name="date" required="required" autocomplete="off"><br>
          <label class="sm:text-pmain md:text-pmain lg:text-pmainls" for="files">Fichiers : </label><br>
          <input type="file" multiple="multiple" name="files[]" required="required">
        </div>
        <div class="mx-auto w-max h-max">
          <a href="index.php" class="inline-block mb-10px lg:my-20px p-10px lg:p-20px sm:text-pmain md:text-pmain lg:text-pmainls bg-blue-600 uppercase rounded-lg text-white text-center">← retour</a>
          <button type="submit" class="inline-blocklg mb-10px lg:my-20px p-10px lg:p-20px sm:text-pmain md:text-pmain lg:text-pmainls bg-blue-600 uppercase rounded-lg text-white text-center" name="upload">Ajouter</button>
        </div>
      </div>
    </form>
  </div>
  <footer class="text-center">© 2020 CRIOSSAMA ALL RIGHTS RESERVED</footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="./js/dropdown.js"></script>
</body>

</html>