<?php
	$path = "";
	$page = "Parks";

	include($path . "assets/inc/header.php");
?>
<div class="parks">
    <?php
        include($path . "assets/inc/nav.php");
    ?>
    <div class="landing">
        <h1>PARKS</h1> 
    </div>
</div>
<div class="hist-tab-content">
      <div class="first">
        <h2>Sanjay Gandhi National Park</h2>
        <h3>Borivali, Mumbai</h3>
        <h3>The park is also known as Borivali National Park since it is located in Borivali, a suburb of Mumbai. The famous Kanheri Caves are located within the park.</h3>
        <h3>&#9733;&#9733;&#9733;&#9733;&#9734;</h3>
        <button type="submit" value="submit" class="custom-button"><a href="https://sgnp.maharashtra.gov.in/Site/Home/Index.aspx">Book Now</a></button>
      </div>
      <div class="first-img"><img src="assets/images/park_1.jpg" alt="sgnp"></div>

      <div class="second">
        <h2>Hanging Gardens</h2>
        <h3>Mumbai</h3>
        <h3>The Hanging Gardens, in Mumbai, also known as Pherozeshah Mehta Gardens, are terraced gardens perched at the top of Malabar Hill, on its western side, just opposite the Kamala Nehru Park.</h3>
        <h3>&#9733;&#9733;&#9733;&#9734;&#9734;</h3>
        <button type="submit" value="submit" class="custom-button"><a href="https://en.wikipedia.org/wiki/Hanging_Gardens_of_Mumbai">Book Now</a></button>
      </div>
      <div class="second-img"><img src="assets/images/park_2.jpg" alt="hanging-garden"></div>
    </div>

<?php
	include($path . "assets/inc/footer.php");
?>
