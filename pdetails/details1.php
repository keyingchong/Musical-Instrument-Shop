<!DOCTYPE html>
<html>
  <head>
    <title>Product Details</title>
    <link rel="stylesheet" href="../styles/pdetail.css">
    <link rel="stylesheet" href="../styles/navigation.css">
    <link rel="stylesheet" href="../styles/includes.css">
    <script src="/test/cart.js"></script>	
  </head>
  <body>
    <div class="details-background">
      <?php include("../includes/navigation.php") ?>
      <p style="margin-left:20px;"><a href="../shop/shop.php">Shop</a>  /   <a href="">Guitar</a>   /   <a href="">abc</a></p>
      <br>
    <!-- Container for the image gallery -->

      <div class="detail-container">
        <div class="detail-slide">
            <img src="/test/images/home1.jpeg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/home2.jpeg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/home3.jpg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/home1.jpeg" style="width:100%">
        </div>

        <div class="detail-slide">
            <img src="/test/images/home2.jpeg" style="width:100%">
        </div>


      <!-- Thumbnail images -->
      <br>
        <div class="detail-row">
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/home1.jpeg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/home2.jpeg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/home3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/home1.jpeg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
          </div>
          <div class="detail-column">
            <img class="detail-cursor cursor" src="/test/images/home2.jpeg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
          </div>
        </div>
      </div>


      <div class="detail-container2">
        <table>
          <tr>
            <th>Product Name</th>
          </tr>
          <tr>
            <td><p>hello</p></td>
          </tr>
          <tr>
            <td><p>Price</p></td>
          </tr>
          <tr>
            <td><button type="submit" class="contact-btn">Submit</button></td>
          </tr>
        </table>
      </div>
      <br><br><br><br><br>
      <?php include("../includes/info.php") ?>
      <?php include("../includes/footer.php") ?>
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