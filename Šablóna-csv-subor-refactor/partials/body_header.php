<?php
include_once 'functions.php';
use main\Menu;


$menuObj = new Menu();

//$menu = $menuObj->getCsvMenu("header");
$menu = $menuObj->getMenu("header");
?>
<header class="container main-header">
    <div class="logo-holder">
        <a href="<?php echo (isset($menu['home']['path']) ? $menu['home']['path'] : 'index.php') ?>">
            <img src="img/logo.png" height="40 "></a>
    </div>
    <nav class="main-nav">
        <ul class="main-menu" id="main-menu container">
            <?php
//            $menuObj->printMenu($menu);
            $menuObj->printCsvMenu();


            ?>
<!--            <li><a href="index.php">Domov</a></li>-->
<!--            <li><a href="portfolio.php">Portfólio</a></li>-->
<!--            <li><a href="qna.php">Q&A</a></li>-->
<!--            <li><a href="kontakt.php">Kontakt</a></li>-->
        </ul>
        <a class="hamburger" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
</header>