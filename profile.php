<?php 
include("includes/header.php");
include("includes/classes/User.php");
$user_obj = new User($con, $_SESSION['username']);

?>


<div class="archer-content">
    <div class="archer_sidebar">
        <div class="archer_img">
            <img src="https://static.reservedirect.com/media/product/gallery/539/Target_Archery_(25027).jpg" alt="">
            <hr>
        </div>
        <div class="archer_description">
            <h4> <i class='fa fa-address-card'></i> <?php echo $user_obj->getFirstLastName() . ", " . $user_obj->getAge(); ?></h4>
            <h6>Kategoria: <?php echo $user_obj->getCategory(); ?></h6>
            <h6>Łuk: <?php echo $user_obj->getBowTypeAndPounds(); ?></h6>
            <h6 >Badania sportowe: <?php echo $user_obj->getDateMedical(); ?></h6>
            <h6 >Data urodzenia: <?php echo $user_obj->getDateBirth(); ?></h6>
        </div>
    </div>
    <div class="archer-main-content">
        <h1>test</h1>
    </div>
</div>