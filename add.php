<?php 

include('database.php');

if (isset($_POST["addPackage"])) {
    $packageName = $_POST['packageName'];
    $AuthorId = $_POST['AuthorName'];
    $version = $_POST['version'];
    $description = $_POST['description'];

         
        $query = "INSERT INTO `packages` (`name`, `version`, `author_id`, `description`)  VALUES ('$packageName', '$version', '$AuthorId', '$description')";
        $result = mysqli_query(mysql: $connection, query: $query);
        if (!$result) {
            die("Query failed: " . mysqli_error(mysql: $connection));
        } else {
            header(header: 'location:index.php');
        }

}




// function UpdateToDB($table, $obj, $where) {
//     global $connection;

//     // Extracting the keys and values from the associative array
//     $setClause = "";
//     foreach ($obj as $key => $value) {
//         $setClause .= "`$key` = '$value', ";
//     }

//     // Removing the last comma and space
//     $setClause = rtrim($setClause, ", ");

//     // Creating the SQL UPDATE query
//     $query = "UPDATE `$table` SET $setClause WHERE $where";

//     // Executing the query
//     $result = mysqli_query($connection, $query);

//     if (!$result) {
//         die("Query failed: " . mysqli_error($connection));
//     } else {
//         return true;  // Return true if update was successful
//     }
// }

// function DeleteFromDB($table, $where) {
//     global $connection;

//     // Creating the SQL DELETE query
//     $query = "DELETE FROM `$table` WHERE $where";

//     // Executing the query
//     $result = mysqli_query($connection, $query);

//     if (!$result) {
//         die("Query failed: " . mysqli_error($connection));
//     } else {
//         return true;  // Return true if deletion was successful
//     }
// }

// function InsertToDB($table, $obj) {
//     global $connection;

//     // Extracting the keys and values from the associative array
//     $columns = implode(", ", array_keys($obj));
//     $placeholders = implode(", ", array_fill(0, count($obj), "?")); // Use placeholders for values

//     // Create the query with placeholders
//     $query = "INSERT INTO `$table` ($columns) VALUES ($placeholders)";

//     // Prepare the statement
//     $stmt = mysqli_prepare($connection, $query);

//     if ($stmt === false) {
//         die("Failed to prepare statement: " . mysqli_error($connection));
//     }

//     // Dynamically bind parameters
//     $types = str_repeat("s", count($obj));  // Assuming all values are strings, change this for other types like 'i' for integers
//     $params = array_merge([$types], array_values($obj));
//     call_user_func_array('mysqli_stmt_bind_param', array_merge([$stmt], $params));

//     // Execute the prepared statement
//     if (mysqli_stmt_execute($stmt)) {
//         return true;
//     } else {
//         die("Query failed: " . mysqli_error($connection));
//     }
// }
