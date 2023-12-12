function updateCart() {
    const cartElement = document.getElementById('cart');
    const totalDiv = document.getElementById('total-price');
    cartElement.innerHTML = "";

    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    // Initialize totalValue outside the loop
    let totalValue = 0;
    cart.forEach(item => {
        const li = document.createElement("li");
        li.classList.add('cart-img')
        
        // Tạo một thẻ hình ảnh
        const img = document.createElement('img');
        img.src = item.image;
        img.className = 'cart-product--image'; // Thêm class nếu cần thiết
        li.appendChild(img);

        // Tạo một phần tử div chứa thông tin tên và giá
        const infoDiv = document.createElement('div');
        infoDiv.classList.add('cart-info');
        infoDiv.innerHTML =
        `
            <h2 class="brand-title">${item.brand}</h2>  
            <span class="single-badge">${item.singlebd}</span>
            <span class="LineItem__name">${item.name}</span>  
            <span class="checkout-price">${item.price}</span>  
            <span class="LineItem__color">${item.color}</span>  
        `;

        li.appendChild(infoDiv);

        // Thêm phần tử li vào giỏ hàng
        cartElement.appendChild(li);
        
        
        // console.log("Item price:", item.price);
        // Extract numeric value from the price string
        const price = parseFloat(item.price.replace(/[^\d.]/g, '').trim()) || 0;
        // console.log("Parsed price:", price);
        
        

        if (!isNaN(price)) {
            totalValue += price;
        } else {
            console.error(`Invalid price: ${item.name}`);
        }
        totalDiv.innerHTML = `<div class="priceTotalAll">TOTAL <span class="valuePriceAll">$${totalValue.toLocaleString('en-US')}</span></div>`
        console.log('Total Price:', totalValue);
    });

}   

window.addEventListener('DOMContentLoaded', () => {
    console.log('Cart before totalPrice:', JSON.parse(localStorage.getItem('cart')) || []);
    updateCart();
    console.log('Cart after totalPrice:', JSON.parse(localStorage.getItem('cart')) || []);
});
