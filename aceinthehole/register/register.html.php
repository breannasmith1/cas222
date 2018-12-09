<!DOCTYPE html>
<html lang="en">
	
<head>
    <title>Register</title>
	
    <meta name="description" content="Ace in the Hole Multisport Events Register">
	
    <meta charset="utf-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href='../css/style.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
	
<body>
	<?php include '../includes/header.inc.html.php'; ?>
	  
    <main>
		<article id="registerNow">
      <h2>Register for an event</h2>
		
      <div id="source">Required fields are marked with an asterisk (*).</div>
		  
      <form method="post" action=" ">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>

        <section class="register1">
            <div id="chooseEvent">
                <label for="saturdayEvent">Saturday:</label>
                    <select name="saturdayEvent" id="saturdayEvent">
                        <option>Choose your Saturday Event</option>
                        <option value="No Event">No Saturday Event</option>
                        <option value="Long Course">Long Course Triathlon - $240</option>
                        <option value="Olympic">Olympic Triathlon - $110</option>
                        <option value="Ten K">10k - $50</option>
                        <option value="Half Marathon">Half Marathon - $75</option>
                    </select>
                </div>

            <div id="chooseEvent">
                <label for="sundayEvent">Sunday:</label>
                    <select name="sundayEvent" id="sundayEvent">
                        <option>Choose your Sunday event</option>
                        <option value="No Event">No Sunday Event</option>
                        <option value="Sprint">Sprint - $90</option>
                        <option value="Try a Tri">Try-A-Tri - $65</option>
                        <option value="Splash n Dash">Splash N' Dash</option>
                    </select>
            </div>
            
            <div id="chooseEvent">
                <label for="myvolunteer">Would you like to volunteer?</label>
                <select size="1" name="myvolunteer" id="myvolunteer">
                    <option value="No">Not this time</option>
                    <option value="volunteer Saturday">Volunteer Saturday</option>
                    <option value="volunteer Sunday">Volunteer Sunday</option>
                    <option value="volunteer both">Volunteer Both Days</option>
                </select>
            </div>
        </section>
         
        <section class="register2">
            <div id="formPadding">
                <label for="myfname">*First Name:</label>
                  <input type="text" name="myfname" id="myfname" required>
            </div>
            
            <div id="formPadding">
                <label for="mylname">*Last Name:</label>
                  <input type="text" name="mylname" id="mylname" required>
            </div>
    
            <div id="formPadding">
                <label for="myemail">*Email:</label>
                  <input type="email" name="myemail" id="myemail" required>
            </div>
            
            <div id="formPadding">
                <label for="mybirthday">*Age:</label>
                  <input type="text" name="myage" id="myage" required>
            </div>
            
            <div id="formPadding">
                <label for="mygender">Gender Identification:</label>
                  <select size="1" name="mygender" id="mygender">
                      <option>Choose your gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="preferNotTo">Non-Binary</option>
                  </select>
            </div>
        </section>
          
        <section class="register3">
            <div id="formPadding">
                <h3>Please provide your Emergency Contact's information</h3>
                <label for="myemergencyname">*Name:</label>
                    <input type="text" name="myemergencyname" id="myemergencyname" required>
            </div>
            
            <div id="formPadding">
                <label for="myemergencyphone">*Phone Number:</label>
                  <input type="text" name="myemergencyphone" id="myemergencyphone" required>
            </div>
          </section>
    
        <section class="register4">
            <label for="mycomments">Do you need any special accomodations?</label>
                <textarea name="mycomments" id="mycomments" rows="2" cols="20"></textarea>
          
          <input id="mysubmit" type="submit" value="Submit">
          </section>
            </form>
        </article>
    </main>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../scripts/script.js"></script>
	  
    <?php include '../includes/footer.inc.html.php'; ?>
	</body>
</html>