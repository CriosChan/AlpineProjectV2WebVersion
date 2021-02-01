<?php
session_start();
if(isset($_SESSION['username'])){
  header('Location:main.php');
}
?>
<!DOCTYPE html>
<html class="font-oswald bg-gray-200">

<head lang="fr">
    <meta charset="utf-8">
    <title>Alpine V2 | Connexion</title>
    <link href="styles/dist/main.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="images/alpine_icon.png">
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="container mx-auto">
        <img class="sm:w-600 md:w-600 lg:w-400 mx-auto" src="images/alpine_title.png"></img>
    </div>
    <div class="container mx-auto pt-2em">
        <?php
        if (isset($_GET['login_err'])) {
            $err = htmlspecialchars($_GET['login_err']);

            switch ($err) {
                case 'password':
        ?>
                    <label class='sm:text-pmain md:text-pmain lg:text-pmainls text-red-600'><strong>Erreur</strong> mot de passe incorrect</label>
                <?php
                    break;
                case 'already':
                ?>
                    <label class='sm:text-pmain md:text-pmain lg:text-pmainls text-red-600'><strong>Erreur</strong> compte inexistant</label>
        <?php
                    break;
            }
        }
        ?>
        <form class="" action="php/login.php" method="post">
            <div class="bg-white w-min h-min mx-auto px-1em rounded-lg">
                <div class="p-2em w-max h-max mx-auto">
                    <label class="sm:text-pmain md:text-pmain lg:text-pmainls" for="username">Nom d'utilisateur : </label><br>
                    <input class="sm:text-pmain md:text-pmain lg:text-pmainls bg-gray-200" type="text" id="username" name="username" required="required" autocomplete="off"><br>
                    <label class="sm:text-pmain md:text-pmain lg:text-pmainls" for="password">Mot de passe : </label><br>
                    <input class="sm:text-pmain md:text-pmain lg:text-pmainls bg-gray-200" type="password" id="password" name="password" required="required" autocomplete="off"><br>
                </div>
                <div class="mx-auto w-max h-max">
                    <a href="index.php" class="inline-blockmb-10px lg:my-20px p-20px sm:text-pmain md:text-pmain lg:text-pmainls bg-blue-600 uppercase rounded-lg text-white text-center">← retour</a>
                    <button type="submit" class="inline-block mb-10px lg:my-20px p-20px sm:text-pmain md:text-pmain lg:text-pmainls bg-blue-600 uppercase rounded-lg text-white text-center">se
                        connecter</button>
                </div>
            </div>
        </form>
    </div>
    <footer class="text-center sm:text-pmain md:text-pmain lg:text-pmainls p-2em">© 2020 CRIOSSAMA ALL RIGHTS RESERVED</footer>
</body>

</html>