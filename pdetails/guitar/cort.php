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
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/shop/shop.php">Shop</a>  /   <a href="/test/shop/guitar.php">Guitar</a>    /   <a href="/pdetails/guitar/cort.php">Cort - Cort Grand Regal GA5F-BW</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/cort.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/cort1.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/cort2.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/cort3.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/cort4.png" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/cort.jpg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/cort1.jpg" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/cort2.jpg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/cort3.jpg" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/cort4.png" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table>
          <tr><th><h1>Cort - Cort Grand Regal GA5F-BW</h1></th></tr>
          <tr><td>Body: Grand Auditorium</td></tr>
          <tr><td>Nut Width: 45mm</td></tr>
          <tr><td>Top: Solid Cedar</td></tr>
          <tr><td>Back & Sides: Blackwood</td></tr>
          <tr><td>Neck: Mahogany</td></tr>
          <tr><td>Fretboard: Ovangkol</td></tr>
          <tr><td>Bridge: Ovangkol w/ Ebony Pins</td></tr>
          <tr><td>Binding: Ivory</td></tr>
          <tr><td>Number of fret: 20</td></tr>
          <tr><td>Scale Length: 643mm</td></tr>
          <tr><td>Tuners: Die-Cast w/ Black Knobs</td></tr>
          <tr><td>Pickups: Fishman Sonicore</td></tr>
          <tr><td>String: D'addario EXP16</td></tr>
          <tr><td>Saddle & Nut: Buffalo Bone</td></tr>
          <tr><td><p>Description: </p></td></tr>
		  <tr><td>The new Grand Regal Series from Cort is based on the popular Grand Auditorium body shape that sists right in between 
		  the dreadnought and concert-size shapes for a full but balanced sound. The 45mm(1 3/4") nut width also makes it ideal for 
		  fingerstyle playing. GA5F-BW is solid Cedar top with Blackwood back and sides, Fishman Presys 3-Band EQ, LED Tuner, and Phase
		  control offers sonic flexibility as well as convenience for a variety of playing situations where amplification is needed.</td></tr>       
		  <tr>
            <td><p style="font-weight:bold;font-size:25px;">RM1,790.00</p></td>
          </tr>
          <tr>
            <td>
            <button class="add-to-cart-button" onclick="removeFromCart('Cort Grand Regal GA5F-BW')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('Cort Grand Regal GA5F-BW')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button>
          </tr>
        </table>
      </div>
      <br><br><br><br><br><br><br>
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