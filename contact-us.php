<?php
    include('assets/header.php');
    $activeTab = "Contact Us";
    include('assets/navbar.php');


    if ($login->isUserLoggedIn() == true) {
        include("views/v-contact-us.php");
    } else {
        include("views/v-contact-us.php");
    }

    include('assets/footer.php');
?>