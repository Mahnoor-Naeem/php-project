<?php require 'config.php';

    $id = $_GET['id'];
    $query = "DELETE FROM category WHERE category_id = $id";
    $result = mysqli_query($con, $query);

    header('location: all_category.php');
?>