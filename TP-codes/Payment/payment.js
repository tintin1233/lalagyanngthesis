document.addEventListener('DOMContentLoaded', () => {
    const cartItemsContainer = document.querySelector('.cart-items');
    const cartSummaryContainer = document.querySelector('.cart-summary'); // Container for cart summary
    const placeOrderButton = document.querySelector('.submit-btn'); // Place Order button
    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

    displayCartItems(cartItems);

    function displayCartItems(cartItems) {
        // ... (unchanged)

        displayCartSummary(cartItems);
    }

    function displayCartSummary(cartItems) {
        // ... (unchanged)
    }

    // Add event listener to Place Order button
    placeOrderButton.addEventListener('click', (event) => {
        event.preventDefault(); // Prevent the default form submission behavior

        // Retrieve shipping information from the form
        const amount = document.getElementById('amount-paid').value;
        const date = document.getElementById('date').value;
        const name = document.getElementById('name').value;
        const address = document.getElementById('address').value;
        const email = document.getElementById('email').value;
        const paymentMethod = document.getElementById('payment').value;

        // Save shipping information to localStorage
        const shippingInfo = { amount, date, name, address, email, paymentMethod };
        localStorage.setItem('shippingInfo', JSON.stringify(shippingInfo));

        // Redirect to the Receipt.html page
        window.location.href = 'Receipt.html';
    });
});

