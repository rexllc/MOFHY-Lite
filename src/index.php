<?php
$PageInfo = ['title'=>'Home Page','rel'=>''];
require_once __DIR__.'/includes/Connect.php';
require_once __DIR__.'/handler/AreaHandler.php';
require_once __DIR__.'/includes/Header.php';
require_once __DIR__.'/handler/CookieHandler.php';
require_once __DIR__.'/handler/ValidationHandler.php';
require_once __DIR__.'/includes/Navbar.php';
require_once __DIR__.'/includes/Sidebar.php';
include __DIR__.'/template/Home.php';
require_once __DIR__.'/includes/Footer.php';
?>