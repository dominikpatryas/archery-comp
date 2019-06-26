<?php 
require 'config/config.php';
include("includes/header.php");
include("includes/handlers/logout-redirect.php");


$query = mysqli_query($con, "SELECT * FROM announcements WHERE id = '1'");
$row = mysqli_fetch_array($query);

$small_desc = mysqli_query($con, "SELECT SUBSTRING_INDEX(description,' ',28) as description FROM announcements where id ='1'");
$row_small_desc = mysqli_fetch_array($small_desc);
 ?>

<div class='main-content'>
    <div class="announcement">
        <div class="announcement_img">
            <img src="" alt="">
        </div>
        <div class="announcement_description">
            <?php echo "<h2>" . $row['title'] ."</h2>" . " " . "<br>"
            . $row_small_desc['description'] . "<a href=''> Czytaj więcej... </a>";
            ?>
        </div>
    </div>

</div>

</div>
</body>

</html>