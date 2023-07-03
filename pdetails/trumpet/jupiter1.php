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
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/test/shop/shop.php">Shop</a>  /   <a href="/test/shop/trumpet.php">Trumpet</a>   /   <a href="/test/pdetails/trumpet/jupiter1.php">JUPITER 1100 SERIES JTR100Q TRUMPET</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/jupiter1_1.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/jupiter1_2.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/jupiter1_3.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/jupiter1_4.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/jupiter1_5.jpg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/jupiter1_1.jpg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/jupiter1_2.jpg" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/jupiter1_3.jpg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/jupiter1_4.jpg" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/jupiter1_5.jpg" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table>
          <tr><th><h1>JUPITER 1100 SERIES JTR100Q TRUMPET</h1></th></tr>
          <tr><td><p><u>Features: </u></p>
          <ul><li>Rose brass leadpipe warms the sound of the instrument and provides enhanced instrument longevity.</li>
          <li>A Reverse Leadpipe Configuration allows for a more free-blowing instrument giving the performer greater freedom of expression.</li></ul></td></tr>
          <tr><td><p><u>Specifications: </u></p>
          <ul><li>Key of Bb</li>
          <li>Laqured Yellow Brass Body</li>
          <li>4.8" Bell</li>
          <li>Monel Pistons</li>
          <li>.460" Bore</li>
          <li>3rd Valve Slide Throw Ring and Stop</li>
          <li>1st Valve Slide Thumb Saddle</li>
          <li>Backpack Softcase</li></ul></td></tr>
          <tr><td><p><u>Description: </u></p>
          The Jupiter 1100 intermediate Bb trumpet is a great-sounding, easy-playing trumpet with solid intonation and has features 
          that are often solely found on professional-level instruments. With its less-resistant reverse leadpipe, it is suitable for students
          and professionals alike.</td></tr>       
          <tr><td><p style="font-weight:bold;font-size:25px;">RM4,927.50</p></td></tr>
          <tr>
            <td>
            <button class="add-to-cart-button" onclick="removeFromCart('JUPITER 1100 SERIES JTR100Q TRUMPET')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('JUPITER 1100 SERIES JTR100Q TRUMPET')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button></td>
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