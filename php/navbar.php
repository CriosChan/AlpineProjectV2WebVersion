<?php
echo '
<div class="bg-white shadow-lg">
        <div class="container mx-auto">
            <div class="sm:flex lg:justify-around">
                <a href="main.php"><img class="lg:inline-block w-100 md:w-250 lg:w-250 py-1em my-auto mx-auto" src="images/alpine_title.png"></img></a>
                <ul class="sm:self-center w-max lg:w-max mx-auto">
                    <div class="w-max lg:w-max lg:inline-block mx-auto align-middle">
                        <!------------------ COURS ----------------------->
                        <div class="dropdown inline-block cursor-pointer">
                            <!-- dropdown text -->
                            <span class="dropdown-text flex px-10px px-4 py-3 bg-gray-400 rounded text-gray-800 items-center hover:bg-gray-800 hover:text-white whitespace-no-wrap p-10 sm:text-pmain md:text-pmain lg:text-pmainls">Cours ↓
                            </span>
                            <!-- dropdown menu -->
                            <div class="dropdown-menu flex flex-col flex-grow hidden absolute">
                                <div class="rounded flex flex-col flex-grow bg-gray-400 divide-y divide-gray-200">
                                    <div class="dropdown-item flex">
                                        <a href="navbarresult.php?subject_id=fr&type_id=cours" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">Français</a>
                                    </div>
                                    <div class="dropdown-item flex">
                                        <a href="navbarresult.php?subject_id=hg&type_id=cours" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">Histoire-Géographie</a>
                                    </div>
                                    <div class="dropdown-item flex">
                                        <a href="navbarresult.php?subject_id=en&type_id=cours" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">Anglais</a>
                                    </div>
                                    <div class="dropdown-item flex">
                                        <a href="navbarresult.php?subject_id=es&type_id=cours" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">Espagnol</a>
                                    </div>
                                    <div class="dropdown-item flex">
                                        <a href="navbarresult.php?subject_id=SES&type_id=cours" class="dropdown-link flex flex-grow px-104 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">SES</a>
                                    </div>
                                    <div class="dropdown-item flex">
                                        <a href="navbarresult.php?subject_id=maths&type_id=cours" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">Mathématiques</a>
                                    </div>
                                    <div class="dropdown-item flex">
                                        <a href="navbarresult.php?subject_id=phch&type_id=cours" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">Physique-Chimie</a>
                                    </div>
                                    <div class="dropdown-item flex">
                                        <a href="navbarresult.php?subject_id=svt&type_id=cours" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">SVT</a>
                                    </div>
                                    <div class="dropdown-item flex">
                                        <a href="navbarresult.php?subject_id=emc&type_id=cours" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">EMC</a>
                                    </div>
                                    <div class="dropdown-item flex">
                                        <a href="navbarresult.php?subject_id=snt&type_id=cours" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">SNT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- dropdown menu -->
                        <!------------------ LEVEL 1 ----------------------->
                        <!------------------ Exercices ----------------------->
                        <div class="dropdown inline-block cursor-pointer">
                            <!-- dropdown text -->
                            <span class="dropdown-text flex px-10px px-4 py-3 bg-gray-400 rounded text-gray-800 items-center hover:bg-gray-800 hover:text-white whitespace-no-wrap p-10 sm:text-pmain md:text-pmain lg:text-pmainls">Exercices ↓
                            </span>
                            <!-- dropdown menu -->
                            <div class="dropdown-menu flex flex-col hidden absolute">
                                <div class="rounded flex flex-col flex-grow bg-gray-400 divide-y divide-gray-200">
                                <div class="dropdown-item flex">
                                    <a href="navbarresult.php?subject_id=fr&type_id=exercices" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">Français</a>
                                </div>
                                <div class="dropdown-item flex">
                                    <a href="navbarresult.php?subject_id=hg&type_id=exercices" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">Histoire-Géographie</a>
                                </div>
                                <div class="dropdown-item flex">
                                    <a href="navbarresult.php?subject_id=en&type_id=exercices" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">Anglais</a>
                                </div>
                                <div class="dropdown-item flex">
                                    <a href="navbarresult.php?subject_id=es&type_id=exercices" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">Espagnol</a>
                                </div>
                                <div class="dropdown-item flex">
                                    <a href="navbarresult.php?subject_id=SES&type_id=exercices" class="dropdown-link flex flex-grow px-104 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">SES</a>
                                </div>
                                <div class="dropdown-item flex">
                                    <a href="navbarresult.php?subject_id=maths&type_id=exercices" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">Mathématiques</a>
                                </div>
                                <div class="dropdown-item flex">
                                    <a href="navbarresult.php?subject_id=phch&type_id=exercices" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">Physique-Chimie</a>
                                </div>
                                <div class="dropdown-item flex">
                                    <a href="navbarresult.php?subject_id=svt&type_id=exercices" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">SVT</a>
                                </div>
                                <div class="dropdown-item flex">
                                    <a href="navbarresult.php?subject_id=emc&type_id=exercices" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">EMC</a>
                                </div>
                                <div class="dropdown-item flex">
                                    <a href="navbarresult.php?subject_id=snt&type_id=exercices" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">SNT</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- dropdown menu -->
                        <!------------------ LEVEL 1 ----------------------->
                        <!------------------ CORRECTION ----------------------->
                        <div class="dropdown inline-block cursor-pointer">
                            <!-- dropdown text -->
                            <span class="dropdown-text flex px-10px px-4 py-3 bg-gray-400 rounded text-gray-800 items-center hover:bg-gray-800 hover:text-white whitespace-no-wrap p-10 sm:text-pmain md:text-pmain lg:text-pmainls">Corrections ↓
                            </span>
                            <!-- dropdown menu -->
                            <div class="dropdown-menu flex flex-col hidden absolute">
                                <div class="rounded flex flex-col flex-grow bg-gray-400 divide-y divide-gray-200 mr-10px">
                                    <div class="dropdown-item flex">
                                        <a href="navbarresult.php?subject_id=fr&type_id=corrections" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">Français</a>
                                    </div>
                                    <div class="dropdown-item flex">
                                        <a href="navbarresult.php?subject_id=hg&type_id=corrections" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">Histoire-Géographie</a>
                                    </div>
                                    <div class="dropdown-item flex">
                                        <a href="navbarresult.php?subject_id=en&type_id=corrections" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">Anglais</a>
                                    </div>
                                    <div class="dropdown-item flex">
                                        <a href="navbarresult.php?subject_id=es&type_id=corrections" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">Espagnol</a>
                                    </div>
                                    <div class="dropdown-item flex">
                                        <a href="navbarresult.php?subject_id=SES&type_id=corrections" class="dropdown-link flex flex-grow px-104 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">SES</a>
                                    </div>
                                    <div class="dropdown-item flex">
                                        <a href="navbarresult.php?subject_id=maths&type_id=corrections" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">Mathématiques</a>
                                    </div>
                                    <div class="dropdown-item flex">
                                        <a href="navbarresult.php?subject_id=phch&type_id=corrections" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">Physique-Chimie</a>
                                    </div>
                                    <div class="dropdown-item flex">
                                        <a href="navbarresult.php?subject_id=svt&type_id=corrections" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">SVT</a>
                                    </div>
                                    <div class="dropdown-item flex">
                                        <a href="navbarresult.php?subject_id=emc&type_id=corrections" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">EMC</a>
                                    </div>
                                    <div class="dropdown-item flex">
                                        <a href="navbarresult.php?subject_id=snt&type_id=corrections" class="dropdown-link flex flex-grow px-10 py-3 text-gray-800 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">SNT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dropdown menu -->
                    <!------------------ LEVEL 1 ----------------------->
                    <div class="w-10/12 lg:w-max mx-auto lg:inline-block lg:pl-20px text-center lg:text-left align-middle">
                        <a href="upload.php" class="inline-block px-10px sm:text-pmain md:text-pmain align-middle lg:text-pmainls my-auto mx-auto text-black">Ajouter ⇪</a>
                        <div class="lg:inline-block">
                            <div class="dropdown inline-block cursor-pointer">
                                <!-- dropdown text -->
                                <a href="#" class="dropdown-text inline-block sm:text-pmain md:text-pmain align-middle lg:text-pmainls my-auto mx-auto text-black">'. $_SESSION['name'] .'</a>

                                <!-- dropdown menu -->
                                <div class="dropdown-menu flex flex-col flex-grow hidden absolute">
                                    <div class="rounded flex flex-col flex-grow bg-gray-400 divide-y divide-gray-200">
                                        <div class="dropdown-item flex">
                                            <a href="php/disconnection.php" class="dropdown-link flex flex-grow px-10 py-3 text-red-600 whitespace-no-wrap rounded hover:bg-gray-800 hover:text-white sm:text-pmain md:text-pmain lg:text-pmainls">Se deconnecter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="upload_profile.php"><img class="inline-block w-60 p-5px lg:p-10px my-auto rounded-full align-middle" src="profil_img/' . $_SESSION['profil_img_path'] . '" ></a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
';