<?php
include ("includes/header.php");

    if (isset($_POST['competition_name'])) {
        echo "+";
    }

?>


<div class="container">
    <div class="create-competition-content">
        <h2>PANEL TWORZENIA ZAWODÓW</h2>
        <form action="" method="POST">
            <input type="text" placeholder="Nazwa zawodów" name="competition_name"> <br>
            <input type="text" placeholder="Miejscowość" name="competition_city"> <br>
            <input type="text" placeholder="Kategoria" name="competition_category"> <br>
            <input type="date" placeholder="Data rozpoczęcia" name="competition_dateStart" id=""> <br>
            <input type="date" placeholder="Data zakończenia" name="competition_dateEnd" id=""> <br>
            <input type="submit" value="Utwórz zawody!">
        </form>
    </div>
</div>