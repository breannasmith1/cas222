<!DOCTYPE html>
<html lang="en">
	
<head>
  <title>Contact Us</title>
	
  <meta name="description" content="Ace in the Hole Multisport Events Contact">
	
  <meta charset="utf-8">
	
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='../css/style.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
	
<body>
	<?php include '../includes/header.inc.html.php'; ?>
	  
    <main>
        
        <div id="contactPage">
            <img src="../images/bike_rural.jpg" alt="Bike Trail" id="contactPhoto">
            
            <div id="contactForm">
                <h2>Questions? Comments? <br>We'd love to hear from you!</h2>

                  <form method="post" action=" ">
                    <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
                       <div id="formPadding">
                        <label for="myname">*Name:</label>
                          <input type="text" name="myname" id="myname" required>
                      </div>
                      
                       <div id="formPadding">
                        <label for="myemail">*Email:</label>
                          <input type="email" name="myemail" id="myemail" required>
                      </div>
                      <div id="formPadding">
                    <label for="mymessage">*Message:</label> <br>
                      <textarea name="mymessage" id="mymessage" rows="2" cols="20" required></textarea>
                      </div>
                      <input id="mysubmit" type="submit" value="Submit">
                  </form>
            </div>
        </div>
    </main>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../scripts/script.js"></script>
    
        <?php include '../includes/footer.inc.html.php'; ?>
	</body>
</html>