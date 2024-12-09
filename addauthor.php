<?php 

include('database.php');

if (isset($_POST["addAuthor"])) {
     $authorName = $_POST['authorName'];
     $authorEmail = $_POST['authorEmail'];


        $query = "INSERT INTO `authors` (`author_name`, `email`)  VALUES ('$authorName', '$authorEmail')";
        $result = mysqli_query(mysql: $connection, query: $query);
        if (!$result) {
            die("Query failed: " . mysqli_error(mysql: $connection));
        } else {
            header(header: 'location:author.php');
        }
        
}
?>
