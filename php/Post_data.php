<?php
    $User = $_POST['User_Name'];
    $Avail = $_POST['Avail'];
    $Expert = $_POST['Expert'];
    $date = date("Y/m/d");
    
    // echo $User;
    // echo "<br>";
    // echo $Avail;
    // echo "<br>";
    // echo $date;
    // Create connection
$conn = mysqli_connect('localhost', 'root','',"crud_operation");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// $db = mysqli_select_db(, $conn); // Selecting Database from Server



$query = $conn->query("INSERT INTO lawyer_discription (User_Name, Availablity, Date, Expertise_In)
VALUES ('$User', '$Avail','$date', '$Expert')");
$conn->close();
header("Location: http://localhost/Lawyer/Dashboard.php");
?>