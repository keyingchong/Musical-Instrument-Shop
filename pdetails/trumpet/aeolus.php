<!DOCTYPE html>
<html>
  <head>
    <title>Product Details</title>
    <link rel="stylesheet" href="/test/styles/pdetail.css">
    <link rel="stylesheet" href="/test/styles/navigation.css">
    <link rel="stylesheet" href="/test/styles/includes.css">
  </head>
  <body>
    <div class="details-background">
      <?php include("../../includes/navigation.php") ?>
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/test/shop/shop.php">Shop</a>  /   <a href="/test/shop/trumpet.php">Trumpet</a>   /   <a href="/test/pdetails/trumpet/aeolus.php">Aeolus Bb Trumpet N°500</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/taeolus1.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/taeolus2.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/taeolus3.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/taeolus4.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/taeolus5.jpg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/taeolus1.jpg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/taeolus2.jpg" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/taeolus3.jpg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/taeolus4.jpg" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/taeolus5.jpg" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table>
          <tr><th><h1>Aeolus Bb Trumpet N°500</h1></th></tr>
          <tr><td><p><u>Description: </u></p>
          The Aeolus Bb Trumpet N°500 has been designed by the same team that produces our top-of-the-line professional models and 
          shares many of the same qualities, like a rich full tone with accurate intonation, and the ability to either blend with the 
          ensemble or project a solo. It features monel alloy pistons for quick and reliable valve action, a yellow-brass bell for a clear, 
          resonant tone and a reverse main tuning slide for smooth resistance and airflow. The entire inner bore taper-from mouthpiece 
          receiver to the bell-has been scientifically designed for beautiful tone color, comfortable response, and as much sound as you want.</td></tr>       
          <tr><td><p style="font-weight:bold;font-size:25px;">RM1,299.00</p></td></tr>
          <tr>
            <td>
            <button class="add-to-cart-button" onclick="removeFromCart('Aeolus Bb Trumpet N°500')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('Aeolus Bb Trumpet N°500')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button></td>
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