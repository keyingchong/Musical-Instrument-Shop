<!DOCTYPE html>
<html>

<head>
  <title>Music Instruments List</title>
  <link rel="stylesheet" href="/test/styles/navigation.css">
  <link rel="stylesheet" href="/test/styles/shop.css">
  <link rel="stylesheet" href="/test/styles/includes.css">
  <script src="/test/cart.js"></script>	
</head>

<body>
  <div class="shop-background">
    <?php include("../includes/navigation.php") ?>
    <h1>Music Instruments List</h1>

    <h2>Guitar</h2>

    <div class="instrument-list">
      <div class="instrument">
        <a href="/test/pdetails/guitar/luthier.php">
          <div class="pic"><img src="/test/images/LeLightS_1.jpg" width="300px" height="450px" alt="Guitar"></div>
        </a>
        <div class="rating">★★★★★</div><br>
        <div class="model">Le Light S</div>
        <h3 class="instrument-name">Guitar</h3><br>
        <div class="pricing">RM1, 680</div>
        <p class="instrument-status">In Stock</p>
        <div class="buttons">
          <button class="add-to-cart-button" onclick="addToCart('Le Light S')">Add to Cart</button>
          <button class="add-to-cart-button" onclick="removeFromCart('Le Light S')">Remove from Cart</button>
        </div>
      </div>

      <div class="instrument">
        <a href="/test/pdetails/guitar/cort.php">
          <div class="pic"><img src="/test/images/cort2.jpg" width="300px" height="450px" alt="Guitar"></div>
        </a>
        <div class="rating">★★★★★</div><br>
        <div class="model">Cort Grand Regal GA5F-BW</div>
        <h3 class="instrument-name">Guitar</h3><br>
        <div class="pricing">RM1, 790</div>
        <p class="instrument-status">In Stock</p>
        <div class="buttons">
          <button class="add-to-cart-button" onclick="addToCart('Cort Grand Regal GA5F-BW')">Add to Cart</button>
          <button class="add-to-cart-button" onclick="removeFromCart('Cort Grand Regal GA5F-BW')">Remove from Cart</button>
        </div>
      </div>

      <div class="instrument">
        <a href="/test/pdetails/guitar/naga.php">
          <div class="pic"><img src="/test/images/naga2.jpg" width="300px" height="450px" alt="Guitar"></div>
        </a>
        <div class="rating">★★★★★</div><br>
        <div class="model">Sungha Jung “Light Series”–S-10 GAC</div>
        <h3 class="instrument-name">Guitar</h3><br>
        <div class="pricing">RM1, 550</div>
        <p class="instrument-status">In Stock</p>
        <div class="buttons">
          <button class="add-to-cart-button" onclick="addToCart('Sungha Jung “Light Series”–S-10 GAC')">Add to Cart</button>
          <button class="add-to-cart-button" onclick="removeFromCart('Sungha Jung “Light Series”–S-10 GAC')">Remove from Cart</button>
        </div>
      </div>

      <div class="instrument">
        <a href="/test/pdetails/guitar/taylor.php">
          <div class="pic"><img src="/test/images/taylor1.jpg" width="300px" height="450px" alt="Guitar"></div>
        </a>
        <div class="rating">★★★★★</div><br>
        <div class="model">Taylor TSBTe TAYLOR SWIFT Model</div>
        <h3 class="instrument-name">Guitar</h3><br>
        <div class="pricing">RM1, 690</div>
        <p class="instrument-status">In Stock</p>
        <div class="buttons">
          <button class="add-to-cart-button" onclick="addToCart('Taylor TSBTe TAYLOR SWIFT Model')">Add to Cart</button>
          <button class="add-to-cart-button" onclick="removeFromCart('Taylor TSBTe TAYLOR SWIFT Model')">Remove from Cart</button>
        </div>
      </div>

      <div class="instrument">
        <a href="/test/pdetails/guitar/anuenue.php">
          <div class="pic"><img src="/test/images/anuenue1.jpeg" width="300px" height="450px" alt="Guitar"></div>
        </a>
        <div class="rating">★★★★★</div><br>
        <div class="model">MTK Morelos Blue</div>
        <h3 class="instrument-name">Guitar</h3><br>
        <div class="pricing">RM1, 650</div>
        <p class="instrument-status">In Stock</p>
        <div class="buttons">
          <button class="add-to-cart-button" onclick="addToCart('MTK Morelos Blue')">Add to Cart</button>
          <button class="add-to-cart-button" onclick="removeFromCart('MTK Morelos Blue')">Remove from Cart</button>
        </div>
      </div>
    </div>

    <div class="pagination">
      <a href="#" class="page-link active" onclick="showPage(1)">1</a>
    </div>

    <script>
      function showPage(pageNum) {
        var pages = document.getElementsByClassName("instrument-list");
        for (var i = 0; i < pages.length; i++) {
          pages[i].style.display = "none";
        }
        pages[pageNum - 1].style.display = "flex";

        var links = document.getElementsByClassName("page-link");
        for (var i = 0; i < links.length; i++) {
          links[i].classList.remove("active");
        }
        links[pageNum - 1].classList.add("active");
      }

      showPage(1);
    </script>

    <br>
    <?php include("../includes/info.php") ?>
    <?php include("../includes/footer.php") ?>

  </div>

</body>

</html>
