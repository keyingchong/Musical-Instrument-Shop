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
      <p style="margin-left:51px;font-weight:bold;color:rgb(59,2,90);"><a href="/test/shop/shop.php">Shop</a>  /   <a href="/test/shop/guitar.php">Guitar</a>    /   <a href="/test/pdetails/guitar/anuenue.php">Anuenue - MTK Morelos Blue</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/anuenue1.jpeg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/anuenue2.jpeg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/anuenue3.jpeg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/anuenue4.jpeg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/anuenue5.jpg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/anuenue1.jpeg" style="width:100%" onclick="currentSlide(1)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/anuenue2.jpeg" style="width:100%" onclick="currentSlide(2)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/anuenue3.jpeg" style="width:100%" onclick="currentSlide(3)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/anuenue4.jpeg" style="width:100%" onclick="currentSlide(4)">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/anuenue5.jpg" style="width:100%" onclick="currentSlide(5)">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table>
          <tr><th><h1>Anuenue - MTK Morelos Blue</h1></th></tr>
          <tr><td>Size: Travel Size</td></tr>
          <tr><td>Top: Spruce</td></tr>
          <tr><td>Back & Sides: Mahogany</td></tr>
          <tr><td>Neck: Mahogany</td></tr>
          <tr><td>Bridge: Maple</td></tr>
          <tr><td>Machine Head: Gear Pegs</td></tr>
          <tr><td>Fretboard: Rosewood</td></tr>
          <tr><td>Number of Frets: 20</td></tr>
          <tr><td>Nut Width: 44mm</td></tr>
          <tr><td>String: D’addario EXP16</td></tr>
          <tr><td>Nut & Saddle: Synthetic Bone</td></tr>
          <tr><td>Binding: Maple</td></tr>
          <tr><td>Finish: Satin Natural</td></tr>
          <tr><td><p>Description: </p></td></tr>
		  <tr><td>The fascinating ocean world will always be a favorite amongst Kids and adults. The adventure to the ocean starts from your imagination, so let's explores 
		  the never-ending surprises and beauty of the underwater wolrd!</td></tr>       
		  <tr><td>The body uses natural Satin finish. Production of the body uses complicated procedures, so that the paint can be thin and transparent, and the 
		  surface is smooth and soft, and giving a more detailed handle to the instrument.</td></tr>     
		  <tr>
            <td><p style="font-weight:bold;font-size:25px;">RM1,650.00</p></td>
          </tr>
          <tr>
            <td>
              <button class="add-to-cart-button" onclick="removeFromCart('MTK Morelos Blue')"><img src="/test/images/bin.png" style="width:15px;height:15px;">Remove from Cart</button>
              <button class="add-to-cart-button" onclick="addToCart('MTK Morelos Blue')"><img src="/test/images/bag.png" style="width:15px;height:15px;">Add to Cart</button>
          </tr>
        </table>
      </div>
  
      <?php include("../../includes/info.php") ?>
      <?php include("../../includes/footer.php") ?>
    </div>
	<br><br><br><br><br><br><br><br>



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