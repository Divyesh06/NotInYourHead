<?php  
// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "not_in_your_head";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn)
{
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST["email"];

    // Sql query to be executed

    $sql = "INSERT INTO `email` VALUES ('$email')";
    $result = mysqli_query($conn, $sql);
    if($result){ 
        header("Location: Index.html#success");
    }
    else{
        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    }
    
    }
}  
?>

  