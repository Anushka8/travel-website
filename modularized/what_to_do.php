<?php
	$path = "";
	$page = "What to do?";

	include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");
?>

<div class="main2">
      <div class="heading">What to do?</div>
      <div class="tiles">
        <div class="grid">
          <img src="assets/images/elephanta-caves.jpg">
          <h2><a href="historical_tours.php" style="font-size: 40px;">Historical Tours</a></h2>
          <button type="submit" value="submit" class="custom-button"><a href="historical_tours.php">Learn More &rarr;</a></button>
        </div>
        <div class="grid">
          <img src="assets/images/cultural_2.jpg">
          <h2><a href="cultural_tours.php" style="font-size: 40px;">Cultural Tours</a></h2>
          <button type="submit" value="submit" class="custom-button"><a href="cultural_tours.php">Learn More &rarr;</a></button>
        </div>
        <div class="grid">
          <img src="assets/images/cultural_3.jpg">
          <h2><a href="city_tours.php" style="font-size: 40px;">City <br>Tours</a></h2>
          <button type="submit" value="submit" class="custom-button"><a href="city_tours.php">Learn More &rarr;</a></button>
        </div>
      </div>
    </div>

<?php
	include($path . "assets/inc/footer.php");
?>
