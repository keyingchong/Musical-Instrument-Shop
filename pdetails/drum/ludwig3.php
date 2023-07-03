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
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/test/shop/shop.php">Shop</a>  /   <a href="/test/shop/drum.php">Drum</a>   /   <a href="/test/pdetails/drum/ludwig3.php">Ludwig LN24233TXB3 Neusonic 3-Piece Shell Pack (22B+13T+16F), Satin Wood</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/ludwig3_1.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/ludwig3_2.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/ludwig3_3.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/ludwig3_4.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/ludwig3_5.jpg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/ludwig3_1.jpg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/ludwig3_2.jpg" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/ludwig3_3.jpg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/ludwig3_4.jpg" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/ludwig3_5.jpg" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table>
          <tr><th><h1>Ludwig LN24233TXB3 Neusonic 3-Piece Shell Pack (22B+13T+16F), Satin Wood</h1></th></tr>
          <tr><td><p><u>Features: </u><p>
          <ul><li>Shell: 5 mm, 6-ply crossover shell made up of a 3-ply maple exterior and 3-ply cherry interior</li>
          <li>Produced using Radio Frequency Technology</li>
          <li>Single 45-degree bearing edge with a 1/16" back cut</li>
          <li>Made in Monroe, NC USA</li></ul></td></tr>
          <tr><td><p><u>Configurations: </u></p>
          <ul><li>22" x 14" Bass Drum</li>
          <li>13" x 9" Tom Tom</li>
          <li>16" x 16" Floor Tom</li></ul></td></tr>
          <tr><td><p><u>Description: </u></p>
          <p>The latest era of Ludwig's award-winning Neusonic series drums is here! Designed for the high-velocity working professional, Neusonic offers sonic versatility, durable 
            deluxe finishes, and lightweight portability. This new era features brand-new finishes, configurations, hardware appointments, and components. </p>
          <p>They feature Ludwig's cross-over shell design blending a 3-ply maple exterior with a 3-ply cherry interior. NeuSonic captures the traditional Ludwig aesthetics coupled with a brand-new sound
             that will complement a wide range of performance settings. The industry's best-in-class USA-made drum set.</p>
          <tr><td><p style="font-weight:bold;font-size:25px;">RM6,990.00</p></td></tr>
          <tr>
            <td>
            <button class="add-to-cart-button" onclick="removeFromCart('Ludwig LN24233TXB3 Neusonic 3-Piece Shell Pack (22B+13T+16F), Satin Wood')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('Ludwig LN24233TXB3 Neusonic 3-Piece Shell Pack (22B+13T+16F), Satin Wood')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button></td>
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