<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Confirmation</title>
    
    <meta name="description" content="Successfully contacted Ace in the Hole">

    <meta charset="utf-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href='../css/style.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
    <body>
        <?php include '../includes/header.inc.html.php'; ?>
        
    <main>
        <div id="form_success">
                <h1>Thank you!</h1>
                <p>Your registration has been successfully submitted<br>
                    Saturday Event: <?php echo htmlspecialchars($saturdayEvent, ENT_QUOTES, 'UTF-8'); ?> <br>
                    Sunday Event: <?php echo htmlspecialchars($sundayEvent, ENT_QUOTES, 'UTF-8'); ?> <br>
                    Volunteer: <?php echo htmlspecialchars($myvolunteer, ENT_QUOTES, 'UTF-8'); ?> <br>
                    First Name: <?php echo htmlspecialchars($myfname, ENT_QUOTES, 'UTF-8'); ?> <br>
                    Last Name: <?php echo htmlspecialchars($mylname, ENT_QUOTES, 'UTF-8'); ?> <br>
                    Email: <?php echo htmlspecialchars($myemail, ENT_QUOTES, 'UTF-8'); ?> <br>
                    Gender Identity: <?php echo htmlspecialchars($mygender, ENT_QUOTES, 'UTF-8'); ?> <br>
                    Age: <?php echo htmlspecialchars($myage, ENT_QUOTES, 'UTF-8'); ?> <br>
                    Emergency Contact Name: <?php echo htmlspecialchars($myemergencyname, ENT_QUOTES, 'UTF-8'); ?> <br>
                    Emergency Contact Phone Number: <?php echo htmlspecialchars($myemergencyphone, ENT_QUOTES, 'UTF-8'); ?> <br>
                    Special Accomodations: <?php echo htmlspecialchars($mycomments, ENT_QUOTES, 'UTF-8'); ?> <br>
                </p>
        </div>
    </main>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../scripts/script.js"></script>
        <?php include '../includes/footer.inc.html.php'; ?>
    </body>
</html>