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
        <form class="" action="php/register.php" method="post">
            <div class="bg-white lg:w-min lg:h-min lg:mx-auto lg:px-1em rounded-lg">
                <div class="w-max h-max mx-auto">
                    <?php
                    if (isset($_GET['reg_err'])) {
                        $err = htmlspecialchars($_GET['reg_err']);

                        switch ($err) {
                            case 'success':
                    ?>
                                <label class='text-pmain text-green-600'><strong>Bravo</strong> le compte a été créé avec succès</label>
                            <?php
                                break;
                            case 'password':
                            ?>
                                <label class='text-pmain text-red-600'><strong>Erreur</strong> mot de passe différent</label>
                            <?php
                                break;
                            case 'email':
                            ?>
                                <label class='text-pmain text-red-600'><strong>Erreur</strong> email incorrect</label>
                            <?php
                                break;
                            case 'email_length':
                            ?>
                                <label class='text-pmain text-red-600'><strong>Erreur</strong> email trop longue</label>
                            <?php
                                break;
                            case 'pseudo_length':
                            ?>
                                <label class='text-pmain text-red-600'><strong>Erreur</strong> nom d'utilisateur trop long</label>
                            <?php
                                break;
                            case 'classcode':
                            ?>
                                <label class='text-pmain text-red-600'><strong>Erreur</strong> code de classe erroné</label>
                            <?php
                                break;
                            case 'already':
                            ?>
                                <label class='text-pmain text-red-600'><strong>Erreur</strong> compte existant</label>
                    <?php
                                break;
                        }
                    }
                    ?>
                </div>
                <div class="p-2em lg:w-max lg:h-max lg:mx-auto">
                    <div class="inline-block">
                        <label class="sm:text-pmain md:text-pmain lg:text-pmainls" for="realname">Nom et Prénom :
                        </label><br>
                        <input class="sm:text-pmain md:text-pmain lg:text-pmainls bg-gray-200" type="text" id="realname" name="realname" required="required" autocomplete="off"><br>

                        <label class="sm:text-pmain md:text-pmain lg:text-pmainls" for="realname">Nom d'utilisateur :
                        </label><br>
                        <input class="sm:text-pmain md:text-pmain lg:text-pmainls bg-gray-200" type="text" id="username" name="username" required="required" autocomplete="off"><br>

                        <label class="sm:text-pmain md:text-pmain lg:text-pmainls" for="email">Email : </label><br>
                        <input class="sm:text-pmain md:text-pmain lg:text-pmainls bg-gray-200" type="email" id="email" name="email" required="required" autocomplete="off"><br>
                    </div>
                    <div class="inline-block lg:p-2em">
                        <label class="sm:text-pmain md:text-pmain lg:text-pmainls" for="password">Mot de passe :
                        </label><br>
                        <input class="sm:text-pmain md:text-pmain lg:text-pmainls bg-gray-200" type="password" id="password" name="password" required="required" autocomplete="off"><br>

                        <label class="sm:text-pmain md:text-pmain lg:text-pmainls" for="passwordverif">Retapez le mot de
                            passe : </label><br>
                        <input class="sm:text-pmain md:text-pmain lg:text-pmainls bg-gray-200" type="password" id="passwordverif" name="passwordverif" required="required" autocomplete="off"><br>

                        <label class="sm:text-pmain md:text-pmain lg:text-pmainls" for="classecode">Code de votre classe :
                        </label><br>
                        <input class="sm:text-pmain md:text-pmain lg:text-pmainls bg-gray-200" type="text" id="classecode" name="classecode" required="required" autocomplete="off"><br>
                    </div>
                    <div class="mx-auto w-max h-max">
                        <br>
                        <a href="index.php" class="inline-block mb-10px lg:my-20px p-20px mx-1em sm:text-pmain md:text-pmain lg:text-pmainls bg-blue-600 uppercase rounded-lg text-white text-center">← retour</a>
                        <button type="submit" class="inline-block mb-10px lg:my-20px p-20px mx-1em sm:text-pmain md:text-pmain lg:text-pmainls bg-blue-600 uppercase rounded-lg text-white text-center">s'enregister</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <footer class="text-center text-pmainlg p-2em">© 2020 CRIOSSAMA ALL RIGHTS RESERVED</footer>
</body>

</html>