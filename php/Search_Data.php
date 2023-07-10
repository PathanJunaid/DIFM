<?php
if(isset($_GET('Search')))
$value = $_POST['Search'];
$conn = new mysqli('localhost', 'root','','crud_operation');
// $sql = "SELECT * FROM lawyer_discription WHERE User_Name="$value%";
// $result = $conn->query($sql);
// echo $value;
?>