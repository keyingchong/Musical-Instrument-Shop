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
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/test/shop/shop.php">Shop</a>  /   <a href="/test/shop/keyboard.php">Keyboard</a>   /   <a href="/test/pdetails/keyboard/bora.php">Bora BR-01 (WHITE) Foldable Travel Digital Piano</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/bora1.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/bora2.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/bora3.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/bora4.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/bora5.jpg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/bora1.jpg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/bora2.jpg" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/bora3.jpg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/bora4.jpg" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/bora5.jpg" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table>
          <tr><th><h1>Bora - BR-01 (WHITE) Foldable Travel Digital Piano</h1></th></tr>
          <tr><td><p><u>Features: </u></p>
          <ul><li>Keyboards         88 Keys</li>
          <li>Tone                   128 tones</li>
          <li>Rhyth*ms           128 rhyth*ms</li>
          <li>Demo                 15 demos</li>
          <li>Power supply    DC 5V,  built-in lithium battery</li>
          <li>Material              ABS</li>
          <li>Output                500MV</li>
          <li>Color                   White/Black</li>
          <li>Suitable age       All ages</li>
          <li>Bluetooth           Support</li>
          <li>MIDI                     USB-MIDI</li>
          <li>Weight                 2.65KG</li>
          <li>Product Size       L137*W16.5*H4cm</li>
          <li>Carton Size         L77.2*W11.5*H20cm</li></ul>
          <p>Main Function : Master volume control keys, Speed control keys, Recording, playback, Sustain pedal, teaching, drum kit, metronome, transpose, vibrato functions.</p></td></tr>
          <tr><td><p><u>Description: </u></p>
          Portable folding design that you can easily fold it and take it to anywhere. It highly restores the width of the standard piano keys to fully meet your needs of daily practice.</td></tr>       
          <tr><td><p style="font-weight:bold;font-size:25px;">RM499.00</p></td></tr>
          <tr>
            <td>
            <button class="add-to-cart-button" onclick="removeFromCart('BR-01 (WHITE) Foldable Travel Digital Piano')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('BR-01 (WHITE) Foldable Travel Digital Piano')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button></td>
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