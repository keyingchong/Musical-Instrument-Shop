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
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/test/shop/shop.php">Shop</a>  /   <a href="/test/shop/saxophone.php">Saxophone</a>   /   <a href="/test/pdetails/saxophone/yamaha.php">Yamaha Alto YAS-280</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/yamaha1.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/yamaha2.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/yamaha3.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/yamaha4.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/yamaha5.jpg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/yamaha1.jpg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/yamaha2.jpg" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/yamaha3.jpg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/yamaha4.jpg" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/yamaha5.jpg" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table>
          <tr><th><h1>Yamaha Alto YAS-280</h1></th></tr>
          <tr><td><p><u>Description: </u></p>
          <ul><li>New neck receiver with a durable screw: A redesigned neck receiver promotes a quick response and ease 
            of play while also increasing the durability of the mechanism.
          <li>Improved Low B-C# connection: An improved mechanism from low B-C# ensures the consistent closing of 
            the low C# key and promotes a clear response from notes in the low range of the instrument.
          <li>Adjustable thumb-rest: All Yamaha saxophones feature an adjustable thumb-rest to allow for precise and 
            comfortable hand and fingering position.</ul></li></td></tr>
          <tr><td><p><u>Overview </u></p>
          The 280 saxophones provide beginners with a reliable instrument to start playing on. They offer a 
            characteristically bright saxophone sound with excellent intonation and some surprisingly high-quality 
            features for an entry-level instrument.</td></tr>       
          <tr><td><p style="font-weight:bold;font-size:25px;">RM6,499.00</p></td></tr>
          <tr>
            <td>
            <button class="add-to-cart-button" onclick="removeFromCart('Yamaha Alto YAS-280')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('Yamaha Alto YAS-280')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button></td>
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