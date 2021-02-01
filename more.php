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
    <div class="container lg:flex space-x-2em w-max mx-auto my-10px">
        <!-- DOC RECENTS -->
        <div class="bg-white lg:flex-initial w-max rounded-lg mb-10px shadow-lg">
            <!-- COURS -->
            <div class="p-10px">
                <?php
                if (isset($_GET['id'])) {
                    $id = htmlspecialchars($_GET['id']);
                } else {
                    header('Location:index.php');
                }
                require('php/config.php');
                $research = $bdd->prepare('SELECT classe FROM alpine.users WHERE username="' . $_SESSION['username'] . '"');
                $research->execute();
                $researchresult = $research->fetch();
                $base = $bdd->prepare('SELECT id, user_id, name, type_id, subject_id, date, file_path, class_id FROM alpine.documents WHERE class_id="' . $researchresult['classe'] . '"AND id="' . $id . '"');
                $base->execute();
                $baseresult = $base->fetch();
                $type = $baseresult['type_id'];
                $subject = $baseresult['subject_id'];
                $classid = $baseresult['class_id'];
                $file_paths = explode('&', $baseresult['file_path']);
                if(count($file_paths) - 1 > 1){
                $files = array();
                for ($i = 0; $i < count($file_paths) - 1; $i++) {
                    $files[$i] = $file_paths[$i];
                }

                foreach (new DirectoryIterator("tmp/") as $file){
                    if($file->isDot())continue;
                    unlink("tmp/".$file->getFilename());
                }

                $zipname = "tmp/";
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                for ($i = 0; $i < 10; $i++) {
                    $index = rand(0, strlen($characters) - 1);
                    $zipname .= $characters[$index];
                }
                $zipname .=".zip";
                $zip = new ZipArchive;
                $zip->open($zipname, ZIPARCHIVE::CREATE);
                foreach ($files as $file) {
                    $zip->addFile(htmlspecialchars($type) . "/" . htmlspecialchars($subject) . "/" . htmlspecialchars($classid) . "/" . $file, $file);
                }
                $zip->close();
            } else {
                $zipname = htmlspecialchars($type) . "/" . htmlspecialchars($subject) . "/" . htmlspecialchars($classid) . "/" . $file_paths[0];
            }

                $authorsearch = $bdd->prepare('SELECT name FROM alpine.users WHERE id=' .  $baseresult['user_id'] . '');
                $authorsearch->execute();
                $authorfetched = $authorsearch->fetch();
            

                switch ($baseresult['subject_id']) {
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
          <h1 class='sm:text-pmain md:text-pmain lg:text-pmainls'>Nom : " . $baseresult['name'] . "</h1>
          <h1 class='sm:text-pmain md:text-pmain lg:text-pmainls capitalize'>Type : " . $type . "</h1>
          <h1 class='sm:text-pmain md:text-pmain lg:text-pmainls'>Matière : " . $subject . "</h1>
          <h1 class='sm:text-pmain md:text-pmain lg:text-pmainls'>Date : " . $baseresult['date'] . "</h1>
          <h1 class='sm:text-pmain md:text-pmain lg:text-pmainls'>Auteur : " . $authorfetched['name'] . "</h1>
          <div class='w-max mx-auto'>
          <a href='" . $zipname . "' class='inline-block mb-10px lg:my-20px p-10px lg:p-20px sm:text-pmain md:text-pmain lg:text-pmainls bg-blue-600 uppercase rounded-lg text-white text-center'>Telecharger</a>
          </div>
        </div>";

                ?>
            </div>
        </div>
    </div>
    <footer class="text-center">© 2020 CRIOSSAMA ALL RIGHTS RESERVED</footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./js/dropdown.js"></script>
</body>

</html>