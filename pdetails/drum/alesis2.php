<!DOCTYPE html>
<html>
  <head>
    <title>Product Details</title>
    <link rel="stylesheet" href="/test/styles/pdetail.css">
    <link rel="stylesheet" href="/test/styles/navigation.css">
    <link rel="stylesheet" href="/test/styles/includes.css">
    <script src="/test/cart.js"></script>	
  </head>
  <body>
    <div class="details-background">
      <?php include("../../includes/navigation.php") ?>
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/test/shop/shop.php">Shop</a>  /   <a href="/test/shop/drum.php">Drum</a>   /   <a href="/test/pdetails/drum/alesis2.php">Alesis Nitro Mesh Electronic Drum Kit</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/alesis2_1.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/alesis2_2.jpeg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/alesis2_3.jpeg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/alesis2_4.jpeg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/alesis2_5.jpeg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/alesis2_1.jpg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/alesis2_2.jpeg" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/alesis2_3.jpeg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/alesis2_4.jpeg" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/alesis2_5.jpeg" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table style="margin-bottom: 50px;">
          <tr><th><h1>Alesis - Nitro Mesh Electronic Drum Kit</h1></th></tr>
          <tr><td><p><u>Contents: </u></p>
          <ul><li>Nitro Drum Module</li>
          <li>8" Dual-Zone Mesh Snare Pad</li>
          <li>(3) 8" Mesh Tom Pads</li>
          <li>10" Hi-Hat Pad</li>
          <li>10" Crash Pad w/ Choke</li>
          <li>10" Ride Pad</li>
          <li>Kick Pad Tower</li>
          <li>Kick Pedal</li>
          <li>Hi-Hat Pedal</li>
          <li>4-Post Aluminum Rack</li>
          <li>Cable Snake</li>
          <li>Cable Wrap Strips</li>
          <li>Drum Key</li>
          <li>Drum Sticks</li>
          <li>Power Supply</li>
          <li>Module User Guide</li>
          <li>Kit Assembly Guide</li>
          <li>Safety & Warranty Manual</li></ul></td></tr>
          <tr><td><p><u>Description: </u></p>
          <p>The Alesis Nitro Mesh is a complete 8-piece electronic drum kit centred around next-generation Alesis Mesh head drum technology. Mesh heads are the overwhelming preference of drummers 
          when they play electronic kits because of their natural feel and ultra-quiet response. The Alesis Nitro Mesh features an 8" dual-zone mesh snare drum and (3) 8" mesh toms. It includes 
          everything else you need to make a complete drum kit; (3) 10" cymbals, custom-designed Alesis hi-hat pedal and kick pedal, and a durable 4-post aluminium rack. Included also are all the 
          cabling, power supply and drum key for easy setup. All of this connects to the powerful Nitro electronic drum module with hundreds of percussion sounds, 40 different kits and 60 built-in play-along tracks.</p>
          <p>The Nitro module comes complete with 40 classic and modern ready-to-play kits. Easily tweak any existing kit, or create your own using the 385 superior drum, cymbal, and percussion sounds included in the 
            Nitro module. The built-in learning features 60 play-along music tracks and an onboard metronome to improve your skills. There is even an advanced sequencer and a performance recorder to expand your 
            music-making potential. In addition to the USB MIDI connection for use with computers and mobile devices, the Nitro module also offers up some old-school MIDI In and Out jacks so you can hook up to your 
            favorite MIDI-equipped drum machine, sound module or other audio gear. There is a headphone jack for private practice, plus stereo outs to connect to a PA system, amplifier or recording console. The stereo 
            aux input enables you to jam along to your favorite tracks on your CD or MP3 player.</p></td></tr>
          <tr><td><p style="font-weight:bold;font-size:25px;">RM2,145.00</p></td></tr>
          <tr>
            <td>
            <button class="add-to-cart-button" onclick="removeFromCart('Nitro Mesh Electronic Drum Kit')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('Nitro Mesh Electronic Drum Kit')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button>
          </tr>
        </table>
      </div>
      <br><br><br><br><br>
      <?php include("../../includes/info.php") ?>
      <?php include("../../includes/footer.php") ?>
    </div>

    <script>
            let slideIndex = 1;
        showSlides(slideIndex);

        // Thumbnail image controls
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          let i;
          let slides = document.getElementsByClassName("detail-slide");
          let dots = document.getElementsByClassName("detail-cursor");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
	</script>
  </body>
</html>