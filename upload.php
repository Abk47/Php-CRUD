<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["b_file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["b_file"]["tmp_name"]);
    if ($check !== false) {
        echo "File is type - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not valid.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["b_file"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["b_file"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["b_file"]["name"]) . " has been uploaded.";

        ?>

        <a href="index.php" class="btn btn-dark">BACK</a>
<?php
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}