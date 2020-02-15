<?php
include "view/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($_GET['act']) {
        case 'about':
            include "view/about.php";
            break;
        case 'collection':
            include "view/collection.php";
            break;
        case 'services':
            include "view/services.php";
            break;
        case 'blog':
            include "view/blog.php";
            break;
        case 'contact':
            include "view/contact.php";
            break;
    }
} else {
include "view/home.php";
}   
include "view/footer.php";