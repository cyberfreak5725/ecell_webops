<?php
$servername = "localhost";
$username = "root";
$password = "Anukul@12";
$dbname = "anuk";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $email = $depart= $phone= $year= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $name = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $email = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["depart"])) {
    $depart= "";
  } else {
    $depart= test_input($_POST["depart"]);
  }
 if (empty($_POST["phone"])) {
    $phone= "";
  } else {
    $phone= test_input($_POST["phone"]);
if (empty($_POST["year"])) {
    $year= "";
  } else {
    $year= test_input($_POST["year"]);
  }
}
$sql = "INSERT INTO form (phone, name, email, depart, year) VALUES ('$phone','$name','$email','$depart','$year')";
echo "congrats";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

mysqli_close($conn);
?>

