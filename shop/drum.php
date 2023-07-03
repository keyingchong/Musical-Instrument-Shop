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
		
		<h2>Drum</h2>

		<div class="instrument-list">
			<div class="instrument">
				<a href="/test/pdetails/drum/alesis1.php">
					<div class="pic"><img src="/test/images/alesis1_2.jpg" width="300px" height="350px" alt="Drum"></div>
				</a>
				<div class="rating">★★★★★</div><br>
				<div class="model">Alesis Surge Mesh Special Edition Electronic Drum Kit</div>
				<h3 class="instrument-name">Drum</h3><br>
				<div class="pricing">RM2, 555</div>
				<p class="instrument-status">In Stock</p>
				<a href="/test/shoppingcart/cart.php">
					<div class="buttons">
					<button class="add-to-cart-button" onclick="addToCart('Alesis Surge Mesh Special Edition Electronic Drum Kit')">Add to Cart</button>
          			<button class="add-to-cart-button" onclick="removeFromCart('Alesis Surge Mesh Special Edition Electronic Drum Kit')">Remove from Cart</button>
					</div>
				</a>
			</div>
		
			<div class="instrument">
				<a href="/test/pdetails/drum/alesis2.php">
					<div class="pic"><img src="/test/images/alesis2_1.jpg" width="300px" height="350px" alt="Drum"></div>
				</a>
				<div class="rating">★★★★★</div><br>
				<div class="model">Alesis Nitro Mesh Electronic Drum Kit</div>
				<h3 class="instrument-name">Drum</h3><br>
				<div class="pricing">RM2, 145</div>
				<p class="instrument-status">In Stock</p>
				<a href="/test/shoppingcart/cart.php">
					<div class="buttons">
					<button class="add-to-cart-button" onclick="addToCart('Alesis Nitro Mesh Electronic Drum Kit')">Add to Cart</button>
          			<button class="add-to-cart-button" onclick="removeFromCart('Alesis Nitro Mesh Electronic Drum Kit')">Remove from Cart</button>
					</div>
				</a>
			</div>
		
			<div class="instrument">
				<a href="/test/pdetails/drum/ludwig1.php">
					<div class="pic"><img src="/test/images/ludwig1_1.jpg" width="300px" height="350px" alt="Drum"></div>
				</a>
				<div class="rating">★★★★★</div><br>
				<div class="model">Ludwig LE522010 Evolution 5-Piece Drum Kit w/Hardware, Cherry</div>
				<h3 class="instrument-name">Drum</h3><br>
				<div class="pricing">RM3, 050</div>
				<p class="instrument-status">In Stock</p>
				<a href="/test/shoppingcart/cart.php">
					<div class="buttons">
					<button class="add-to-cart-button" onclick="addToCart('Ludwig LE522010 Evolution 5-Piece Drum Kit w/Hardware, Cherry')">Add to Cart</button>
          			<button class="add-to-cart-button" onclick="removeFromCart('Ludwig LE522010 Evolution 5-Piece Drum Kit w/Hardware, Cherry')">Remove from Cart</button>
					</div>
				</a>
			</div>
		
			<div class="instrument">
				<a href="/test/pdetails/drum/ludwig2.php">
					<div class="pic"><img src="/test/images/ludwig2_1.jpg" width="300px" height="350px" alt="Drum"></div>
				</a>
				<div class="rating">★★★★★</div><br>
				<div class="model">Ludwig LC2791 Breakbeats by Questlove 4-Piece Drum Kit w/ Bag, Black Sparkle</div>
				<h3 class="instrument-name">Drum</h3><br>
				<div class="pricing">RM2, 395</div>
				<p class="instrument-status">In Stock</p>
				<a href="/test/shoppingcart/cart.php">
					<div class="buttons">
					<button class="add-to-cart-button" onclick="addToCart('Ludwig LC2791 Breakbeats by Questlove 4-Piece Drum Kit w/ Bag, Black Sparkle')">Add to Cart</button>
          			<button class="add-to-cart-button" onclick="removeFromCart('Ludwig LC2791 Breakbeats by Questlove 4-Piece Drum Kit w/ Bag, Black Sparkle')">Remove from Cart</button>
					</div>
				</a>
			</div>
		
			<div class="instrument">
				<a href="/test/pdetails/drum/ludwig3.php">
					<div class="pic"><img src="/test/images/ludwig3_1.jpg" width="300px" height="350px" alt="Drum"></div>
				</a>
				<div class="rating">★★★★★</div><br>
				<div class="model">Ludwig LN24233TXB3 Neusonic 3-Piece Shell Pack (22B+13T+16F), Satin Wood</div>
				<h3 class="instrument-name">Drum</h3><br>
				<div class="pricing">RM6, 990</div>
				<p class="instrument-status">In Stock</p>
				<a href="/test/shoppingcart/cart.php">
					<div class="buttons">
					<button class="add-to-cart-button" onclick="addToCart('Ludwig LN24233TXB3 Neusonic 3-Piece Shell Pack (22B+13T+16F), Satin Wood')">Add to Cart</button>
          			<button class="add-to-cart-button" onclick="removeFromCart('Ludwig LN24233TXB3 Neusonic 3-Piece Shell Pack (22B+13T+16F), Satin Wood')">Remove from Cart</button>
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

