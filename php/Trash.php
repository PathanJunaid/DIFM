<?php
$ID = $_POST['Del'];
    $conn = new mysqli("localhost",'root',"",'crud_operation');
    $sql = "DELETE FROM lawyer_discription WHERE `Customer_ID`=$ID";
    $conn->query($sql);
    $conn->close();
    header("Location: http://localhost/DIFM.github.io/Dashboard.php");
?>