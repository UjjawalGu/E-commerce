<?php
include 'config.php';

if (!file_exists('uploads')) {
    mkdir('uploads');
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $price = $_POST['price'];


    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'uploads/' . $filename;
    move_uploaded_file($_FILES['image']['tmp_name'],$folder);

    $sql = "INSERT INTO fashion (name,price, image) VALUES ('$name', '$price','$folder')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully.";
        header("Location: fashion.php");
        exit();
    } else {
        echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
