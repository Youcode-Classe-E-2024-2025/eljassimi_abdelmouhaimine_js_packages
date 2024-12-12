<?php

include('database.php');
 
    $packageId = $_GET['id']; 
    $packageName = $_POST['packageName'];
    $AuthorId = $_POST['AuthorName'];
    $version = $_POST['version'];
    $description = $_POST['description'];


    $query = "UPDATE `packages` SET `name` = '$packageName', `version` = '$version', `author_id` = '$AuthorId', `description` = '$description' WHERE `package_id` = '$packageId'";


    $result = mysqli_query($connection, $query);


    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    } else {

        header('location:index.php');
    }

?>
