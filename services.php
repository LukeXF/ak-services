<?php
    include('assets/header.php');
    $activeTab = "Our Services";
    include('assets/navbar.php');


    if ($login->isUserLoggedIn() == true) {
        include("views/v-services.php");
    } else {
        include("views/v-services.php");
    }

    include('assets/footer.php');
?>