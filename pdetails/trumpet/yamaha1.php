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
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/test/shop/shop.php">Shop</a>  /   <a href="/test/shop/trumpet.php">Trumpet</a>   /   <a href="/test/pdetails/trumpet/tyamaha1_1.php">Yamaha YTR-2330 Standard Gold Bb Trumpet (YTR2330)</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/tyamaha1_1.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/tyamaha1_2.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/tyamaha1_3.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/tyamaha1_4.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/tyamaha1_5.jpg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/tyamaha1_1.jpg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/tyamaha1_2.jpg" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/tyamaha1_3.jpg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/tyamaha1_4.jpg" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/tyamaha1_5.jpg" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table>
          <tr><th><h1>Yamaha YTR-2330 Standard Gold Bb Trumpet (YTR2330)</h1></th></tr>
          <tr><td><p><u>Features: </u></p>
          <ul><li>The durable yet light two-piece bell is made of yellow brass for optimal playability and to promotegood technique and endurance.</li>
          <li>Highly durable monel alloy pistons as well as newly designed piston buttons and bottom caps help lengthen 
              the life of the instrument while also maximizing sound quality.</li>
          <li>The 2nd and main tuning slides are produced using the same method as high-end Yamaha models, which 
              provides stability, a more refined tonal color and added durability.</li></ul></tr></td>
          <tr><td><p><u>Specifications: </u></p>
          <ul><li>Key: Bb</li>
          <li>Bell Material: Two piece, Yellow brass</li>
          <li>Bell Diameter: 123mm (4-7/8")</li>
          <li>Bore Size: ML 11.65mm (0.459")</li>
          <li>Weight: Medium</li>
          <li>Finish: Gold lacquer</li>
          <li>Mouthpiece: TR-11B4</li>
          <li>Case: Included	</li><ul></td></tr>
          <tr><td><p><u>Description: </u></p>
          The two-piece bell of the YTR-2330 is crafted using state-of-the-art production methods, delivering a consistent, vibrant tone. 
          The balanced weight and addition of an adjustable third valve trigger allows for a natural hand position and promotes proper playing 
          technique, while the water key on the third valve slide adds to the ease of use and over-all playability of the instrument.</td></tr>       
          <tr><td><p style="font-weight:bold;font-size:25px;">RM2,399.00</p></td></tr>
          <tr>
            <td>
            <button class="add-to-cart-button" onclick="removeFromCart('Yamaha YTR-2330 Standard Gold Bb Trumpet (YTR2330)')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('Yamaha YTR-2330 Standard Gold Bb Trumpet (YTR2330)')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button></td>
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