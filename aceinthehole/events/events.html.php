<!DOCTYPE html>
<html lang="en">
	
<head>
    <title>Events</title>
    
    <meta name="description" content="Ace in the Hole Multisport Events">

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href='../css/style.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
	
<body>
	<?php include '../includes/header.inc.html.php'; ?>
	  
    <main>
        <article id="article1">
            <img src="<?php echo BASE_URL; ?>images/race.jpg" id="race" alt="Man finishing race">
            
        <section id="detailSection">
            <h2>Course Details</h2>
            <p>Watch the weather closely. The show goes on no matter what the weather is doing. Water temperature is expected to be between 62-66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.</p>
            
            <p id="red_bold">Click each course to learn more about them!</p>
            <div class="course">Long Course Triathlon - $240</div>
                <p id="details">Swim: 1.2mi - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.<br><br>
                    
                    Bike: 58 Miles - A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you.<br><br>
                    
                    Run: 13.1mi - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</p>
            
            <div class="course">Olympic Triathlon - $110</div>
                <p id="details">Swim: 1,500 meters - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.<br><br>
                    
                    Bike: 28mi - A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections.<br><br>
                    
                    Run: 10K - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).
                    </p>
            
            <div class="course">Sprint - $90</div>
                <p id="details">Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.</p>
            <div class="course">Try-A-Tri - $65</div>
                <p id="details">This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</p>
            <div class="course">Half Marathon Course - $75</div>
                <p id="details">Half-Marathon (13.1-miles): Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports and Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified.</p>
            <div class="course">10k Course - $50</div>
                <p id="details">The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</p>
            <div class="course">Splash n' Dash</div>
            <p id="details">The Splash n' Dash is an event for kids ages 8-14. It is a 100 yard swim and a 50 meter dash. It is free if an adult registers and $25 if they don't.</p>
            </section>
        </article>
        
        <article id="article2">
            <section id="section1">
                    
            <h2>What's included?</h2>
                <ul id="includes">
                <li>Food and Beer</li>
                <li>Access to the weekend's live entertainment and Fitness Expo</li>
                <li>Commemorative Finisher medal</li>
                <li>Accurate Chip Timing for competitive races</li>
                <li>Ace in the Hole Multisport Weekend Tech Shirt</li>
                <li>Post-event party and entertainment</li></ul>
                
                <p id="red_bold">NOTE:</p><p>Tech shirts guaranteed to pre-registered participants only.</p>
            </section>
            
            <section id="packetInfo">
                <h2>Packet Pick Up</h2>
                <p>All packet pick up will occur at <br><br>Why Worry Racing<br>123 NW Everett<br>Portland OR</p>
                <p>Pick up hours:</p>
                    <ul id="pickUp">
                        <li>Thursday 8-5</li>
                        <li>Friday 9-noon</li>
                    </ul>
                
                <p id="red_bold">No day of event packet pick up.</p>
               
            </section>
        </article>
        
        <article id="weatherFeed">
            <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="original" data-basecolor="#ffffff" data-accent="" data-textcolor="#696969" data-highcolor="#c30000" data-lowcolor="#1c68d3" data-mooncolor="#C0C0C0" >PORTLAND WEATHER</a>
                <script>
                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
        </article>
    </main>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../scripts/script.js"></script>
        <script src="../scripts/jquery.js"></script>
	  
    <?php include '../includes/footer.inc.html.php'; ?>
	</body>
</html>