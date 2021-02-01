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
  require('php/navbar.php');
  ?>
  <div class="container lg:flex space-x-2em w-max mx-auto my-10px">
    <!-- DOC RECENTS -->
    <div class="bg-white lg:flex-initial w-max rounded-lg mb-10px shadow-lg">
      <!-- COURS -->
      <div class="p-10px">
        <strong class="sm:text-pmain md:text-pmain lg:text-pmainls">Cours récents :</strong>
        <?php
        require('php/config.php');
        $research = $bdd->prepare('SELECT classe FROM alpine.users WHERE username="' . $_SESSION['username'] . '"');
        $research->execute();
        $researchresult = $research->fetch();
        $base = $bdd->prepare('SELECT id, user_id, name, type_id, subject_id, date, class_id FROM alpine.documents WHERE class_id="' . $researchresult['classe'] . '"AND type_id="cours"');
        $base->execute();
        $index = 0;
        $data = array();
        while ($row = $base->fetch(PDO::FETCH_ASSOC)) {
          $data[$index][0] = $row['id'];
          $data[$index][1] = $row['user_id'];
          $data[$index][2] = $row['name'];
          $data[$index][3] = $row['type_id'];
          $data[$index][4] = $row['subject_id'];
          $data[$index][5] = $row['date'];
          $index++;
        }
        for ($i = count($data) - 1; $i >= count($data) - 5 && $i >= 0; $i--) {
          $authorsearch = $bdd->prepare('SELECT name FROM alpine.users WHERE id=' . $data[$i][1] . '');
          $authorsearch->execute();
          $authorfetched = $authorsearch->fetch();
          switch ($data[$i][4]) {
            case 'fr':
              $subject = 'Français';
              break;
            case 'hg':
              $subject = 'Histoire-Géographie';
              break;
            case 'en':
              $subject = "Anglais";
              break;
            case 'es':
              $subject = "Espagnol";
              break;
            case 'SES':
              $subject = "SES";
              break;
            case 'maths':
              $subject = "Mathématiques";
              break;
            case 'phch':
              $subject = "Physique-Chimie";
              break;
            case 'svt':
              $subject = "SVT";
              break;
            case 'emc':
              $subject = "EMC";
              break;
            case 'snt':
              $subject = "SNT";
              break;
          }
          echo "<div class='block bg-gray-100 my-10px mx-auto'>
          <h1 class='sm:text-pmain md:text-pmain lg:text-pmainls'>Nom : " . $data[$i][2] . "</h1>
          <h1 class='sm:text-pmain md:text-pmain lg:text-pmainls'>Matière : " . $subject . "</h1>
          <h1 class='sm:text-pmain md:text-pmain lg:text-pmainls'>Date : " . $data[$i][5] . "</h1>
          <h1 class='sm:text-pmain md:text-pmain lg:text-pmainls'>Auteur : " . $authorfetched['name'] . "</h1>
          <div class='w-max mx-auto'>
          <a href='more.php?id=".htmlspecialchars($data[$i][0])."' class='inline-block mb-10px lg:my-20px p-10px lg:p-20px sm:text-pmain md:text-pmain lg:text-pmainls bg-blue-600 uppercase rounded-lg text-white text-center'>Voir plus</a>
          </div>
        </div>";
        }
        ?>
      </div>
    </div>
    <div class="bg-white lg:flex-initial w-max rounded-lg mb-10px shadow-lg">
      <!-- Exercices -->
      <div class="p-10px">
        <strong class="sm:text-pmain md:text-pmain lg:text-pmainls">Exercices récents :</strong>
        <?php
        require('php/config.php');
        $research = $bdd->prepare('SELECT classe FROM alpine.users WHERE username="' . $_SESSION['username'] . '"');
        $research->execute();
        $researchresult = $research->fetch();
        $base = $bdd->prepare('SELECT id, user_id, name, type_id, subject_id, date, class_id FROM alpine.documents WHERE class_id="' . $researchresult['classe'] . '"AND type_id="exercices"');
        $base->execute();
        $index = 0;
        $data = array();
        while ($row = $base->fetch(PDO::FETCH_ASSOC)) {
          $data[$index][0] = $row['id'];
          $data[$index][1] = $row['user_id'];
          $data[$index][2] = $row['name'];
          $data[$index][3] = $row['type_id'];
          $data[$index][4] = $row['subject_id'];
          $data[$index][5] = $row['date'];
          $index++;
        }
        for ($i = count($data) - 1; $i >= count($data) - 5 && $i >= 0; $i--) {
          $authorsearch = $bdd->prepare('SELECT name FROM alpine.users WHERE id=' . $data[$i][1] . '');
          $authorsearch->execute();
          $authorfetched = $authorsearch->fetch();
          switch ($data[$i][4]) {
            case 'fr':
              $subject = 'Français';
              break;
            case 'hg':
              $subject = 'Histoire-Géographie';
              break;
            case 'en':
              $subject = "Anglais";
              break;
            case 'es':
              $subject = "Espagnol";
              break;
            case 'SES':
              $subject = "SES";
              break;
            case 'maths':
              $subject = "Mathématiques";
              break;
            case 'phch':
              $subject = "Physique-Chimie";
              break;
            case 'svt':
              $subject = "SVT";
              break;
            case 'emc':
              $subject = "EMC";
              break;
            case 'snt':
              $subject = "SNT";
              break;
          }
          echo "<div class='block bg-gray-100 my-10px mx-auto'>
          <h1 class='sm:text-pmain md:text-pmain lg:text-pmainls'>Nom : " . $data[$i][2] . "</h1>
          <h1 class='sm:text-pmain md:text-pmain lg:text-pmainls'>Matière : " . $subject . "</h1>
          <h1 class='sm:text-pmain md:text-pmain lg:text-pmainls'>Date : " . $data[$i][5] . "</h1>
          <h1 class='sm:text-pmain md:text-pmain lg:text-pmainls'>Auteur : " . $authorfetched['name'] . "</h1>
          <div class='w-max mx-auto'>
          <a href='more.php?id=".htmlspecialchars($data[$i][0])."' class='inline-block mb-10px lg:my-20px p-10px lg:p-20px sm:text-pmain md:text-pmain lg:text-pmainls bg-blue-600 uppercase rounded-lg text-white text-center'>Voir plus</a>
          </div>
        </div>";
        }
        ?>
      </div>
    </div>
    <div class="bg-white lg:flex-initial w-max rounded-lg mb-10px shadow-lg">
      <!-- Corrections -->
      <div class="p-10px">
        <strong class="sm:text-pmain md:text-pmain lg:text-pmainls">Corrections récentes :</strong>
        <?php
        require('php/config.php');
        $research = $bdd->prepare('SELECT classe FROM alpine.users WHERE username="' . $_SESSION['username'] . '"');
        $research->execute();
        $researchresult = $research->fetch();
        $base = $bdd->prepare('SELECT id, user_id, name, type_id, subject_id, date, class_id FROM alpine.documents WHERE class_id="' . $researchresult['classe'] . '"AND type_id="corrections"');
        $index = 0;
        $data = array();
        while ($row = $base->fetch(PDO::FETCH_ASSOC)) {
          $data[$index][0] = $row['id'];
          $data[$index][1] = $row['user_id'];
          $data[$index][2] = $row['name'];
          $data[$index][3] = $row['type_id'];
          $data[$index][4] = $row['subject_id'];
          $data[$index][5] = $row['date'];
          $index++;
        }
        for ($i = count($data) - 1; $i >= count($data) - 5 && $i >= 0; $i--) {
          $authorsearch = $bdd->prepare('SELECT name FROM alpine.users WHERE id=' . $data[$i][1] . '');
          $authorsearch->execute();
          $authorfetched = $authorsearch->fetch();
          switch ($data[$i][4]) {
            case 'fr':
              $subject = 'Français';
              break;
            case 'hg':
              $subject = 'Histoire-Géographie';
              break;
            case 'en':
              $subject = "Anglais";
              break;
            case 'es':
              $subject = "Espagnol";
              break;
            case 'SES':
              $subject = "SES";
              break;
            case 'maths':
              $subject = "Mathématiques";
              break;
            case 'phch':
              $subject = "Physique-Chimie";
              break;
            case 'svt':
              $subject = "SVT";
              break;
            case 'emc':
              $subject = "EMC";
              break;
            case 'snt':
              $subject = "SNT";
              break;
          }
          echo "<div class='block bg-gray-100 my-10px mx-auto'>
          <h1 class='sm:text-pmain md:text-pmain lg:text-pmainls'>Nom : " . $data[$i][2] . "</h1>
          <h1 class='sm:text-pmain md:text-pmain lg:text-pmainls'>Matière : " . $subject . "</h1>
          <h1 class='sm:text-pmain md:text-pmain lg:text-pmainls'>Date : " . $data[$i][5] . "</h1>
          <h1 class='sm:text-pmain md:text-pmain lg:text-pmainls'>Auteur : " . $authorfetched['name'] . "</h1>
          <div class='w-max mx-auto'>
          <a href='more.php?id=".htmlspecialchars($data[$i][0])."' class='inline-block mb-10px lg:my-20px p-10px lg:p-20px sm:text-pmain md:text-pmain lg:text-pmainls bg-blue-600 uppercase rounded-lg text-white text-center'>Voir plus</a>
          </div>
        </div>";
        }
        ?>
      </div>
    </div>
  </div>

  <footer class="text-center">© 2020 CRIOSSAMA ALL RIGHTS RESERVED</footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="./js/dropdown.js"></script>
</body>

</html>