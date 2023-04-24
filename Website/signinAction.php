<?php
require "DBConnect.php";

$user = $_POST["user"];
$pwd = $_POST["pwd"];

$user = stripcslashes($user);
$pwd = stripcslashes($pwd);
//$user = mysqli_real_escape_string($conn, $user);
//$pwd = mysqli_real_escape_string($conn, $pwd);

$sql = "select username, password, firstname, lastname, state from register where username = '".$user.
        "' and password = '".$pwd."'";
$result = queryDB($sql);
if (gettype($result) == "object") {
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
     
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $username = $row['Username'];
    $registerID = $row['state'];
    
    session_start();
    $_SESSION['id'] = " ". $firstname." ".$lastname." Username: ".$user." Package Plan: ".$registerID;
    
    header("Location:welcome.php");
    exit;
  } else
    echo "Login Failed";
} else
  echo $result . "<br>";
?>