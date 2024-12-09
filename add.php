<?php 

include('database.php');

if (isset($_POST["addPackage"])) {
    $packageName = $_POST['packageName'];
    $AuthorName = $_POST['AuthorName'];
    $version = $_POST['version'];
    $description = $_POST['description'];


        $query = "INSERT INTO `packages` (`name`, `version`, `author_name`, `description`)  VALUES ('$packageName', '$version', '$AuthorName', '$description')";
        $result = mysqli_query(mysql: $connection, query: $query);
        if (!$result) {
            die("Query failed: " . mysqli_error(mysql: $connection));
        } else {
            header(header: 'location:index.php');
        }
        
}
?>
