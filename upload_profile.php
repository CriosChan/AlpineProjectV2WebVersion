<!DOCTYPE html>
<html class="font-oswald bg-gray-200">

<head lang="fr">
    <meta charset="utf-8">
    <title>Alpine V2 | Image de Profile</title>
    <link href="styles/dist/main.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="images/alpine_icon.png">
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="container mx-auto">
        <img class="sm:w-600 md:w-600 lg:w-400 mx-auto" src="images/alpine_title.png"></img>
    </div>
    <div class="container mx-auto pt-2em">
        <<form method="POST" action="php/profil_img.php" enctype="multipart/form-data">
  	  	
            <input type="file" class="text-center sm:text-pmain md:text-pmain lg:text-pmainls p-2em block mx-auto"name="image"><br>
            <button type="submit" class="block mb-10px lg:my-20px p-20px sm:text-pmain md:text-pmain lg:text-pmainls bg-blue-600 uppercase rounded-lg text-white text-center mx-auto" name="upload">Upload Image</button>
          
      </form>
    </div>
    <footer class="text-center sm:text-pmain md:text-pmain lg:text-pmainls p-2em">© 2020 CRIOSSAMA ALL RIGHTS RESERVED</footer>
</body>

</html>