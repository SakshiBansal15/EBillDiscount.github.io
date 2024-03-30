<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
<?php  include('header.php') ?> 
<div class="container">
<h2>Updated Electricity Bills</h2>
    <section class="display_bill">
        <table>
        <?php
            $display_bill=mysqli_query($conn,"select * from `ebill`");
             
            $num=1;
            if(mysqli_num_rows( $display_bill)>0){

                echo "  <table>
                <thead>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>HouseNo</th>
                    <th>Previous</th>
                    <th>Current</th>
                    <th>Bill</th>
                    <th>ID</th>
                    <th>Points</th>
                </thead>
                <tbody>";
                while( $row=mysqli_fetch_assoc($display_bill)) {
                    $Name=$row['name'];
                    $HouseNo=$row['address'];
                    $Previous=$row['previous'];
                    $Current=$row['current'];
                    $Bill=$row['current']*10;
                    $ID=$row['id'];
                    $Points=$row['points'];
                    $units=$Previous-$Current;
                  if($units>=0){
                    ?>


                   <?php
                   $up_id=$ID;
                   $up_points=0;
                   $up_bill=$Bill-$Bill*($Points/100);
                   $select_house=mysqli_query($conn,"Select * from `ebill` where id=$up_id")or die('query failed');
                   $row_count=mysqli_num_rows($select_house);
                //    $update_quantity_query=mysqli_query($conn,"update `ebill` set `bill`= $up_bill where `id`= $up_id");
                   $up_points=0;
                //    $update_quantity_query=mysqli_query($conn,"update `ebill` set `points`= $up_points where `id`= $up_id");
                   $Bill=$up_bill;
                  ?>
                    

                    <tr>
                    <td><?php echo $num ?></td>
                    <td><?php echo $Name ?></td>
                    <td><?php echo $HouseNo ?></td>
                    <td><?php echo $Previous ?></td>
                    <td><?php echo $Current ?></td>
                    <td><?php echo $Bill ?></td>
                    <td><?php echo $ID ?></td>
                    <td><?php echo $Points ?></td>
                    </tr>
            
<?php

 $num++;
   };}
}else{
    echo "<div class='empty_text'> No products Available </div>";
}

?>
   
</tbody>
</table>



</body>
</html>