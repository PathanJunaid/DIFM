<?php
$conn = new mysqli("localhost",'root',"",'crud_operation');
// $User="";
// $avail="";
// $Date="";
// $Expert="";

$sql = "SELECT * FROM lawyer_discription";
$result = $conn->query($sql);
$i=0;
if($result->num_rows >0){
    while($row = $result->fetch_assoc()){
        $ID = $row['Customer_ID'];
        $User=$row['User_Name'];
        $Avail = $row['Availablity'];
        $Date= $row['Date'];
        $Expert = $row['Expertise_In'];
        $i=$i+1;
        // Creating tr for table in webpage
        echo "
        
            <tr class='Data1' onmouseover='mouseover_tr($i)' onmouseleave='mouseleave_tr($i)'>
                    <td><input type='text' name='User_N' value='$User' class=' border-0 w-100 h-100 bg-color-white hover-color' disabled></td>
                    <td><input type='text' name='Avai' value='$Avail' class=' border-0 bg-color-white hover-color' disabled></td>
                    <td><input type='text'  value='$Date' class=' border-0 bg-color-white hover-color' disabled></td>
                    <td><input type='text' name='Exper' value='$Expert' class=' border-0 bg-color-white hover-color' disabled></td>
                
                    <td class='d-flex justify-content-between'>
                    <button type='submit' name='submit' value='Update' form = 'Update_$ID'
                                            class='confirm border border-0 bg-color-white'
                                            id='confirm_$ID'>
                        <img src='Images/Group 17.png' class='img-fluid hover-cursor' onclick='Submit($i,$ID)'>
                        </button>
                        <img src='Images/Group 3.png' class='img-fluid hover-cursor' onclick='View(Data_$ID)'>
                    
                        <img src='Images/edit-2.png' class='img-fluid hover-cursor' onclick='Edit($i)'>
                    
                        <form method='post' action='php/Trash.php'>
                            <button type='submit' value='$ID' name='Del' class='border border-0 bg-color-white'>
                                <img src='Images/trash.png' class='img-fluid hover-cursor'>
                            </button>
                        </form>
                    </td>
            </tr>";
    }
}
else{
    echo "No Data";
}

?>

<!-- <input type='Submit' name='Del' Value='$ID'> -->