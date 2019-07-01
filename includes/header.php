<?php

require 'config/config.php';

require("includes/form_handlers/register_handler.php");
require("includes/form_handlers/login_handler.php");
  
?>

<!DOCTYPE html>


<html lang="pl-PL">

<head>
    <!-- JS -->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="pl">
    <script src="assets/js/popper.js"> </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"> </script>
    <script src="assets/js/bootbox.min.js"> </script>
    <script src="assets/js/jcrop_bits.js"> </script>
    <script src="assets/js/jquery.Jcrop.js"> </script>

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Spectral&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">



</head>

<body>
    <header>
        <div class="header_wrap">
            <div class="header_login">
                <nav>
                    <ul>
                        <?php  if (isset($_SESSION['is_judge'])) {
                       echo "<li><a href='create_competition.php'><i class='fa fa-plus-square'></i> Stwórz zawody</a></li>";

                        }
                        ?>
                        <li><a href="index.php"><i class="fa fa-bullhorn"></i> Ogłoszenia</a></li>
                        <li><a href="competition.php"><i class="fa fa-bullseye"></i> Aktualne zawody</a></li>
                        <li><a href="metryczka.php"><i class="fa fa-table"></i> Metryczka</a></li>
                        <li><a href="ranking.php"><i class="fa fa-list-ol"></i> Ranking</a></li>
                        <li><a href="ladder.php"><i class="fa fa-network-wired"></i> Drabinka</a></li>
                    </ul>
                </nav>
                <?php if (!isset($_SESSION['username'])) {
                        echo "<form  method='POST'>
                        <input type='text' name='login_email'>
                        <input type='password' name='login_password'>
                        <input type='submit' value='Zaloguj' name='login_button'>
                    </form>   "; 
                    }
                    else  { ?>
                    
                    <div id="hello_user">
                        <div class="dropdown show">
                            <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user-cog"></i> <?php echo $_SESSION['username']; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a href='profile.php' class="dropdown-item" href="#"><i class='fa fa-user'></i> Mój profil</a>
                                <a href='includes/handlers/logout.php' class="dropdown-item" href="#"><i class='fa fa-sign-out-alt'></i> Wyloguj</a>
                            </div>
                        </div>
                        
                    </div>




               






                <?php
                    }
                        ?>

            </div>
        </div>


    </header>