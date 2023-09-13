<?php
$id="";
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
if(isset($_POST['submit'])){
    $User = $_POST['User'];
    $Avail1 = $_POST['Avai'];
    $Expert1 = $_POST['Exper'];
    $conn = new mysqli("localhost",'root',"",'crud_operation');
    echo $id;
    $sql = "UPDATE lawyer_discription SET User_Name='$User' , Availablity='$Avail1' , Expertise_In='$Expert1' WHERE Customer_ID = $id";
    $conn->query($sql);
    $conn->close();
    header("Location: http://localhost/DIFM.github.io/Dashboard.php");
}
else{
    echo "not set";
}
   
?>