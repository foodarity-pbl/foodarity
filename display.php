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
        <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    </head>



<?php
include("dp.php");
error_reporting(0);
// echo "HI";
$query = "SELECT * FROM form";
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
        <th width="10%">Quantity of Roti</th>
        <th width="10%">Quantity of Rice</th> 
        <th width="10%">Quantity of Curry/Bhaji</th>
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
                <td>".$result["roti"]."</td> 
                <td>".$result["rice"]."</td>
                <td>".$result["curry"]."</td> 
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
