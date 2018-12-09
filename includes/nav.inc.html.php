<nav>
    <div class="topnav">
    <div class="hamburgerBars" onclick="menuFunction()">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>

  <div id="myLinks">
        <a href="<?php echo BASE_URL; ?>">Home</a>
        <a href="<?php echo BASE_URL; ?>events">Events</a>
        <a href="<?php echo BASE_URL; ?>faq">FAQ</a>
        <a href="<?php echo BASE_URL; ?>register">Register</a>
		<a href="<?php echo BASE_URL; ?>contact">Contact</a>
  </div>
</div>
   
    <ul id="menu"> 
        <li><a href="<?php echo BASE_URL; ?>contact">Contact</a></li>
        <li><a href="<?php echo BASE_URL; ?>register">Register</a></li>
    </ul>
    <div class="dropdown">
        <button class="dropbtn">Event Info</button>
        <div class="dropdown-content">
            <a href="<?php echo BASE_URL; ?>events">Events</a>
            <a href="<?php echo BASE_URL; ?>faq">FAQ</a>
        </div>
    </div>
    <ul id="menu">
        <li><a href="<?php echo BASE_URL; ?>">Home</a></li>
    </ul>
</nav>