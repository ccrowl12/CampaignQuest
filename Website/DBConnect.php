<?php

/* Please note that all the code in the APIs is implemented for MySQL.  Should
 * a different database be adopted, the code in the few APIS need to be slightly
 * modified.
 *
 * Another option is to use PHP's database object PDO instead of mysqli.  Then
 * if a new database is adopted, only the method for connecting to the DB will
 * have a slightly different connection string, and the rest of the code can be
 * carried out.
 /

//connection string
$servername = "localhost";
$username = "mahadev";
$password = "mahadev";
$dbname = "campaignquestcomments";
$conn;

// APIs
function openDB() {
  global $servername, $username, $password, $dbname, $conn;

// Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error)
    return $conn->connect_error;
  else
    return "Connected";

// Alternative code using PDO object. Need similar changes to other API as well.
/
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return "Connected";
  } catch (PDOException $e) {
    return $e->getMessage();
  }
*/


function closeDB() {
  global $conn;
  //$conn->close();
}

// API to modify DB
function modifyDB($sql) {
  global $conn;
  $message = openDB();
  if ($message == "Connected") {
    if ($conn->query($sql) === TRUE)
      $message = "Update Successful";
    else
      $message = $conn->error;
    closeDB();
  }
  return $message . "<br>";
}

// API to query DB
function queryDB($sql) { // returns an object or a string
  global $conn;
  $message = openDB();
  if ($message == "Connected") {
    $result = $conn->query($sql);
    if (gettype($result) == "object")
      $message = $result;
    else
      $message = $conn->error . "<br>Your SQL:" . $sql;
    closeDB();
  }
  return $message;
}

?>