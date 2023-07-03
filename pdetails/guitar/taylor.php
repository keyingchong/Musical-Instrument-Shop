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
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/test/shop/shop.php">Shop</a>  /   <a href="/test/shop/guitar.php">Guitar</a>   /   <a href="/test/pdetails/guitar/taylor.php">Taylor - Taylor TSBTe TAYLOR SWIFT Model</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/taylor1.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/taylor2.png" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/taylor3.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/taylor4.png" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/taylor5.jpg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/taylor1.jpg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/taylor2.png" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/taylor3.jpg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/taylor4.png" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/taylor5.jpg" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table>
          <tr><th><h1>Taylor - Taylor TSBTe TAYLOR SWIFT Model</h1></th></tr>
          <tr><td>Body: ¾ -size Dreadnought</td></tr>
          <tr><td>Top: Sitka Spruce</td></tr>
          <tr><td>Back & Sides: Layered Sapele</td></tr>
          <tr><td>Neck: Ebony</td></tr>
          <tr><td>Fretboard: Ebony</td></tr>
          <tr><td>Number of Frets: 19</td></tr>
          <tr><td>Rosette: Custom rosette & Taylor Swift’s signature</td></tr>
          <tr><td>String: Phosphor Bronze Light</td></tr>
          <tr><td>Nut & Saddle: Nubone Nut, Micarta Saddle</td></tr>
          <tr><td>Pickups: ES-B</td></tr>
          <tr><td>Tuners: Die-Cast Chrome</td></tr>
          <tr><td><p>Description: </p></td></tr>
		  <tr><td>Taylor Guitars and Taylor Swift have joined forces to create the Taylor Swift Baby Taylor-e acoustic-electric guitar. 
		  Inspired by Taylor’s memories of writing songs on her Baby Taylor, this guitar features custom graphics, big tone, and 
		  great playability. A Sitka spruce top and layered sapele back and sides give this guitar a tone that transcends its size. 
		  The 3/4-size design is extremely comfortable and fun to play. And when you need to plug in, the Baby-e has 
		  Taylor’s new Expression System Baby pickup built in. It uses the under-saddle pickup of the ES2 system coupled with a preamp 
		  that sports a chromatic tuner. Whether you’re looking for a guitar to craft songs on or a great travel guitar, the Taylor 
		  Swift Baby Taylor-e is the perfect choice.</td></tr>       
		  <tr>
            <td><p style="font-weight:bold;font-size:25px;">RM1,690.00</p></td>
          </tr>
          <tr>
            <td>
            <button class="add-to-cart-button" onclick="removeFromCart('Taylor TSBTe TAYLOR SWIFT Model')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('Taylor TSBTe TAYLOR SWIFT Model')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button></td>
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