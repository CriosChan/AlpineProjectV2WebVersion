<!DOCTYPE html>
<html class="font-oswald bg-gray-200">

<head lang="fr">
    <meta charset="utf-8">
    <title>Alpine V2 | Inscription</title>
    <link href="styles/dist/main.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="images/alpine_icon.png">
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="container mx-auto">
        <img class="sm:w-600 md:w-600 lg:w-400 mx-auto" src="images/alpine_title.png"></img>
    </div>
    <div class="container mx-auto pt-2em">
        <form class="" action="php/createclassroom.php" method="post">
            <div class="bg-white w-min h-min mx-auto px-1em rounded-lg">
                <div class="p-2em w-max h-max mx-auto">
                    <label class="sm:text-pmain md:text-pmain lg:text-pmainls" for="classname">Nom de la classe :
                    </label><br>
                    <input class="sm:text-pmain md:text-pmain lg:text-pmainls bg-gray-200" type="text" id="classname" name="classname" required="required" autocomplete="off"><br>

                    <label class="sm:text-pmain md:text-pmain lg:text-pmainls" for="author">Votre nom :
                    </label><br>
                    <input class="sm:text-pmain md:text-pmain lg:text-pmainls bg-gray-200" type="text" id="author" name="author" required="required" autocomplete="off"><br>

                    <label class="sm:text-pmain md:text-pmain lg:text-pmainls" for="email">Votre email : </label><br>
                    <input class="sm:text-pmain md:text-pmain lg:text-pmainls bg-gray-200" type="email" id="email" name="email" required="required" autocomplete="off"><br>
                    <?php
                    if (isset($_GET['createcr_err'])) {
                        $err = htmlspecialchars($_GET['createcr_err']);

                        switch ($err) {
                            case 'classname_length':
                    ?>
                                <label class='sm:text-pmain md:text-pmain lg:text-pmainls text-red-600'><strong>Erreur</strong> nom de classe trop long</label>
                            <?php
                                break;
                            case 'email_length':
                            ?>
                                <label class='sm:text-pmain md:text-pmain lg:text-pmainls text-red-600'><strong>Erreur</strong> email trop longue</label>
                            <?php
                                break;
                            case 'email':
                            ?>
                                <label class='sm:text-pmain md:text-pmain lg:text-pmainls text-red-600'><strong>Erreur</strong> email invalide</label>
                    <?php
                                break;
                                case 'success':
                                    ?>
                                        <label class='sm:text-pmain md:text-pmain lg:text-pmainls text-green-600'><strong>Bravo !</strong> La classe a été créé avec succès</label><br>
                            <?php
                                        break;
                        }
                    }
                    if (isset($_GET['code'])) {
                        $code = htmlspecialchars($_GET['code']);
                        echo "<label class='sm:text-pmain md:text-pmain lg:text-pmainls'>Code de la classe : <strong>$code</strong> <br>Enregistrez le et gardez le avec précautions</label>";
                    }
                    ?>
                </div>
                <div class="mx-auto w-max h-max">
                    <a href="index.php" class="inline-block mb-10px lg:my-20px p-20px sm:text-pmain md:text-pmain lg:text-pmainls bg-blue-600 uppercase rounded-lg text-white text-center">← retour</a>
                    <button type="submit" class="inline-block mb-10px lg:my-20px p-20px sm:text-pmain md:text-pmain lg:text-pmainls bg-blue-600 uppercase rounded-lg text-white text-center">ajouter sa classe</button>
                </div>
            </div>
        </form>
    </div>
    <footer class="text-center text-pmainlg p-2em">© 2020 CRIOSSAMA ALL RIGHTS RESERVED</footer>
</body>
</html>