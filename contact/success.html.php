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
                <p>Our records show you submitted the following:<br>
                    Name: <?php echo htmlspecialchars($myname, ENT_QUOTES, 'UTF-8'); ?> <br>
                    Email: <?php echo htmlspecialchars($myemail, ENT_QUOTES, 'UTF-8'); ?> <br>
                    Message: <?php echo htmlspecialchars($mymessage, ENT_QUOTES, 'UTF-8'); ?> <br>
                </p>
        </div>
    </main>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../scripts/script.js"></script>
        <?php include '../includes/footer.inc.html.php'; ?>
    </body>
</html>