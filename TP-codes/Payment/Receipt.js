document.addEventListener('DOMContentLoaded', () => {
    const shippingInfoContainer = document.getElementById('shipping-info');
    const cartSummaryContainer = document.getElementById('cart-summary');

    // Retrieve shipping information from localStorage
    const shippingInfo = JSON.parse(localStorage.getItem('shippingInfo'));

    // Display shipping information
    shippingInfoContainer.innerHTML = `
        <h3>Tenants Information:</h3>
        <p>Amount Paid: ₱${shippingInfo.amount}</p>
        <p>Date of Payment: ${shippingInfo.date}</p>
        <p>Tenants Name: ${shippingInfo.name}</p>
        <p>Unit Number: ${shippingInfo.address}</p>
        <p>Email: ${shippingInfo.email}</p>
        <p>Payment Method: ${shippingInfo.paymentMethod}</p>
    `;

    // Retrieve and display cart summary
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    displayCartSummary(cartItems);
});

document.addEventListener('DOMContentLoaded', () => {
    const customButton = document.getElementById('customButton');

    customButton.addEventListener('click', () => {
        window.location.href = '';
    });
});
