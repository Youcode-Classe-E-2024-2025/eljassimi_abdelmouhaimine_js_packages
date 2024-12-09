
<?php 

include('database.php');


if (isset($_POST["addPackage"])){

$packageName = $_POST['packageName'];
$lname = $_POST['lastName'];
$age = $_POST['age'];


if ($fname == ''|| $lname == ''){
    header('location:index.php?message=You nedd to fill in the first name ');
}else{

    $query = "insert into `students` (`name`, `last_name`, `age`) values ('$packageName','$lname','$age')" ;
    $result = mysqli_query( $connection, $query);
    if (!$result){
        die("Query faild".mysqli_error());
    }
  }
}

if (isset($_POST["deleteSrudent"])){

    $fname = $_POST['firstName'];

    $query = "delete from `students where first_name = $fname`";
    $result = mysqli_query( $connection, $query);
    if (!$result){
        die("Query faild".mysqli_error());
    }

}



include("index.php");

?>