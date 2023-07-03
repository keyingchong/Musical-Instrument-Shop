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
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/test/shop/shop.php">Shop</a>  /   <a href="/test/shop/guitar.php">Guitar</a>   /   <a href="/test/pdetails/guitar/naga.php">Naga - Sungha Jung “Light Series” – S-10 GAC</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/naga1.jpeg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/naga2.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/naga3.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/naga4.jpeg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/naga5.jpg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/naga1.jpeg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/naga2.jpg" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/naga3.jpg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/naga4.jpeg" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/naga5.jpg" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table>
          <tr><th><h1>Naga - Sungha Jung “Light Series”:S-10 GAC</h1></th></tr>
          <tr><td>Body: Grand Auditorium</td></tr>
          <tr><td>Top: Solid Engelmann Spruce</td></tr>
          <tr><td>Back & Sides: Sapele</td></tr>
          <tr><td>Neck: Okoume</td></tr>
          <tr><td>Fretboard: Richlite</td></tr>
          <tr><td>Bridge: Richlite</td></tr>
          <tr><td>Rosette: Abalone & Safflower Pear</td></tr>
          <tr><td>Fretboard Binding: Abalone $ Safflower Pear</td></tr>
          <tr><td>Side Binding: Maple</td></tr>
          <tr><td>String: D’addario EXP16</td></tr>
          <tr><td>Nut & Saddle: Buffalo Bone</td></tr>
          <tr><td><p>Description: </p></td></tr>
          <tr><td>The New Sungha Jung Series guitars by Naga Guitars with ORIGINAL Sungha Jung Signature on the Inlet Paper.</td></tr>       
          <tr><td><p style="font-weight:bold;font-size:25px;">RM1,550.00</p></td></tr>
          <tr>
            <td>
            <button class="add-to-cart-button" onclick="removeFromCart('Sungha Jung “Light Series”:S-10 GAC')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('Sungha Jung “Light Series”:S-10 GAC')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button></td>
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