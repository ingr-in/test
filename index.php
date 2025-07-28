<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$allowed_pages = ['home', 'about', 'gallery', 'contact', 'admin'];

if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}

require_once 'includes/header.php';
require_once "pages/$page.php";
require_once 'includes/footer.php';
?>
