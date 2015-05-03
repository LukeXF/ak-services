<?php
    include('assets/header.php');
    $activeTab = "Common Questions";
    include('assets/navbar.php');


    if ($login->isUserLoggedIn() == true) {
        include("views/v-faq.php");
    } else {
        include("views/v-faq.php");
    }

    include('assets/footer.php');
?>