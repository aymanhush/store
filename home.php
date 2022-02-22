 <?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {   

?>
<!DOCTYPE html>
<html>
    
    <head>
        
         <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Burger - Create Your Own Burger </title>
        <link rel="stylesheet" href="Final-Project-WebDesign-main/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    </head>
    <body>
        <div class="container">
            <div class="banner" id="home">
                <div class="navbar">
                 <img src="Final-Project-WebDesign-main/logo.png" class="logo">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#contactus">Contact Us</a></li>
                     
                        
                        <li style="color:white; cursor:pointer;"><?php echo $_SESSION['user_name']; ?></li>
                        <a href="logout.php">Logout</a>
                 </ul>
             </div>
             
            </div>
            </div>
        </div>
        
           
       <section class="cli">
        <div class="container-1 grid">
            <div class="images">
                <img src="Final-Project-WebDesign-main/image1.jpg">
            </div>
            <div class="creations">
                <h2>Make Your Burger</h2>
                <p>Get creative with how you want to make your burger</p>
                <div class="btns">
                <a href="Final-Project-WebDesign-main/order.html"><button type="button">Order Now</button></a>
                </div>
            </div>
        </div>
</section>
<section class="contactus" id="contactus">
            <div class="container-2">
        <h1>Contact Us</h1>
        <hr>
        <h2>Have any suggestions? We'd love to hear from you.</h2>
        <div class="contact-items">
            <div class="customer-care">
                <h3>Customer Service</h3>
                <p>Our team is always available to give you fast response</p>
                <a href="Final-Project-WebDesign-main/service.html"><button id="cust-care"> Submit a Request</button></a>
                
            </div>
            <div class="write-us">
                <h3>Feedback</h3>
                <p> You can give us your feedback because we'd love to improve</p>
               <a href="Final-Project-WebDesign-main/rating.html"> <button id="write">Give feedback</button></a>
          
            </div>
           
        </div>
    </div>
        
</section>
        
        <footer class="footer">
        <div class="container grid">
            <div>
                <img src="Final-Project-WebDesign-main/logo-black.png" class="footer-logo">
                <p>Copyright &copy; 2021</p>
            </div>
            <address>17 Dowling Road, Albany,ny, 12205  United States
            <br><strong>912-496-9603</strong></address>
            <div class="social">
                
                <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
            </div>
        </div>
    </footer>
        
    </body>

</html>
<?php 
}
else{
     header("Location: index.php");
     exit();
}
 ?>