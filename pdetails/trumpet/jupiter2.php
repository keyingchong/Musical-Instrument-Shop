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
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/test/shop/shop.php">Shop</a>  /   <a href="/test/shop/trumpet.php">Trumpet</a>   /   <a href="/test/pdetails/trumpet/jupiter2_.php">JUPITER 500 SERIES JTR500N BB TRUMPET</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/jupiter2_1.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/jupiter2_2.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/jupiter2_3.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/jupiter2_4.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/jupiter2_5.jpg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/jupiter2_1.jpg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/jupiter2_2.jpg" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/jupiter2_3.jpg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/jupiter2_4.jpg" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/jupiter2_5.jpg" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table>
          <tr><th><h1>JUPITER 500 SERIES JTR500N BB TRUMPET</h1></th></tr>
          <tr><td><p><u>Features: </u></p>
          <ul><li>Stainless Steel Pistons have remarkably smooth, fast action for improved agility and playability.</li>
          <li>Adjustable 1st and 3rd Valve Slide allows the player to custom fit the instrument to achieve maximum performance comfort.</li></ul></td></tr>
          <tr><td><p><u>Specifications: </u></p>
          <ul><li>Key of Bb</li>
          <li>Nickle-Plated Finish</li>
          <li>4.8" Bell</li>
          <li>Adjustable 3rd Valve Slide</li>
          <li>.460" Bore</li>
          <li>1st Valve Slide Thumb Saddle</li>
          <li>With ABS case (JTR500N)</li></ul></td></tr>
          <tr><td><p><u>Description: </u></p>
          The Jupiter JTR500N standard Bb Trumpet has a lacquered brass body with stainless steel pistons. This free blowing, well-balanced instrument is designed to be comfortable beginners.</td></tr>       
          <tr><td><p style="font-weight:bold;font-size:25px;">RM3,276.00</p></td></tr>
          <tr>
            <td>
            <button class="add-to-cart-button" onclick="removeFromCart('JUPITER 500 SERIES JTR500N BB TRUMPET')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('JUPITER 500 SERIES JTR500N BB TRUMPET')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button></td>
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