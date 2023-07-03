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
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/test/shop/shop.php">Shop</a>  /   <a href="/test/shop/drum.php">Drum</a>   /   <a href="/test/pdetails/drum/ludwig1.php">Ludwig LE522010 Evolution 5-Piece Drum Kit w/Hardware, Cherry</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/ludwig1_1.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/ludwig1_2.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/ludwig1_3.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/ludwig1_4.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/ludwig1_5.jpg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/ludwig1_1.jpg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/ludwig1_2.jpg" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/ludwig1_3.jpg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/ludwig1_4.jpg" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/ludwig1_5.jpg" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table>
          <tr><th><h1>Ludwig LE522010 Evolution 5-Piece Drum Kit w/Hardware, Cherry</h1></th></tr>
          <tr><td><p><u>Features: </u><p>
          <ul><li>The poplar shell delivers top-notch attack, sustain, and harmonic overtones.</li>
          <li>Double braced hardware.</li>
          <li>Improved double tom holder and base plate.</li>
          <li>Improved tom brackets with suspension mount for toms.</li>
          <li>Memory locks and an improved snare drum throw off.</li></ul></td></tr>
          <tr><td><p><u>Configurations: </u></p>
          <ul><li>22" x 18" Bass Drum</li>
          <li>22" x 18" Bass Drum</li>
          <li>8" x 10" Tom Tom</li>
          <li>9" x 12" Tom Tom</li>
          <li>16" x 16" Floor Tom</li></ul></td></tr>
          <tr><td><p><u>Description: </u></p>
          Designed as an intermediate Drum Set, the Ludwig Element Evolution is everything an aspiring drummer needs to excel. The Evolution 
          Series Outfit comes with double-braced hardware and is great for drummers of any age who are ready to take the next step.</td></tr>       
          <tr><td><p style="font-weight:bold;font-size:25px;">RM3,050.00</p></td></tr>
          <tr>
            <td>
            <button class="add-to-cart-button" onclick="removeFromCart('Ludwig LE522010 Evolution 5-Piece Drum Kit w/Hardware, Cherry')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('Ludwig LE522010 Evolution 5-Piece Drum Kit w/Hardware, Cherry')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button></td>
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