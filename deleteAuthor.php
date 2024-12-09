<?php 

include('database.php');
  $id  = $_GET["id"];
        $query = "DELETE FROM `authors` WHERE `author_id` = $id";
        $result = mysqli_query(mysql: $connection, query: $query);
        if (!$result) {
            die("Query failed: " . mysqli_error(mysql: $connection));
        } else {
            header(header: 'location:author.php');
        }

?>
