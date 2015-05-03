<?php
    include('assets/header.php');
    $activeTab = "Testimonals";
    include('assets/navbar.php');


    if ($login->isUserLoggedIn() == true) {
        include("views/v-reviews.php");
    } else {
        include("views/v-reviews.php");
    }

    include('assets/footer.php');
?>