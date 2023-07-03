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
		
		<h2>Trumpet</h2>

		<div class="instrument-list">
			<div class="instrument">
				<a href="/test/pdetails/trumpet/jupiter1.php">
					<div class="pic"><img src="/test/images/jupiter1_1.jpg" width="350px" height="400px" alt="Trumpet"></div>
				</a>
				<div class="rating">★★★★★</div><br>
				<div class="model">JUPITER 1100 SERIES JTR100Q TRUMPET</div>
				<h3 class="instrument-name">Trumpet</h3><br>
				<div class="pricing">RM4, 927.50</div>
				<p class="instrument-status">In Stock</p>
				<a href="/test/shoppingcart/cart.php">
					<div class="buttons">
					<button class="add-to-cart-button" onclick="addToCart('JUPITER 1100 SERIES JTR100Q TRUMPET')">Add to Cart</button>
          			<button class="add-to-cart-button" onclick="removeFromCart('JUPITER 1100 SERIES JTR100Q TRUMPET')">Remove from Cart</button>
					</div>
				</a>
			</div>
		
			<div class="instrument">
				<a href="/test/pdetails/trumpet/jupiter2.php">
					<div class="pic"><img src="/test/images/jupiter2_1.jpg" width="350px" height="400px" alt="Trumpet"></div>
				</a>
				<div class="rating">★★★★★</div><br>
				<div class="model">JUPITER 500 SERIES JTR500N BB TRUMPET</div>
				<h3 class="instrument-name">Trumpet</h3><br>
				<div class="pricing">RM3, 276</div>
				<p class="instrument-status">In Stock</p>
				<a href="/test/shoppingcart/cart.php">
					<div class="buttons">
					<button class="add-to-cart-button" onclick="addToCart('JUPITER 500 SERIES JTR500N BB TRUMPET')">Add to Cart</button>
          			<button class="add-to-cart-button" onclick="removeFromCart('JUPITER 500 SERIES JTR500N BB TRUMPET')">Remove from Cart</button>
					</div>
				</a>
			</div>
		
			<div class="instrument">
				<a href="/test/pdetails/trumpet/aeolus.php">
					<div class="pic"><img src="/test/images/taeolus1.jpg" width="400px" height="200px" alt="Trumpet" style="margin-top:201px;"></div>
				</a>
				<div class="rating">★★★★★</div><br>
				<div class="model">Aeolus Bb Trumpet N°500</div>
				<h3 class="instrument-name">Trumpet</h3><br>
				<div class="pricing">RM1, 299</div>
				<p class="instrument-status">In Stock</p>
				<a href="/test/shoppingcart/cart.php">
					<div class="buttons">
					<button class="add-to-cart-button" onclick="addToCart('Aeolus Bb Trumpet N°500')">Add to Cart</button>
          			<button class="add-to-cart-button" onclick="removeFromCart('Aeolus Bb Trumpet N°500')">Remove from Cart</button>
					</div>
				</a>
			</div>

			<div class="instrument">
				<a href="/test/pdetails/trumpet/yamaha1.php">
					<div class="pic"><img src="/test/images/tyamaha1_2.jpg" width="350px" height="400px" alt="Trumpet"></div>
				</a>
				<div class="rating">★★★★★</div><br>
				<div class="model">Yamaha YTR-2330 Standard Gold Bb Trumpet (YTR2330)</div>
				<h3 class="instrument-name">Trumpet</h3><br>
				<div class="pricing">RM2, 399</div>
				<p class="instrument-status">In Stock</p>
				<a href="/test/shoppingcart/cart.php">
					<div class="buttons">
					<button class="add-to-cart-button" onclick="addToCart('Yamaha YTR-2330 Standard Gold Bb Trumpet (YTR2330)')">Add to Cart</button>
          			<button class="add-to-cart-button" onclick="removeFromCart('Yamaha YTR-2330 Standard Gold Bb Trumpet (YTR2330)')">Remove from Cart</button>
					</div>
				</a>
			</div>
		
			<div class="instrument">
				<a href="/test/pdetails/trumpet/yamaha2.php">
					<div class="pic"><img src="/test/images/tyamaha2_1.jpg" width="350px" height="400px" alt="Trumpet"></div>
				</a>
				<div class="rating">★★★★★</div><br>
				<div class="model">Herald Trumpet YTR-6335F</div>
				<h3 class="instrument-name">Trumpet</h3><br>
				<div class="pricing">RM15, 382.11</div>
				<p class="instrument-status">In Stock</p>
				<a href="/test/shoppingcart/cart.php">
					<div class="buttons">
					<button class="add-to-cart-button" onclick="addToCart('Herald Trumpet YTR-6335F')">Add to Cart</button>
          			<button class="add-to-cart-button" onclick="removeFromCart('Herald Trumpet YTR-6335F')">Remove from Cart</button>
					</div>
				</a>
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

