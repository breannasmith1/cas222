<!DOCTYPE html>
<html lang="en">
	
<head>
  <title>Home</title>
	
  <meta name="description" content="Ace in the Hole Multisport Events">
	
  <meta charset="utf-8">
	
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <link href='css/style.css' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
	
<body>
    <div id="fb-root"></div>
    
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
            fjs.parentNode.insertBefore(js, fjs);
        }
         (document, 'script', 'facebook-jssdk'));
    </script>
    
    <div class="mobile-container">
        
	<?php include 'includes/header.inc.html.php'; ?>
        
    <main>
        <article id="homePage1">
            
            <img src="<?php echo BASE_URL; ?>images/runners.jpg" id="runners_mobile" alt="Runners">
            
            <section id="slideshow">

              <div class="mySlides fade">
                <img src="images/runners.jpg">
              </div>

              <div class="mySlides fade">
                <img src="images/paracycle.jpg">
              </div>

              <div class="mySlides fade">
                <img src="images/friends.jpg">
              </div>
            </section>
            
                <div id="aboutUs">
                   <h2>About Us</h2>
               <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer Events for Every Body.</p>
                    <a href="<?php echo BASE_URL; ?>register"><img src="images/register.png" alt="Register button" id="registerButton"></a>
            </div>
        </article>
        
        <article id="article2">
            <section id="section1">                
                   
                   <h2>About The Event</h2>

                <p>The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation. </p>

                <p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>
                   
                 <p><a href="<?php echo BASE_URL; ?>events">Click here to learn more about the events.</a></p>
            </section>
            
        <section id="section2">
            <h2>Event Times</h2>
            <h3>Saturday</h3>
            <ul>
                <li>Long Course Triathlon - 7:00 AM</li>
                <li>Olympic Triathlon - 7:30 AM</li>
                <li>10K - 7:15 AM</li>
                <li>Half Marathon - 7:15 AM</li>
            </ul>
            <h3>Sunday</h3>
            <ul>
                <li>Sprint Triathlon - 8:00 AM</li>
                <li>Try-a-Tri - 8:20 AM</li>
                <li>Splash n' Dash - 12:00 PM</li>
            </ul>
            </section>
        </article>
        
        
        <article id="article3">
            <h2>Follow us on Social Media</h2>
            <section id="social_media_feeds">
                
                <div class="fb-page" data-href="https://www.facebook.com/cas222cascade/" data-tabs="timeline" data-width="500" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cas222cascade/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cas222cascade/">CAS 222</a></blockquote></div>
            
              <a class="twitter-timeline" data-width="500" data-height="300" data-link-color="#ff0000" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </section>
            
            <img src="images/runner_road.jpg" id="runner_road" alt="Man running on road">

        </article>
    </main>
	  
    <?php include 'includes/footer.inc.html.php'; ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="scripts/script.js"></script>
        <script src="scripts/jquery.js"></script>
    </div>
    </body>
</html>