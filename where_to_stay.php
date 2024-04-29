<?php
	$path = "";
	$page = "Where to Stay?";

	include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");
?>

<div class="main">
      <div class="heading">Where to stay?</div>
      <ul class="tab-list">
        <li><a href="#tab1">Hotels</a></li>
        <li><a href="#tab2">Airbnb</a></li>
      </ul>
      <div id="tab1" class="tab-content">
        <div class="first">
          <h2>Trident</h2>
          <h3>Nariman Point, Mumbai</h3>
          <h3>Luxurious hotel offering scenic view of the Arabian Sea and Marine Drive or the Queen's Necklace.</h3>
          <h3>&#9733;&#9733;&#9733;&#9733;&#9734;</h3>
          <button type="submit" value="submit" class="custom-button"><a href="https://www.tridenthotels.com/hotels-in-mumbai-nariman-point/">Book Now</a></button>
        </div>
        <div class="first-img"><img src="assets/images/trident.jpg" alt="trident"></div>

        <div class="second">
          <h2>Taj</h2>
          <h3>Colaba, Mumbai</h3>
          <h3>Experience royalty at Taj Mahal Palace at the southern tip of Mumbai directly facing the iconic Gateway of India.</h3>
          <h3>&#9733;&#9733;&#9733;&#9734;&#9734;</h3>
          <button type="submit" value="submit" class="custom-button"><a href="https://www.tajhotels.com/en-in/taj/taj-mahal-palace-mumbai/">Book Now</a></button>
        </div>
        <div class="second-img"><img src="assets/images/taj.jpg" alt="taj"></div>

        <div class="third">
          <h2>JW Marriott</h2>
          <h3>Juhu, Mumbai</h3>
          <h3>Located right next to Juhu beach, enjoy a beach time in the middle of the city with a comfortable stay at Marriott.</h3>
          <h3>&#9733;&#9733;&#9733;&#9734;&#9734;</h3>
          <button type="submit" value="submit" class="custom-button"><a href="https://www.marriott.com/en-us/hotels/bomjw-jw-marriott-mumbai-juhu/overview/">Book Now</a></button>
        </div>
        <div class="third-img"><img src="assets/images/jw_marriott.jpg" alt="jwmarriott"></div>
      </div>

      <div id="tab2" class="tab-content">
        <div class="first">
          <h2>Sea View Apartment</h2>
          <h3>Malabar Hill, Mumbai</h3>
          <h3>A 600 sq. ft private studio apartment with two large rooms with air conditioning & a private mini sit-out area</h3>
          <h3>&#9733;&#9733;&#9733;&#9733;&#9734;</h3>
          <button type="submit" value="submit" class="custom-button"><a href="https://www.airbnb.com/s/homes?dynamic_product_ids%5B%5D=629607423091003756&omni_page_id=36021">Book Now</a></button>
        </div>
        <div class="first-img"><img src="assets/images/airbnb_2.webp" alt="airbnb2"></div>

        <div class="second">
          <h2>Luxurious Two Bedroom Apartment</h2>
          <h3>Colaba, Mumbai</h3>
          <h3>Experience the comfort and luxury of a home away from home in a spacious two bedroom apartment of a skyscraper building in Colaba overlooking the Arabian Sea. </h3>
          <h3>&#9733;&#9733;&#9733;&#9733;&#9734;</h3>
          <button type="submit" value="submit" class="custom-button"><a href="https://www.airbnb.com/s/homes?dynamic_product_ids%5B%5D=33934906&omni_page_id=36021">Book Now</a></button>
        </div>
        <div class="second-img"><img src="assets/images/airbnb_1.webp" alt="airbnb1"></div>

        <div class="third">
          <h2>Bazaar House</h2>
          <h3>Bandra, Mumbai</h3>
          <h3>Wake up in this bright apartment located in central core of the city. Very private yet it’s centrally located, the charm about this house is the high ceiling and the openness of the house gives a grand look.</h3>
          <h3>&#9733;&#9733;&#9733;&#9733;&#9734;</h3>
          <button type="submit" value="submit" class="custom-button"><a href="https://www.airbnb.com/s/homes?dynamic_product_ids%5B%5D=794758386751868832&omni_page_id=36021">Book Now</a></button>
        </div>
        <div class="third-img"><img src="assets/images/airbnb_3.webp" alt="airbnb3"></div>
      </div>
    </div>

<?php
	include($path . "assets/inc/footer.php");
?>