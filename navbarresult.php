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
                <?php

                if (isset($_GET['subject_id'])) {
                    $subject_id = htmlspecialchars($_GET['subject_id']);
                }

                if (isset($_GET['type_id'])) {
                    $type_id = htmlspecialchars($_GET['type_id']);
                }

                if (isset($_GET['page'])) {
                    $actualpage = intval($_GET['page']);
                }

                if (!isset($_GET['page'])) {
                    $actualpage = 1;
                }

                require('php/config.php');
                $research = $bdd->prepare('SELECT classe FROM alpine.users WHERE username="' . $_SESSION['username'] . '"');
                $research->execute();
                $researchresult = $research->fetch();
                $base = $bdd->prepare('SELECT id, user_id, name, type_id, subject_id, date, class_id FROM alpine.documents WHERE class_id="' . $researchresult['classe'] . '"AND type_id="' . $type_id . '" AND subject_id="' . $subject_id . '"');
                $base->execute();
                $index = 0;
                $data = array();

                switch ($subject_id) {
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

                echo '<strong class="sm:text-pmain md:text-pmain lg:text-pmainls uppercase"> ' . $type_id . ' | ' . $subject . ' :</strong>';

                while ($row = $base->fetch(PDO::FETCH_ASSOC)) {
                    $data[$index][0] = $row['id'];
                    $data[$index][1] = $row['user_id'];
                    $data[$index][2] = $row['name'];
                    $data[$index][3] = $row['type_id'];
                    $data[$index][4] = $row['subject_id'];
                    $data[$index][5] = $row['date'];
                    $index++;
                }


                for ($i = count($data) - 1 - (($actualpage - 1)*10); $i >= count($data) - $actualpage*10 && $i >= 0; $i--) {
                    $authorsearch = $bdd->prepare('SELECT name FROM alpine.users WHERE id=' . $data[$i][1] . '');
                    $authorsearch->execute();
                    $authorfetched = $authorsearch->fetch();

                    echo "<div class='block bg-gray-100 my-10px mx-auto'>
          <h1 class='sm:text-pmain md:text-pmain lg:text-pmainls'>Nom : " . $data[$i][2] . "</h1>
          <h1 class='sm:text-pmain md:text-pmain lg:text-pmainls'>Date : " . $data[$i][5] . "</h1>
          <h1 class='sm:text-pmain md:text-pmain lg:text-pmainls'>Auteur : " . $authorfetched['name'] . "</h1>
          <div class='w-max mx-auto'>
          <a href='more.php?id=" . htmlspecialchars($data[$i][0]) . "' class='inline-block mb-10px lg:my-20px p-10px lg:p-20px sm:text-pmain md:text-pmain lg:text-pmainls bg-blue-600 uppercase rounded-lg text-white text-center'>Voir plus</a>
          </div>
        </div>";
                }
                echo "<div class='w-max mx-auto'>";

                if($actualpage > 1){
                    $newpage = $actualpage - 1;
                    echo "<a href='navbarresult.php?subject_id=" . htmlspecialchars($subject_id) . "&type_id=".htmlspecialchars($type_id) . "&page=".$newpage."' class='inline-block m-10px lg:my-20px p-10px lg:p-20px sm:text-pmain md:text-pmain lg:text-pmainls bg-blue-600 uppercase rounded-lg text-white text-center'>Page Précédente</a>";
                }
                if((count($data) - $actualpage*10) > 0){
                    $newpage2 = $actualpage + 1;
                    echo "<a href='navbarresult.php?subject_id=" . htmlspecialchars($subject_id) . "&type_id=".htmlspecialchars($type_id) . "&page=".$newpage2."' class='inline-block m-10px lg:my-20px p-10px lg:p-20px sm:text-pmain md:text-pmain lg:text-pmainls bg-blue-600 uppercase rounded-lg text-white text-center'>Page Suivante</a>";
                }
                echo "</div>"
                ?>
            </div>
        </div>
    </div>

    <footer class="text-center">© 2020 CRIOSSAMA ALL RIGHTS RESERVED</footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./js/dropdown.js"></script>
</body>

</html>