<?php
include 'config.php';

if(isset($_GET['id'])){
    $carousel_id = $_GET['id'];
  
    // delete the record from database
    $sql = "DELETE FROM carousel_section WHERE 	carousel_id= '$carousel_id'";

    if (mysqli_query($conn, $sql)){
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: carousel.php");
    exit();
}
?>

