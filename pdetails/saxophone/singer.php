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
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/test/shop/shop.php">Shop</a>  /   <a href="/test/shop/saxophone.php">Saxophone</a>   /   <a href="/test/pdetails/saxophone/singer.php">Singer's day SDBS-2001 Baritone Saxophone</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/singer1.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/singer2.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/singer3.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/singer4.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/singer5.jpg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/singer1.jpg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/singer2.jpg" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/singer3.jpg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/singer4.jpg" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/singer5.jpg" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table>
          <tr><th><h1>Singer's day SDBS-2001 Baritone Saxophone</h1></th></tr>
          <tr><td><p><u>Description: </u></p>
          The SDBS-2001 baritone saxophone key design allows for correct and comfortable hand position. 
          The yellow brass body includes ribbed construction and a detachable, reinforced body-to-bow connection 
          for added strength and durability. Designed as an affordable option for beginning band students, the 
          SDBS-2001 series of entry-level instruments combines value and performance. All instruments are built to 
          stringent specifications and supported by our ongoing commitment to service. Each outfit includes 
          instrument, necessary accessories, and care maintenance instructions.</td></tr>       
          <tr><td><p style="font-weight:bold;font-size:25px;">RM9,990.00</p></td></tr>
          <tr>
            <td>
            <button class="add-to-cart-button" onclick="removeFromCart('Singers day SDBS-2001 Baritone Saxophone')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('Singers day SDBS-2001 Baritone Saxophone')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button></td>
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