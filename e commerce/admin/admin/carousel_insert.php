<?php
include 'config.php';

if (!file_exists('uploads')) {
    mkdir('uploads');
}

if(isset($_POST['submit'])){
    $header_1 = $_POST['header_1'];
    $header_2 = $_POST['header_2'];
    $descr = $_POST['descr'];
    $btn = $_POST['btn'];

    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'uploads/' . $filename;
    move_uploaded_file($_FILES['image']['tmp_name'],$folder);

    $sql = "INSERT INTO carousel_section (header_1,header_2, descr, btn, image) VALUES ('$header_1', '$header_2', '$descr', '$btn', '$folder')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully.";
        header("Location: carousel.php");
        exit();
    } else {
        echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
