<style>
  form.example input[type=text] {
  padding: 10px;
  font-size: 14px;
  border: 2px solid rgb(59,2,90);
  border-radius:30px;
  float: left;
  width: 100%;
  background: none;
}



form.example::after {
  content: "";
  clear: both;
  display: table;
}

</style>
<nav>
  <ul>
    <li><a href="/test"><img src="/test/images/logo.png" style="width:250px;heigh:200px;"></a></li>
    <li><a href="/test">Home</a></li>
    <li class="dropdown">
      <a href="/test/shop/shop.php">Shop<span class="caret"></span></a>
      <ul>
        <li><a href="/test/shop/guitar.php">Guitars</a></li>
        <li><a href="/test/shop/drum.php">Drums</a></li>
        <li><a href="/test/shop/keyboard.php">Keyboards</a></li>
        <li><a href="/test/shop/saxophone.php">Saxophones</a></li>
        <li><a href="/test/shop/trumpet.php">Trumpets</a></li>
      </ul>
    </li>
    <li><a href="/test/contact.php">Contact Us</a></li>
    <li><form class="example" action="action_page.php">
			<input type="text" placeholder="Search.." name="search">
		</form>
	</li>
    <li><a href="/test/account/login.php"><img src="/test/images/user.png" alt="User">Login</a></li>
    <li><a href="/test/shoppingcart/cart.php"><img src="/test/images/bag.png" alt="Shopping Bag">Cart</a></li>
  </ul>
</nav>