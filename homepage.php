<?php
include('connect.php');
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
   
   


    $insert_query=mysqli_query($conn,"insert into `contact_page` (name,email,phone,message) values('$name',' $email',' $phone',' $message')") or die("Insert querry failed");

    if($insert_query){
        $display_message= "Querry sent";
    }else{
        $display_message= "there is some error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-WAY BILL SYSTEM | E-WAY BILL</title>
    <link rel="stylesheet" href="style_homepage.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>

<body>

<?php  include('header3.php') ?>
    
   
    
    <div class="container">
 
    
    <?php
      if(isset($display_message)){
      echo "<div class='display_message'>
      <span>$display_message</span>
      <i class='fas fa-times' onclick='this.parentElement.style.display=`none`'; ></i>
      </div>";
      }
    ?>



    <nav id="navbar">
        <div id="logo">
            <img src="https://docs.ewaybillgst.gov.in/assets/img/logo/ind.png" alt="E-WayBill">
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">Laws</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
            <li class="item"><a href="#client-section">LINKS</a></li>
        </ul>
        <div id="logo">
            <img src="https://docs.ewaybillgst.gov.in/assets/img/logo/Gstlogo.png" alt="GST Logo"/>
        </div> 
        <div id="logo">
            <img src="https://docs.ewaybillgst.gov.in/assets/img/logo/nic-logo.png" alt="NIC Logo"/>
        </div>
    </nav>

    <section id="home">
        <h1 class="h-primary">E-WAY BILL SYSTEM</h1>
        <p>Streamline your logistics with our intuitive eBill system interface – simplifying electronic waybill generation and management. </p>
        <a href="index1.php"><button class="btn">BILL UPDATES</button></a>
        <a href="company.php"><button class="btn">Interested Companies</button></a>
    </section>
    <section id="services-container">
        <h1 class="h-primary center">LAWS</h1>
        <div id="services">
            <div class="box">
                <img src="../img/hand-drawn-sdg-infographic-infographic_23-2149433631.avif" alt="">
                <h2 class="h-secondary center">E-BILL RULES</h2>
                <p class="center"><a href="EWBRules.pdf">RULES</a></p>
            </div>
        </div>
    </section>
    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action=""method="post" class="submit">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="submit">Submit: </label>
                    <input type="submit" name="submit" id="submit" placeholder="Submit">
                </div>
            </form>
        </div>
    </section>
    <section id="client-section"> <h1 class="h-primary center">IMPORTANT LINKS</h1>
        <div id="clients">
            <div class="client-item">
                <li><a href="https://www.cbic.gov.in/" target="_blank" rel="noopener noreferrer">Central Board of Excise</a></li>
                <li><a href="https://www.gst.gov.in/" target="_blank" rel="noopener noreferrer">GST Common Portal</a></li>
            </div>
            <div class="client-item">
                <li><a href="http://www.nic.in/" target="_blank" rel="noopener noreferrer">National Informatics Centre</a></li>
                <li><a href="https://www.india.gov.in/" target="_blank" rel="noopener noreferrer">National Portal</a></li>
            </div>
          
            <div class="client-item">
                <li><a href="https://gstn.org.in/" target="_blank" rel="noopener noreferrer">Goods and Service Tax Network</a></li>
                <li>
                    <a href="Staticpages/OtherStateTaxSites.aspx">State Tax Websites</a></li>
            </div>
            <div class="client-item">
                <a href="Staticpages/WebsitePolicy.aspx">Website Policies </a></li>
                <li>
                    <a href="Staticpages/Help.aspx">Help</a></li>
            </div>
        </div>

    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.myE-bill.com. All rights reserved!
        </div>
    </footer>
</body>

</html>