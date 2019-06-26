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
                        <?php if (isset($_SESSION['username'])) echo "
                        <li> <a href='includes/handlers/logout.php'><i class='fa fa-sign-out-alt'></i> Wyloguj się</a>
                        </li>
                        
                        "?>
                        
                        <li><a href="#"><i class="fa fa-bullseye"></i> Aktualne zawody</a></li>
                        <li><a href="#"><i class="fa fa-table"></i> Metryczka</a></li>
                        <li><a href="#"><i class="fa fa-list-ol"></i> Ranking</a></li>
                        <li><a href="#"><i class="fa fa-network-wired"></i> Drabinka</a></li>
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
                    <a href="profile.php">
                <div id="hello_user">
                        <h3> <i class="fa fa-user-cog"> <?php echo $_SESSION['username']; ?></i></h4>
                </div>
                </a>

                <?php
                    }
                        ?>

            </div>
        </div>


    </header>