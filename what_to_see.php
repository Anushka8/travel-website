<?php
	$path = "";
	$page = "What to see?";

	include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");
?>

<div class="main2">
      <div class="heading">What to see?</div>
      <div class="tiles">
        <div class="grid">
          <img src="assets/images/homepage_2.jpg">
          <h2><a href="top_attractions.html">Top <br> Attractions</a></h2>
          <button type="submit" value="submit" class="custom-button"><a href="top_attractions.html">Learn More &rarr;</a></button>
        </div>
        <div class="grid">
          <img src="assets/images/homepage_2.jpg">
          <h2><a href="park.html">Parks & <br>Gardens</a></h2>
          <button type="submit" value="submit" class="custom-button"><a href="park.html">Learn More &rarr;</a></button>
        </div>
        <div class="grid">
          <img src="assets/images/homepage_2.jpg">
          <h2><a href="architecture_sites.html">Architectural <br> Sites</a></h2>
          <button type="submit" value="submit" class="custom-button"><a href="architecture_sites.html">Learn More &rarr;</a></button>
        </div>
      </div>
    </div>

<?php
	include($path . "assets/inc/footer.php");
?>