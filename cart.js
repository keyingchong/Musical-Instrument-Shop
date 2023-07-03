// Function to add an item to the shopping cart
function addToCart(itemName, itemImage, itemPrice) {
  // Check if the cart exists in the browser's local storage
  let cart = localStorage.getItem('cart');
  if (!cart) {
    // If the cart doesn't exist, create an empty array
    cart = [];
  } else {
    // If the cart exists, parse it from JSON to an array
    cart = JSON.parse(cart);
  }

  // Add the item to the cart array with a unique identifier
  cart.push({
    productName: itemName,
    itemId: Date.now(),
    image: itemImage,
    pricing: itemPrice
  });

  // Save the updated cart back to local storage
  localStorage.setItem('cart', JSON.stringify(cart));

  // Display a success message
  alert('Item added to cart!');
}


// Function to remove an item from the shopping cart
function removeFromCart(itemName) {
  // Get the cart from local storage
  let cart = localStorage.getItem('cart');
  if (cart) {
    // Parse the cart from JSON to an array
    cart = JSON.parse(cart);

    // Find the index of the item in the cart array
    const index = cart.findIndex(item => item.productName === itemName);
    if (index !== -1) {
      // Remove the item from the cart array
      cart.splice(index, 1);

      // Save the updated cart back to local storage
      localStorage.setItem('cart', JSON.stringify(cart));

      // Display a success message
      alert('Item removed from cart!');

      // Refresh the page to reflect the updated cart
      location.reload();

      return;
    }
  }

  // Display an error message if the item is not found in the cart
  alert('Item not found in cart!');
}


