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
		
		<h2>Keyboard</h2>

		<div class="instrument-list">
			<div class="instrument">
				<a href="/test/pdetails/keyboard/casio1.php">
					<div class="pic"><img src="/test/images/casio1_1.jpg" width="300px" height="100px"alt="Keyboard"></div>
				</a>
				<div class="rating">★★★★★</div><br>
				<div class="model">Casio LK-$450 (61 key)Arranger Keyboard</div>
				<h3 class="instrument-name">Keyboard</h3><br>
				<div class="pricing">RM1, 699</div>
				<p class="instrument-status">In Stock</p>
				<a href="/test/shoppingcart/cart.php">
					<div class="buttons">
					<button class="add-to-cart-button" onclick="addToCart('Casio LK-$450 (61 key)Arranger Keyboard')">Add to Cart</button>
          			<button class="add-to-cart-button" onclick="removeFromCart('Casio LK-$450 (61 key)Arranger Keyboard')">Remove from Cart</button>
					</div>
				</a>
			</div>
		
			<div class="instrument">
				<a href="/test/pdetails/keyboard/yamaha.php">
					<div class="pic"><img src="/test/images/yamaha1.jpg" width="300px" height="100px" alt="Keyboard"></div>
				</a>
				<div class="rating">★★★★★</div><br>
				<div class="model">Yamaha MX-49 (49 key) Music Synthesizer</div>
				<h3 class="instrument-name">Keyboard</h3><br>
				<div class="pricing">RM2, 455</div>
				<p class="instrument-status">In Stock</p>
				<a href="/test/shoppingcart/cart.php">
					<div class="buttons">
					<button class="add-to-cart-button" onclick="addToCart('Yamaha MX-49 (49 key) Music Synthesizer')">Add to Cart</button>
          			<button class="add-to-cart-button" onclick="removeFromCart('Yamaha MX-49 (49 key) Music Synthesizer')">Remove from Cart</button>
					</div>
				</a>
			</div>
		
			<div class="instrument">
				<a href="/test/pdetails/keyboard/casio2.php">
					<div class="pic"><img src="/test/images/casio2_1.jpg" width="300px" height="100px" alt="Keyboard"></div>
				</a>
				<div class="rating">★★★★★</div><br>
				<div class="model">Casio SA-76 (44 key) Mini Keyboard</div>
				<h3 class="instrument-name">Keyboard</h3><br>
				<div class="pricing">RM375</div>
				<p class="instrument-status">In Stock</p>
				<a href="/test/shoppingcart/cart.php">
					<div class="buttons">
					<button class="add-to-cart-button" onclick="addToCart('Casio SA-76 (44 key) Mini Keyboard')">Add to Cart</button>
          			<button class="add-to-cart-button" onclick="removeFromCart('Casio SA-76 (44 key) Mini Keyboard')">Remove from Cart</button>
					</div>
				</a>
			</div>
	
			<div class="instrument">
				<a href="/test/pdetails/keyboard/bora.php">
					<div class="pic"><img src="/test/images/bora1.jpg" width="300px" height="100px" alt="Keyboard"></div>
				</a>
				<div class="rating">★★★★★</div><br>
				<div class="model">Bora BR-01(WHITE) Foldable Travel Digital Piano</div>
				<h3 class="instrument-name">Keyboard</h3><br>
				<div class="pricing">RM499</div>
				<p class="instrument-status">In Stock</p>
				<a href="/test/shoppingcart/cart.php">
					<div class="buttons">
					<button class="add-to-cart-button" onclick="addToCart('Bora BR-01(WHITE) Foldable Travel Digital Piano')">Add to Cart</button>
          			<button class="add-to-cart-button" onclick="removeFromCart('Bora BR-01(WHITE) Foldable Travel Digital Piano')">Remove from Cart</button>
					</div>
				</a>
			</div>
		
			<div class="instrument">
				<a href="/test/pdetails/keyboard/roland.php">
					<div class="pic"><img src="/test/images/roland1.jpg" width="300px" height="100px" alt="Keyboard"></div>
				</a>
				<div class="rating">★★★★★</div><br>
				<div class="model">Roland BK-15 (61 key) Arranger Workstation</div>
				<h3 class="instrument-name">Keyboard</h3><br>
				<div class="pricing">RM5, 090</div>
				<p class="instrument-status">In Stock</p>
				<a href="/test/shoppingcart/cart.php">
					<div class="buttons">
					<button class="add-to-cart-button" onclick="addToCart('>oland BK-15 (61 key) Arranger Workstation')">Add to Cart</button>
          			<button class="add-to-cart-button" onclick="removeFromCart('Roland BK-15 (61 key) Arranger Workstation')">Remove from Cart</button>
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

