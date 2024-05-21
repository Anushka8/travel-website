<?php
	$path = "";
	$page = "Mumbai";

	include($path . "assets/inc/header.php");
?>
<div class="container">
    <?php
        include($path . "assets/inc/nav.php");
    ?>
    <!-- landing page with image as a background and a heading with a button -->
    <div class="landing">
        <h3>DISCOVER THE CITY OF DREAMS</h3>
        <h1>MUMBAI</h1> 
        <h3>Mumbai is India's bustling financial hub and home to Bollywood, known for its dynamic blend of rich culture, historic landmarks, and modern skyline.</h3>
        <!-- inline cstyle for button on landing since it uses properties from class custim-button and has extra margin changes -->
        <button onclick="on()" type="submit" value="submit" class="custom-button" style="margin:10px 0px 0px 0px;">Open in Maps</button>
      </div>
</div>

      <!-- pop up for mumbai map -->
      <div id="overlay" onclick="off()">
        <div id="text"><a href="https://www.google.com/maps/place/Mumbai,+Maharashtra,+India/@19.0821775,72.7163741,11z/data=!3m1!4b1!4m6!3m5!1s0x3be7c6306644edc1:0x5da4ed8f8d648c69!8m2!3d19.0759837!4d72.8776559!16zL20vMDR2bXA?entry=ttu">
          <img src="assets/images/mumbai_map.png" alt="mumbai-map"></a></div>
      </div>
    </div>
    <!-- Four tiles to navigate throughout the website -->
    <div class="navigate">
      <div class="tiles">
        <div class="grid">
          <img src="assets/images/homepage_stay.jpg" alt="homepage-stay">
          <h2><a href="where_to_stay.html">Where to Stay?</a></h2>
          <ul>
            <li><a href="where_to_stay.html">Hotels</a></li>
            <li><a href="where_to_stay.html">Airbnb</a></li>
            <li><a href="where_to_stay.html">Home Stay</a></li>
          </ul>
          <button type="submit" value="submit" class="custom-button"><a href="where_to_stay.html">Learn More &rarr;</a></button>
        </div>
        <div class="grid">
          <img src="assets/images/food.webp" alt="homepage-food">
          <h2><a href="where_to_eat.html">What to Eat?</a></h2>
          <ul>
            <li><a href="where_to_eat.html">Vegan</a></li>
            <li><a href="where_to_eat.html">Non-vegetarian</a></li>
            <li><a href="where_to_eat.html">Street Food</a></li>
          </ul>
          <button type="submit" value="submit" class="custom-button"><a href="where_to_eat.html">Learn More &rarr;</a></button>
        </div>
        <div class="grid">
          <img src="assets/images/homepage_do.jpg" alt="homepage-do">
          <h2><a href="what_to_do.html">What to Do?</a></h2>
          <ul>
            <li><a href="historical_tours.html">Historical Tours</a></li>
            <li><a href="city_tours.html">Cultural Tours</a></li>
            <li><a href="city_tours.html">City Tour</a></li>
          </ul>
          <button type="submit" value="submit" class="custom-button"><a href="what_to_do.html">Learn More &rarr;</a></button>
        </div>
        <div class="grid">
          <img src="assets/images/homepage_2.jpg" alt="homepage-see">
          <h2><a href="what_to_see.html">What to see?</a></h2>
          <ul>
            <li><a href="top_attractions.html">Top Attractions</a></li>
            <li><a href="park.html">Parks</a></li>
            <li><a href="architecture_sites.html">ArchitecturalSites</a></li>
          </ul>
          <button type="submit" value="submit" class="custom-button"><a href="what_to_see.html">Learn More &rarr;</a></button>
        </div>
      </div>

<?php
	include($path . "assets/inc/footer.php");
?>
