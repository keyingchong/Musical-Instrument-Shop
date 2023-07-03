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
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/test/shop/shop.php">Shop</a>  /   <a href="/test/shop/keyboard.php">Keyboard</a>   /   <a href="/test/pdetails/keyboard/casio2.php">Casio SA-76 (44 key) Mini Keyboard</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/casio2_1.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/casio2_2.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/casio2_3.jpeg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/casio2_4.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/casio2_5.jpg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/casio2_1.jpg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/casio2_2.jpg" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/casio2_3.jpeg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/casio2_4.jpg" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/casio2_5.jpg" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table>
          <tr><th><h1>Casio SA-76 (44 key) Mini Keyboard</h1></th></tr>
          <tr><td><p><u>Features: </u></p>
          <ul><li>44 mini keys are great for younger players</li>
            <li>100 tones for exploration and discovery
            <li>50 rhythms provide opportunities to play along
            <li>10 built-in songs to get things started
            <li>LCD provides great visual navigation
            <li>Small, light, and very portable</li></ul></td></tr>
          <tr><td><p><u>Description: </u></p>
          The Casio SA-76 is a great starter keyboard for anyone wanting to learn to play. With 44 keys, the Casio SA-76 has all the essentials for 
          first-time players: 100 tones, 50 rhythms, and 10 integrated songs — plenty of options for exploration but not too many that will overwhelm 
          the beginning player. With an LSI sound source and 8-note polyphony, the Casio SA-76 delivers great sound quality. In addition, an LCD provides 
          an excellent visual guide for selecting different music options, including options for switching between piano and organ modes.</td></tr>       
          <tr><td><p style="font-weight:bold;font-size:25px;">RM375.00</p></td></tr>
          <tr>
            <td>
            <button class="add-to-cart-button" onclick="removeFromCart('Casio SA-76 (44 key) Mini Keyboard')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('Casio SA-76 (44 key) Mini Keyboard')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button></td>
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