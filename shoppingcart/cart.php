<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shopping Cart UI</title>
  <link rel="stylesheet" href="../styles/cart.css">
  <link rel="stylesheet" href="/test/styles/navigation.css">
  <link rel="stylesheet" href="/test/styles/includes.css">
</head>

<body>
  <div class="cart-background">
    <?php include("../includes/navigation.php") ?>
    <div class="title">Shopping Cart</div><br>

    <div class="cart-container">
      <table>
        <thead>
          <tr>
            <td>Action</td>
            <td>Image</td>
            <td>Product</td>
            <td>Quantity</td>
            <td>Total</td>
          </tr>
        </thead>

        <tbody id="cart-items">
          <!-- Dynamically generated rows for cart items will be added here -->
        </tbody>
      </table>
    </div>
    <br><br>
    <div class="cart-bottom">
      <div class="coupon">
        <div>
          <div class="subtitle">Coupon</div>
          <p>Enter your coupon code if you have one.</p>
          <div class="couponcode">
            <input type="text">
            <button>Apply Coupon</button>
          </div>
        </div>
      </div>

      <div class="total" id="cart-total">
        <div class="subtitle">Cart Total</div>
        <div class="detailsItem">
          <p>Subtotal</p>
          <p id="subtotal">RM 0.00</p>
        </div>
        <div class="detailsItem">
          <p>Shipping</p>
          <p>RM 20.00</p>
        </div>
        <hr width="100%">
        <div class="detailsItem">
          <p>Total</p>
          <p id="cart-grand-total">RM 0.00</p>
        </div>
        <button><a href="payment.php">Checkout</a></button>
      </div>
    </div>
    <?php
    if (isset($_POST['remove'])) {
      $itemIndex = $_POST['itemIndex'];
      array_splice($cart, $itemIndex, 1);
      // Add the updated cart to local storage
      localStorage.setItem('cart', JSON.stringify($cart));
    }
    ?>

    <br>
  </div>
  <?php include("../includes/info.php") ?>
  <?php include("../includes/footer.php") ?>

  <script>
    // Retrieve cart data from local storage
    var cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Function to dynamically generate table rows for cart items
    function generateCartRows() {
      var cartItemsContainer = document.getElementById('cart-items');

      // Clear the existing rows
      cartItemsContainer.innerHTML = '';

      // Iterate over the cart items and generate a row for each item
      cart.forEach(function(item, index) {
        var row = document.createElement('tr');

        // Action column (Remove button)
        var removeColumn = document.createElement('td');
        var removeForm = document.createElement('form');
        removeForm.method = 'post';
        removeForm.action = '';
        var removeButton = document.createElement('button');
        removeButton.type = 'submit';
        removeButton.name = 'remove';
        removeButton.value = 'true';
        removeButton.innerHTML = '<u>Remove</u>';
        removeButton.id = 'removeButton-' + index;
        removeButton.onclick = function() {
          removeFromCart(index);
        };
        removeForm.appendChild(removeButton);
        var hiddenIndex = document.createElement('input');
        hiddenIndex.type = 'hidden';
        hiddenIndex.name = 'itemIndex';
        hiddenIndex.value = index;
        removeForm.appendChild(hiddenIndex);
        removeColumn.appendChild(removeForm);
        row.appendChild(removeColumn);

        // Image column
        var imageColumn = document.createElement('td');
        var image = document.createElement('img');
        image.src = item.image;
        image.alt = '';
        imageColumn.appendChild(image);
        row.appendChild(imageColumn);

        // Product column
        var productColumn = document.createElement('td');
        var productName = document.createElement('h5');
        productName.textContent = item.productName;
        productColumn.appendChild(productName);
        row.appendChild(productColumn);

        // Quantity column
        var quantityColumn = document.createElement('td');
        var quantityInput = document.createElement('input');
        quantityInput.type = 'number';
        quantityInput.value = item.quantity;
        quantityInput.min = '1';
        quantityInput.max = '100';
        quantityColumn.appendChild(quantityInput);
        row.appendChild(quantityColumn);

        // Total column
        var totalColumn = document.createElement('td');
        var totalAmount = document.createElement('h5');
        totalAmount.textContent = item.pricing;
        totalColumn.appendChild(totalAmount);
        row.appendChild(totalColumn);

        // Append the row to the table body
        cartItemsContainer.appendChild(row);
      });
    }

    // Call the function to generate cart rows
    generateCartRows();

    // Function to calculate and update the cart total amounts
    function updateCartTotal() {
      var subtotal = 0;

      // Calculate the subtotal
      cart.forEach(function(item) {
        subtotal += parseFloat(item.total.replace(/[^0-9.-]+/g, ''));
      });

      // Calculate the total (subtotal + shipping)
      var shipping = 20.00;
      var total = subtotal + shipping;

      // Update the subtotal and total amounts in the UI
      document.getElementById('subtotal').textContent = 'RM ' + subtotal.toFixed(2);
      document.getElementById('cart-grand-total').textContent = 'RM ' + total.toFixed(2);
    }

    // Call the function to update the cart total amounts
    updateCartTotal();

    // Function to remove an item from the cart
    function removeFromCart(index) {
      cart.splice(index, 1);
      localStorage.setItem('cart', JSON.stringify(cart));
      generateCartRows();
      updateCartTotal();
    }
  </script>
</body>
</html>
