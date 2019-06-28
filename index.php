<?php 
require 'config/config.php';
include("includes/header.php");
include("includes/handlers/logout-redirect.php");


$query = mysqli_query($con, "SELECT * FROM announcements ");


$small_desc = mysqli_query($con, "SELECT SUBSTRING_INDEX(description,' ',28) as description FROM announcements where id ='1'");
$row_small_desc = mysqli_fetch_array($small_desc);
 ?>
<div class="full-page">
    <div class='main-content'>
        <div class="announcement">

            <?php 
            while ($row = mysqli_fetch_array($query)) {

                echo "<div class='announcement_img'> <a href=''>
                <img src='" . $row['photo_url'] ." ' alt=''> </a>
            </div>".
                 "<div class='announcement_description'>" . "<h2>" . $row['title'] ."</h2>" . " " . "<br>"
                . $row_small_desc['description'] . "<a href=''> Czytaj więcej... </a>" . "</div>"  .
                "<hr>";

            }
            ?>


        </div>

    </div>
    <?php include("sidebar_results.php")?>
</div>

</div>
</body>

</html>