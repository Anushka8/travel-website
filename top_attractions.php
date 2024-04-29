<?php
	$path = "";
	$page = "Top Attractions";

	include($path . "assets/inc/header.php");
?>

<div class="top-attractions">
    <?php
        include($path . "assets/inc/nav.php");
    ?>
    <div class="landing">
        <h1>TOP ATTRACTIONS</h1> 
    </div>
</div>

<div class="hist-tab-content">
      <!-- pop up for map -->
      <div id="overlay" onclick="off()">
        <div id="text"><a href="https://www.google.com/maps/place/Dr.+Bhau+Daji+Lad+Museum/@18.9789889,72.8348153,15z/data=!4m6!3m5!1s0x3be7ce5b428e70af:0x79efde6c140c2e05!8m2!3d18.9789889!4d72.8348153!16s%2Fm%2F06w4mwg?entry=ttu">
          <img src="assets/images/bhau_daaji_map.png" alt="bhau_daaji_map"></a></div>
      </div>
      <div class="first">
        <h2>Bhau Daji Lad Museum</h2>
        <h3 onclick="on()">Byculla, Mumbai</h3>
        <h3>Dr. Bhau Daji Lad Museum is the oldest museum in Mumbai. Situated in the vicinity of Byculla Zoo, Byculla East, it was originally established in 1855 as a treasure house of the decorative and industrial arts, and was later renamed in honour of Bhau Daji Lad</h3>
        <h3>&#9733;&#9733;&#9733;&#9733;&#9734;</h3>
        <button type="submit" value="submit" class="custom-button"><a href="https://www.bdlmuseum.org/">Book Now</a></button>
      </div>
      <div class="first-img"><img src="assets/images/top_attr_1.jpg" alt="bhau_daaji"></div>

      <div class="second">
        <h2>Nehru Science Center</h2>
        <h3>Worli, Mumbai</h3>
        <h3>The centre is named after India's first Prime Minister, Jawaharlal Nehru. In 1977, the centre started with the 'Light and Sight' exhibition, and then in 1979 a Science Park was built</h3>
        <h3>&#9733;&#9733;&#9733;&#9734;&#9734;</h3>
        <button type="submit" value="submit" class="custom-button"><a href="https://www.nehrucentremumbai.in/">Book Now</a></button>
      </div>
      <div class="second-img"><img src="assets/images/top_attr_2.jpg" alt="planeterium"></div>

      <div class="third">
        <h2>Mumbai Zoo</h2>
        <h3>Byculla, Mumbai</h3>
        <h3>Jijamata Udyaan, also known as the Byculla Zoo and formerly Victoria Gardens, is a zoo and garden covering 50 acres located at Byculla, in the heart of Mumbai, India.</h3>
        <h3>&#9733;&#9733;&#9733;&#9734;&#9734;</h3>
        <button type="submit" value="submit" class="custom-button"><a href="https://www.tripadvisor.com/Attraction_Review-g304554-d3733038-Reviews-Mumbai_Zoo_Veermata_Jijabai_Udyan-Mumbai_Maharashtra.html">Book Now</a></button>
      </div>
      <div class="third-img"><img src="assets/images/top_attr_3.jpg" alt="zoo"></div>
    </div>

<?php
	include($path . "assets/inc/footer.php");
?>