<?php
include 'config.php';

if(isset($_GET['id'])){
    $product_id = $_GET['id'];
  
    // delete the record from database
    $sql = "DELETE FROM product WHERE 	product_id= '$product_id'";

    if (mysqli_query($conn, $sql)){
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: product.php");
    exit();
}
?>

