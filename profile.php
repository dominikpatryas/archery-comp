<?php 
include("includes/header.php");
include("includes/classes/User.php");
$user_obj = new User($con, $_SESSION['username']);

?>


<div class="archer-content">
    <div class="archer_sidebar">
        <div class="archer_img">
            <img src="<?php echo $user_obj->getPhotoPath(); ?>" alt="">

            

            <form method="post" enctype="multipart/form-data">
                <input type="file" name="main_photo" >
                <input type="submit" value="Załaduj">
            </form>
            <?php 
                if (isset($_FILES['main_photo'])) {
                    $phpFileUploadErrors = array(
                        0 => 'There is no error, the file uploaded with success',
                        1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
                        2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
                        3 => 'The uploaded file was only partially uploaded',
                        4 => 'No file was uploaded',
                        6 => 'Missing a temporary folder',
                        7 => 'Failed to write file to disk.',
                        8 => 'A PHP extension stopped the file upload.',
                    );

                    // pre_r($_FILES);

                    $ext_error = false;
// extensions which allowed
                    $extensions = array('jpg', 'jpeg', 'png');
                    $file_ext = explode('.', $_FILES['main_photo']['name']);
                    $file_ext = end($file_ext);
                    // print_r($file_ext);

                    if (!in_array($file_ext, $extensions)) {
                        $ext_error = true;
                    }

                    if ($_FILES['main_photo']['error']) {
                        echo $phpFileUploadErrors[$_FILES['main_photo']['error']];
                    }
                    elseif ($ext_error) {
                        echo "Nieprawidłowy format (PNG, JPG, JPEG)";
                    }
                    else {
                        echo 'Poprawnie zmieniono zdjęcie.';
                    }
                    if (!$_FILES['main_photo']['size'] == 0) {
                    move_uploaded_file($_FILES['main_photo']['tmp_name'], 'assets/images/' . $_FILES['main_photo']['name']);

                    $username = $_SESSION['username'];
                    $query = mysqli_query($con, "SELECT photo_url FROM users WHERE username = '$username'");
                    $row = mysqli_fetch_array($query);
                    $old_path = $row['photo_url'];
                    unlink($old_path);

                    $photo_path = 'assets/images/' . $_FILES['main_photo']['name'];
                    $user_obj->changeMainPhoto($photo_path);

                    
                    header("Refresh:0");
                    }
                }
                function pre_r($array) {
                    echo '<pre>';
                    print_r($array);
                    echo '</pre>';
                }

            ?>

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