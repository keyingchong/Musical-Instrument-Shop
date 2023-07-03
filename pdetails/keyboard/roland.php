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
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/test/shop/shop.php">Shop</a>  /   <a href="/test/shop/keyboard.php">Keyboard</a>   /   <a href="/test/pdetails/keyboard/roland.php">Roland BK-5 (61 key) Arranger Workstation</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/roland1.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/roland2.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/roland3.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/roland4.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/roland5.jpg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/roland1.jpg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/roland2.jpg" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/roland3.jpg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/roland4.jpg" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/roland5.jpg" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table style="margin-bottom: 50px;">
          <tr><th><h1>Roland BK-5 (61 key) Arranger Workstation</h1></th></tr>
          <tr><td><p>Sound Generator</p>
          <p>The BK-5 is powered by a state-of-the-art Roland sound engine, packed with over 1,100 great sounds and dozens of drum and percussion kits. The instrument is able 
            to handle 128 voices simultaneously, and is compatible with a variety of voicing formats, including GM2, GS, and XG Lite. Feed the BK-5 a Standard MIDI File, buckle 
            up, and get ready for a great-sounding band!</p>
          <p>Creative Control</p>
          <p>In addition to playing MIDI Files with its internal sound generator, the BK-5 can also play and manipulate audio files. Play MP3 or WAV files via USB and use the onboard 
            controls to change key signature and tempo to best suit your vocal range or performance style. You can also use the BK-5’s Center Cancel feature to minimize the vocals from 
            pre-existing songs to create instant karaoke-style sing-along tracks.</p>
          <p>USB Compatibility</p>
          <p>To expand the capabilities of the BK-5, a USB port is provided for connecting to industry-standard USB storage devices such as a USB key or self-powered USB hard disk for 
            playing and modifying/saving files. You can also use the USB port to record your performances as audio files (WAV, 44.1KHz/16-bit linear format) on a USB storage device</p>
          <p>Video Compatibility</p>
          <p>The BK-5’s composite video output can be connected to an external monitor, which allows the audience or other musicians onstage to follow the lyrics and chord symbols of 
            the performed song. Turn your show into a multimedia experience!</p></td></tr>
          <tr><td><p><u>Description: </u></p>
          <p>Roland’s BK-5 is a very easy-to-use arranger/recorder keyboard that’s loaded with a big selection of sounds, Musical Assistants, and 
          rhythms from around the world. This compact, 61-key arranger’s velocity-sensitive keys give you a dynamic and expressive playing experience, 
          while onboard effects make the 1100-plus sounds even richer. The BK-5’s onboard stereo speakers give you a self-contained performance machine, 
          and you can even record straight from the BK-5 via USB. If you’re in the market for a do-it-all arranger keyboard, you’ve found it: the Roland BK-5.</p>
          <p>Self-contained, do-everything keyboard with auto-accompaniment engine and built-in sound system</p>
          <p>Wide selection of sounds, Music Assistants, and Rhythms that cover a wide landscape of musical genres (including East-Europe, Latin-America, Asia, and more)</p>
          <p>Friendly graphical user interface</p>
          <p>Onboard effects, including reverb, chorus, EQ, multi-band compressor, and dozens of multi-effects</p>
          <p>Music rhythm compatibility with Roland BK-7m/E-series/ G-series/VA-series instruments</p>
          <p>Compatible with backing formats (SMF, MP3, WAV, and Rhythm) directly from USB memory; instant audio recording onto USB memory</p>
          <p>Automatic chord detection for SMF files</p>
          <p>Video output to share SMF/MP3 Lyrics with friends or the audience on an external screen</p></td></tr>
          <tr><td><p style="font-weight:bold;font-size:25px;">RM5,090.00</p></td></tr>
          <tr>
            <td>
            <button class="add-to-cart-button" onclick="removeFromCart('Roland BK-5 (61 key) Arranger Workstation')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('Roland BK-5 (61 key) Arranger Workstation')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button></td>
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