function addToCart() {
    const productBrand = document.querySelector('.productInfomation--brand').textContent;
    const productName = document.querySelector('.productInfomation__name').textContent;
    const singleBadge = document.querySelector('.singlebadge').textContent;
    const productColor = document.querySelector('.productDetail__colours--span').textContent;
    const productPrice = document.querySelector('.priceProduct').textContent;
    

    const productImageElement = document.querySelector('.imgdetailss');
    // const productImage = productImageElement ? productImageElement.getAttribute("src") : null;
    const productImage = productImageElement ? productImageElement.src : null;

    console.log("Brand:", productBrand);
    console.log("Name:", productName);
    console.log("Price:", productPrice);
    console.log("Image:", productImage);
    console.log("Singlebd:", singleBadge);
    console.log('Color:', productColor);

    const item = { brand: productBrand, name: productName, price: productPrice, image: productImage, singlebd: singleBadge, color: productColor };
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    cart.push(item);

    localStorage.setItem('cart', JSON.stringify(cart));
    alert('Product added to the cart!');
}
