<!-- This file is TO DISPLAY CANTEEN DATABASE-->
<!-- This file is TO DISPLAY CANTEEN DATABASE-->

<html>
    <head>
        <title>
            Display
        </title>
        <style>
            body {
                background-color : #DFF6FF;
            }
            h1 {
                text-align:center;
                margin: 3%;
            }
        </style>
    </head>



<?php
include("dp1.php");
error_reporting(0);
// echo "HI";
$query = "SELECT * FROM form1";
// echo "HI";
$data = mysqli_query($conn, $query);
// echo "HI";
$total = mysqli_num_rows($data);
// $result=mysqli_fetch_assoc($data);


// echo $result["name"];


if($total != 0)
{       
    ?>

    <h1>Displaying All Records</h1>
    <table border="3" style="text-align:center" cellspaccing="7" >
        <tr>  
        <th width="10%">Name</th> 
        <th width="20%">Email_ID</th> 
        <th width="10%">Contact-number</th> 
        <th width="20%">Address</th> 
        <th width="10%">Date and Time</th>
        </tr>
    
    <?php  
    while($result = mysqli_fetch_assoc($data))
    {
       echo "<tr>
                <td>".$result["name"]."</td> 
                <td>".$result["email"]."</td>
                <td>".$result["contact_number"]."</td> 
                <td>".$result["address"]."</td> 
                <td>".$result["date_time"]."</td>
            </tr>
            ";
        
    
    }
}
else
{     
        echo "NO records found";
}

?>
</table>
</html>
