<?php
    include_once "load.php";
    if(isset($_SESSION['id'])){
        header('location: index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo 'LRG - ' . $title; ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" >
        <link href="css/style.css" rel="stylesheet">
        <link href="css/frontpages.css" rel="stylesheet">
    </head>
    <body class="container-fluid p-0 m-0">
        <div class="container-fluid centered">
            <div class="c3 menu">
                <label class="gn-icon gn-icon-menu" for="checkbox1">
                    <img src="images/menu.png">
                </label>
                <ul class="gn-menu-main mobile">
                    <li class="gn-trigger">
                        <nav class="gn-menu-wrapper">
                            <input type="checkbox" id="checkbox1">
                            <div class="gn-scroller">
                                <ul class="gn-menu">
                                    <li><a href="index.php" class="gn-icon gn-icon-home"><label class="comm"></label>MEMBERSHIP</a>
                                    </li>
                                    <li><a href="#" class="gn-icon"><label class="reff"></label>REFFEREE</a></li>
                                    <li><a href="#" class="gn-icon"><label class="comm"></label>PARENT EDUCATON</a></li>
                                    <li><a href="contact.php" class="gn-icon"><label class="comm"></label>Contact</a></li>
                                    <li><a href="about.php" class="gn-icon"><label class="comm"></label>About</a></li>
                                </ul>
                            </div>
                        </nav>
                    </li>
                </ul>
            </div>
            
            <div class="c6 logo">
                <img src="images/logo1.png">
            </div>
            <div class="c3 search">
                <img src="images/search.png">
            </div>
        </div>
                