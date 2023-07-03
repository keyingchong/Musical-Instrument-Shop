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
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/test/shop/shop.php">Shop</a>  /   <a href="/test/shop/guitar.php">Guitar</a>    /   <a href="/test/pdetails/guitar/luthier.php">L.Luthier - Le Light S</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/LeLightS_1.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/LeLightS_2.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/LeLightS_3.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/LeLightS_4.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/LeLightS_5.jpeg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/LeLightS_1.jpg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/LeLightS_2.jpg" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/LeLightS_3.jpg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/LeLightS_4.jpg" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/LeLightS_5.jpeg" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table>
          <tr><th><h1>L.Lutheir - Le Light S</h1></th></tr>
          <tr><td>Le Body Size: Light</td></tr>
          <tr><td>Size: 38’’ Le Guitar</td></tr>
          <tr><td>Number of fret:22</td></tr>
          <tr><td>Top: Solid Sitka Spruce</td></tr>
          <tr><td>Back & Side: Laminated Mahogany</td></tr>
          <tr><td>Neck: Mahogany</td></tr>
          <tr><td>Fretboard: Rosewood</td></tr>
          <tr><td>Bridge: Rosewood</td></tr>
          <tr><td>Saddle & Nut: Bone</td></tr>
          <tr><td>String: D’addario EXP-16</td></tr>
          <tr><td>Nut Width: 43mm</td></tr>
          <tr><td>Scale Length: 628mm</td></tr>
          <tr><td>Pickup System: LL 2 in 1 Active Preamp System</td></tr>
          <tr><td><p>Description: </p></td></tr>
		  <tr><td>The innovative design of L. Luthier guitars introduces new possibilities by designing an additional soundhole direct at the guitarist, providing the guitarist with a truly unique musical experience. And it enables the guitarist to immerse in their music entirely, achieving satisfaction and excellence.</td></tr>       
		  <tr>
            <td><p style="font-weight:bold;font-size:25px;">RM1,680.00</p></td>
          </tr>
          <tr>
            <td>
            <button class="add-to-cart-button" onclick="removeFromCart('L.Lutheir - Le Light S')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('L.Lutheir - Le Light S')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button></td>
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