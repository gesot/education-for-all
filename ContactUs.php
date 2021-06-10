<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Education For All- Information</title>
		<link rel="stylesheet" href="index.css">
		<link rel="stylesheet" href="contact.css">
		
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
		<?php include('nav/navbar.php');?>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.min.js"></script>
		<script src="contactus-validation.js"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	</head>
    <body style="background-color: #fff">
  

<!--START OF CONTACT SECTION-->

	<div class="contact-section">
    <div class="contact-wrap">
		<h1>Contact Us</h1>
		<form class="contact-form" method="post" action="sqli-connect/contactus.php">
			<input type="text" class="contact-form-text" placeholder="Your name" name="name">
			<input type="email" class="contact-form-text" placeholder="Your email" name="email">
			<input type="text" class="contact-form-text" placeholder="Your phone(optional)" name="phonenumber">
			<textarea class="contact-form-text" placeholder="Your message" name="message"></textarea>
			<button class="btn" type="submit">Submit<input type="submit"></button>
		</form>
		<?php 
               if(isset($_SESSION['messageSent'])){
                if($_SESSION['messageSent'] == true){
                 echo "<script> Swal.fire({
									title: 'Message Sent!',
									text: 'Do you want to continue',
									icon: 'success',
									confirmButtonText: 'yes'
								})  </script>";
                  $_SESSION['messageSent'] = false;
                }                    
               }                
             ?>
   </div>

	</div>
<!--END OF CONTACT SECTION-->

		<!---START OF FOOTER-->
		
		<footer>
    <?php include('nav/footer.php');?>
    </footer>
            
            <!--END OF FOOTER-->
            
            
            <!--START OF <TOP> BUTTON-->
            <a href="#"><i class="gotopbtn" href="#"><i class="fa fa-arrow-circle-up"></i></i></a>
            <!--END OF TOP BUTTON-->
     </body>
</html>
