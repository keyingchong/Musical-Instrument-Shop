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
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/test/shop/shop.php">Shop</a>  /   <a href="/test/shop/keyboard.php">Keyboard</a>   /   <a href="/test/pdetails/keyboard/casio1.php">Casio LK-S450 (61 key) Arranger Keyboard </a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/casio1_1.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/casio1_2.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/casio1_3.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/casio1_4.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/casio1_5.jpg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/casio1_1.jpg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/casio1_2.jpg" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/casio1_3.jpg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/casio1_4.jpg" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/casio1_5.jpg" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table style="margin-bottom: 50px;">
          <tr><th><h1>Casio - LK-S450 (61 key) Arranger Keyboard </h1></th></tr>
          <tr><td><p><u>Features: </u></p>
          <ul><li>61 touch-responsive keys let you effortlessly control dynamics.</li>
          <li>Key Lighting system helps you learn new songs.</li>
          <li>600 tones and 200 rhythms provide plenty of sounds to experiment with.</li>
          <li>USB-MIDI connectivity connects to Chordana Play music app.</li>
          <li>5-track recorder saves your performances for later.</li>
          <li>Onboard stereo speaker system provides a “surround sound” effect.</li>
          <li>Strap pins and optional battery power let you play anywhere you want.</li></ul></td></tr>
          <tr><td><p><u>Specifications: </u></p>
          <ul><li>Number of Keys: 61</li>
          <li>Type of Keys: Full Size with Key Lighting System</li>
          <li>Velocity Sensitive: Yes</li>
          <li>Polyphony: 48 Notes</li>
          <li>Presets: 600 Tones, 200 Rhythms</li>
          <li>Number of Effects: 32</li>
          <li>Effects Types: Reverb, Chorus, DSP, Master EQ</li>
          <li>Memory: 40,000 Notes (per song)</li>
          <li>Audio Inputs: 1 x 1/8″ (stereo)</li>
          <li>USB: 1 x Micro-B, 1 x Type A</li>
          <li>MIDI I/O: USB</li>
          <li>Headphones: 1 x 1/8″ (stereo)</li>
          <li>Software: Casio Chordana Play App</li>
          <li>Built-in Speakers: 2 x 5.1″, 2.5W per side</li>
          <li>Power Supply: 9.5V DC power supply/ 6 x AA</li>
          <li>Height: 3.30″</li>
          <li>Width: 36.61″</li>
          <li>Depth: 10.15″</li>
          <li>Weight: 9.9 lbs.</li></ul></td></tr>
          <tr><td><p><u>Description: </u></p>
          Whether you’re looking to buy your first keyboard or fifth, the Casio LK-S450 offers robust functionality that will make it your new favorite. 
          This portable arranger keyboard has 61 touch-responsive keys for the pinpoint dynamic control of a real acoustic piano. It comes with 600 high-quality 
          tones for sonic variation and 200 rhythms for an endless supply of fun and exciting practice sessions. When you play a MIDI song, it will light up the 
          correct keys so you can play along. The keyboard is also compatible with the free Chordana Play app for iOS and Android so that you can learn new songs 
          and techniques with ease! Don’t delay — grab a Casio LK-S450 today!</td></tr>       
          <tr><td><p style="font-weight:bold;font-size:25px;">RM1,699.00</p></td></tr>
          <tr>
            <td>
            <button class="add-to-cart-button" onclick="removeFromCart('Casio - LK-S450 (61 key) Arranger Keyboard')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('Casio - LK-S450 (61 key) Arranger Keyboard')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button></td>
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