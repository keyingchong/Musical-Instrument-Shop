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
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/test/shop/shop.php">Shop</a>  /   <a href="/test/shop/drum.php">Drum</a>   /   <a href="/test/pdetails/drum/alesis1.php">Alesis Surge Mesh Special Edition Electronic Drum Kit</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/alesis1_1.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/alesis1_2.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/alesis1_3.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/alesis1_4.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/alesis1_5.jpg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/alesis1_1.jpg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/alesis1_2.jpg" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/alesis1_3.jpg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/alesis1_4.jpg" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/alesis1_5.jpg" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table style="margin-bottom: 50px;">
          <tr><th><h1>Alesis - Surge Mesh Special Edition Electronic Drum Kit</h1></th></tr>
          <tr><td><p><u>Specifications: </u></p>
          <ul><li>System Requirements: OS X 10.7 or later, PC: Windows 7 or later</li>
          <li>Included Accessories: Cable Snake, Velcro Cable Wraps, Drum Key, Drum Sticks, Power Supply, Surge Module User Guide, Surge Mesh Kit Special Edition Assembly Guide, Safety & Warranty Manual</li></ul></td></tr>
          <tr><td><p><u>Features: </u><p>
          <ul><li>White tightly woven mesh drumheads enhance the feel and playing response</li>
          <li>Five-piece pad set with 8” dual-zone toms, 10” snare drum and 8” kick drum</li>
          <li>Three-piece 10” cymbal set with hi-hat, crash w/choke, and ride w/choke</li>
          <li>Surge Drum Module with 40 kits (24 Preset + 16 User) and 385 sounds</li>
          <li>60 built-in play-along tracks, sequencer, metronome, and performance recorder</li>
          <li>CD/MP3 aux input to play along with your phone or other portable devices</li>
          <li>USB/MIDI connection for virtual instruments and recording software</li>
          <li>Four-post quick lock black powder-coated rack</li>
          <li>Kick drum pedal, drum key, drumsticks, connection cables, mounting hardware and power supply included</li></ul></td></tr>
          <tr><td><p><u>Configurations: </u></p>
          <ul><li>Surge Drum Module</li>
          <li>10" Dual-Zone Mesh Snare Pad</li>
          <li>(3) 8" Dual-Zone Mesh Tom Pads</li>
          <li>8" Mesh Kick Pad Tower </li>
          <li>10" Hi-Hat Cymbal</li>
          <li>10" Crash Cymbal with Choke</li>
          <li>10" Ride Cymbal with Choke</li>
          <li>Kick Pedal</li>
          <li>Hi-Hat Pedal</li>
          <li>Premium 4-post rack</li></ul></td></tr>
          <tr><td><p><u>Description: </u></p>
          The Surge Mesh Special Edition is an electronic drum kit that provides everything young people need to learn to play the drums and get well fast – inspiring sounds, 
          fun and engaging lessons, and a rock-solid kit from a brand trusted by professionals worldwide - Alesis. This eight-piece kit features mesh drum pads for quiet practice 
          at home, a large mesh kick drum pad with a pedal, three cymbals, and a hi-hat pedal. The included Surge Drum Module packs hundreds of inspiring classic and modern drum 
          sounds as well as in-demand training features like 60 play-along tracks, a metronome to keep time, and a built-in performance recorder. Holding it all together is a premium 
          drum rack that’s as sturdy as it is portable – capable of taking a beating and then fold up for convenient storage once practice is over.</td></tr>       
          <tr><td><p style="font-weight:bold;font-size:25px;">RM2,555.00</p></td></tr>
          <tr>
            <td>
            <button class="add-to-cart-button" onclick="removeFromCart('Surge Mesh Special Edition Electronic Drum Kit')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('Surge Mesh Special Edition Electronic Drum Kit')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button>
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