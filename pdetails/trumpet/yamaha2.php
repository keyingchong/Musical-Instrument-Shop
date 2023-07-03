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
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/test/shop/shop.php">Shop</a>  /   <a href="/test/shop/trumpet.php">Trumpet</a>   /   <a href="/test/pdetails/trumpet/yamaha2.php">Yamaha Herald Trumpet YTR-6335F</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/tyamaha2_1.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/tyamaha2_2.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/tyamaha2_3.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/tyamaha2_4.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/tyamaha2_5.jpg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/tyamaha2_1.jpg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/tyamaha2_2.jpg" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/tyamaha2_3.jpg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/tyamaha2_4.jpg" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/tyamaha2_5.jpg" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table>
          <tr><th><h1>Yamaha - Herald Trumpet YTR-6335F</h1></th></tr>
          <tr><td><p><u>Features: </u></p>
          <ul><li>Improved Projection: Overall design has been updated with a brace at the main tuning slide section and slightly increased playing 
            resistance. With the capacity to maintain solid tone when overblown, plus outstanding projection, this instrument can deliver beautifully 
            defined sound over long distances outdoors.</li>
          <li>Ideal Weight Distribution: The leadpipe and main tuning slide have been redesigned, and the valve casing has been moved closer to the 
            player to improve weight distribution. Because the center of gravity is closer to the player, the instrument is noticeably easier and more comfortable to hold.</li>
          <li>Water Key Designed for Use While Playing : A water key added to the bell crook can be operated by the left-hand thumb for easy water drainage 
            while the instrument is held in the horizontal playing position.</li>
          <li>Flag Rings: Flag rings on the bell provide a convenient way to attach flags that enhance to the atmosphere at colorful ceremonies.</li>
          <li>Case: TRC-6330F</li></ul></td></tr>
          <tr><td><p><u>Specifications: </u></p>
          <ul><li>Key: Bb</li>
          <li>Bell Material: Two piece, Yellow brass</li>
          <li>Bell Diameter: 123mm (4-7/8")</li>
          <li>Bore Size: ML 11.65mm (0.459")</li>
          <li>Weight: Medium</li>
          <li>Finish: Gold lacquer</li>
          <li>Mouthpiece: TR-14B4</li>
          <li>Case: Included	</li><ul></td></tr>
          <tr><td><p><u>Description: </u></p>
          This herald (fanfare) trumpet will add a touch of glamour to ceremonies and events with its unique appearance and brilliant, well-defined tone. 
          Playing resistance and projection have been optimized for outdoor playing, while improved balance, a newly designed water key on the bell crook, 
          and other refinements are built on Yamaha’s extensive experience at ceremonies and events around the globe.</td></tr>       
          <tr><td><p style="font-weight:bold;font-size:25px;">RM15,3820.00</p></td></tr>
          <tr>
            <td>
            <button class="add-to-cart-button" onclick="removeFromCart('Yamaha - Herald Trumpet YTR-6335F')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('Yamaha - Herald Trumpet YTR-6335F')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button></td>
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