<nav>
    <div class="topnav">
    <div class="hamburgerBars" onclick="menuFunction()">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>

  <div id="myLinks">
      <a href="<?php echo BASE_URL; ?>index.html.php">Home</a> 
      <a href="<?php echo BASE_URL; ?>events.php">Events</a>
      <a href="<?php echo BASE_URL; ?>contact.php">FAQ</a>
      <a href="<?php echo BASE_URL; ?>register.php">Register</a>
      <a href="<?php echo BASE_URL; ?>contact.php">Contact</a>
  </div>
</div>
             
    <ul id="menu">
    
   <li><a href="<?php echo BASE_URL; ?>index.html.php">Home</a></li> 
      <div class="dropdown">
        <button class="dropbtn" onclick="myFunction()">Event Info
        </button>
        <div class="dropdown-content" id="myDropdown">
            <li><a href="<?php echo BASE_URL; ?>events.php">Events</a></li>
            <li> <a href="<?php echo BASE_URL; ?>contact.php">FAQ</a></li>
        </div>
    </div> 
    <li><a href="<?php echo BASE_URL; ?>register.php">Register</a></li>
    <li><a href="<?php echo BASE_URL; ?>contact.php">Contact</a></li>
            </ul>
</nav>