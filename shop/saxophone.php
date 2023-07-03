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
		
		<h2>Saxophone</h2>

		<div class="instrument-list">
			<div class="instrument">
				<a href="/test/pdetails/saxophone/aeolus1.php">
					<div class="pic"><img src="/test/images/aeolus1_1.png" width="350px" height="400px" alt="Saxophone"></div>
				</a>
				<div class="rating">★★★★★</div><br>
				<div class="model">Aeolus Curved Soprano Saxophone N°500</div>
				<h3 class="instrument-name">Saxophone</h3><br>
				<div class="pricing">RM3, 990</div>
				<p class="instrument-status">In Stock</p>
				<a href="/test/shoppingcart/cart.php">
					<div class="buttons">
					<button class="add-to-cart-button" onclick="addToCart('Aeolus Curved Soprano Saxophone N°500')">Add to Cart</button>
          			<button class="add-to-cart-button" onclick="removeFromCart('Aeolus Curved Soprano Saxophone N°500')">Remove from Cart</button>
					</div>
				</a>
			</div>
		
			<div class="instrument">
				<a href="/test/pdetails/saxophone/buffet.php">
					<div class="pic"><img src="/test/images/buffet1.jpg" width="350px" height="400px" alt="Saxophone"></div>
				</a>
				<div class="rating">★★★★★</div><br>
				<div class="model">Buffet Crampon Alto 8101 </div>
				<h3 class="instrument-name">Saxophone</h3><br>
				<div class="pricing">RM3, 490</div>
				<p class="instrument-status">In Stock</p>
				<a href="/test/shoppingcart/cart.php">
					<div class="buttons">
					<button class="add-to-cart-button" onclick="addToCart('Buffet Crampon Alto 8101')">Add to Cart</button>
          			<button class="add-to-cart-button" onclick="removeFromCart('Buffet Crampon Alto 8101')">Remove from Cart</button>
					</div>
				</a>
			</div>
		
			<div class="instrument">
				<a href="/test/pdetails/saxophone/aeolus2.php">
					<div class="pic"><img src="/test/images/aeolus2_1.jpg" width="350px" height="400px" alt="Saxophone"></div>
				</a>
				<div class="rating">★★★★★</div><br>
				<div class="model">Aeolus Tenor Saxophone N°950</div>
				<h3 class="instrument-name">Saxophone</h3><br>
				<div class="pricing">RM5, 490</div>
				<p class="instrument-status">In Stock</p>
				<a href="/test/shoppingcart/cart.php">
					<div class="buttons">
					<button class="add-to-cart-button" onclick="addToCart('Aeolus Tenor Saxophone N°950')">Add to Cart</button>
          			<button class="add-to-cart-button" onclick="removeFromCart('Aeolus Tenor Saxophone N°950')">Remove from Cart</button>
					</div>
				</a>
			</div>
		
			<div class="instrument">
				<a href="/test/pdetails/saxophone/singer.php">
					<div class="pic"><img src="/test/images/singer1.jpg" width="350px" height="400px" alt="Saxophone"></div>
				</a>
				<div class="rating">★★★★★</div><br>
				<div class="model">Singer's day SDBS-2001 Baritone Saxophone</div>
				<h3 class="instrument-name">Saxophone</h3><br>
				<div class="pricing">RM9, 990</div>
				<p class="instrument-status">In Stock</p>
				<a href="/test/shoppingcart/cart.php">
					<div class="buttons">
					<button class="add-to-cart-button" onclick="addToCart('Singers day SDBS-2001 Baritone Saxophone')">Add to Cart</button>
          			<button class="add-to-cart-button" onclick="removeFromCart('Singers day SDBS-2001 Baritone Saxophone')">Remove from Cart</button>
					</div>
				</a>
			</div>
		
			<div class="instrument">
				<a href="/test/pdetails/saxophone/yamaha.php">
					<div class="pic"><img src="/test/images/syamaha1.jpg" width="200px" height="450px" alt="Saxophone"></div>
				</a>
				<div class="rating">★★★★★</div><br>
				<div class="model">Yamaha Alto YAS-280</div>
				<h3 class="instrument-name">Saxophone</h3><br>
				<div class="pricing">RM6, 499</div>
				<p class="instrument-status">In Stock</p>
				<a href="/test/shoppingcart/cart.php">
					<div class="buttons">
					<button class="add-to-cart-button" onclick="addToCart('Yamaha Alto YAS-280')">Add to Cart</button>
          			<button class="add-to-cart-button" onclick="removeFromCart('Yamaha Alto YAS-280')">Remove from Cart</button>
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
