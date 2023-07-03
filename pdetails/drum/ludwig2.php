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
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/test/shop/shop.php">Shop</a>  /   <a href="/test/shop/drum.php">Drum</a>   /   <a href="/test/pdetails/drum/ludwig2.php">Ludwig LC2791 Breakbeats by Questlove 4-Piece Drum Kit w/ Bag, Black Sparkle</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/ludwig2_1.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/ludwig2_2.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/ludwig2_3.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/ludwig2_4.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/ludwig2_5.jpg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/ludwig2_1.jpg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/ludwig2_2.jpg" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/ludwig2_3.jpg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/ludwig2_4.jpg" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/ludwig2_5.jpg" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table style="margin-bottom: 50px;">
          <tr><th><h1>Ludwig LC2791 Breakbeats by Questlove 4-Piece Drum Kit w/ Bag, Black Sparkle</h1></th></tr>
          <tr><td><p><u>Features: </u><p>
          <ul><li>7-ply Hardwood shells</li>
          <li>45-Degree Bearing edges</li>
          <li>Remo Pinstripe heads</li>
          <li>Included multi-purpose bags for easy transport, and drum muting. Improved tom brackets with suspension mount for toms.</li></ul></td></tr>
          <tr><td><p><u>Configurations: </u></p>
          <ul><li>14" x 16" Bass Drum</li>
          <li>5" x 14" Snare Drum</li>
          <li>7" x 10" Tom Tom</li>
          <li>13" x 13" Tom Tom</li></ul></td></tr>
          <tr><td><p><u>Description: </u></p>
          <p>Breakbeats were designed with the city in mind. Positioned on a riser for optimum reach, its compact 14x16" bass drum, 7x10" tom, and 13x13" floor 
          tom creates a set-up for sculpting grooves in tight spaces. It features Remo Pinstripe heads for pro-level tones, and comes with multi-purpose bags for easy transport, and drum muting.</p>
          <p>The tonal centre of Breakbeats is a 5x14" matching wood snare drum. Create beats on the fly and make your voice heard at gigs, on the street, or in rehearsal.</p>
          <p>Fitted with Remo's heads, Breakbeats' 7-ply hardwood shells play like a full-sized kit; fusing low-end kick punch with focused tom and snare midrange.</p>
          <p>Packable, stackable, and portable, Breakbeats' compact size and included storage bags make it ideal for the drummer on the move. Play it wide open or instantly change volume and tone by 
            draping each bag over each drum.</p>
          <tr><td><p style="font-weight:bold;font-size:25px;">RM2,395.00</p></td></tr>
          <tr>
            <td>
            <button class="add-to-cart-button" onclick="removeFromCart('Ludwig LC2791 Breakbeats by Questlove 4-Piece Drum Kit w/ Bag, Black Sparkle')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('Ludwig LC2791 Breakbeats by Questlove 4-Piece Drum Kit w/ Bag, Black Sparkle')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button></td>
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