<?php
include('connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop now</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Roboto:ital@1&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="design.css">
</head>
<body>
   <?php include('header2.php')?>
   <div class="container2">
    <section class="products">
        <h1 class="heading">Products Provided By Differnt Companies</h1>
        <div class="product_container">
        
        <?php
        $select_products=mysqli_query($conn,"Select * from `company`");
        if(mysqli_num_rows($select_products)>0){
           while( $fetch_product=mysqli_fetch_assoc( $select_products)){
            ?>
            
            <form action="" method="post">
            <div class="edit_form">
                <img src="<?php echo $fetch_product['image']?>" alt="">
                <h3><?php echo $fetch_product['company_name']?></h3>
                <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                </div>
                <div class="price">Industry: <?php echo $fetch_product['industry']?>/-</div>
                <div class="price">Industry: <?php echo $fetch_product['headquarters']?>/-</div>
               
            </div>
            </form>
        <?php
           }
            
        }
        else{
            echo "<div class='empty_text'> No products Available </div>";
        }
        ?>
                   
        </div>
    </section>

   </div>

</body>
</html>