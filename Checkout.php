


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Food Categories</title>
    <style>
        body {
            
            margin: 0;
            padding: 0;
            background-color: #442309;
            text-shadow: 4px 4px 4px #aaa;
        }

        header {
            background-color: #d8a416;
            color: white;
            text-align: center;
            padding: 2px;
            top:0;
            
            
        }
        footer{
            background-color: #d8a416;
            font-style: italic;

        }

        main {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 20px;
        }

        .product {
            border: 1px solid #070707;
            padding: 20px;
            margin: 20px;
            text-align: center;
            max-width: 200px;
            border-radius: 5px;
            background-color: #d8a416;
        }

        .product img {
            
            max-height: 140px;
            object-fit: cover;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        button {
            background-color: #1da124;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        #cart {
            position: fixed;
            top: 0;
            right: 0;
            background-color: #36110b;
            color: white;
            padding: 10px;
            border-radius: 5px;
       
        }

        #tag{
            position: fixed;
            float: left;
            display: block;
            top: 0px;
            background-color:#442309;
           
            


        }

        #cart-items {
            list-style: none;
            padding: 0;
        }

        #cart-items li {
            margin-bottom: 10px;
        }

        #checkout-btn {
            background-color: 1da124;
            padding: 10px;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        #checkout-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        #modal-content {
            background-color: rgb(212, 168, 21);
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }

        #close-modal, #submit-order {
            background-color: #44110d;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }

        


    .checkout-form {
    background-color: #f2f2f2;
    padding: 20px;
    border: 1px solid lightgrey;
    border-radius: 5px;
    max-height: 400px; /* Set a maximum height for the form */
    overflow-y: auto; /* Add a vertical scrollbar if the content overflows the maximum height */
}
@media (max-width: 800px) {
    .checkout-form {
        width: 100%; /* Ensure the form takes the full width within its container on smaller screens */
    }
}

.checkout-form h3 {
    color: #333;
}

.checkout-form label {
    display: block;
    margin-bottom: 10px;
}

.checkout-form input,
.checkout-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

.checkout-form .icon-container {
    margin-bottom: 20px;
}

.checkout-form .icon-container i {
    font-size: 40px;
    margin-right: 10px;
}

.checkout-form button {
    background-color: #04AA6D;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 10px;
    cursor: pointer;
    font-size: 17px;
}

.checkout-form button:hover {
    background-color: #afc0b0;
}

@media (max-width: 800px) {
    .checkout-form {
        width: 100%;
    }
}
@media (max-width: 800px) {
            .product {
                max-width: 100%;
            }
        }

        @media (max-width: 600px) {
            #tag {
                display: none;
            }
        }

        @media (max-width: 400px) {
            .product {
                padding: 10px;
            }

            footer {
                font-size: 12px;
            }
        }

.p{
    color: #050505;
    font-family: 'Tangerine', serif;
    font-size: 150px;

}


nav {
            
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 16px 18px;
            text-decoration: none;
            border-radius: 5px;
            font-family: 'Tangerine', serif;
            font-size:50px;
           
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }        


    </style>
</head>
<body>

<header>
    
    <h1 class="p">Food Cart</h1>
  
    <nav>
  
      <div id="tag">
          <a href="Home_1.php">Home</a>
          <a href="about.php">About</a>
          <a href="Menu_3.php">Menu</a>
          <a href="Checkout.php">Cart</a>
          <a href="contact.php">Contact</a>
          <a href="login.php">LogIn</a>
   
      </div>  
    
          
    </nav>      


</header>

<main>
    
    <div class="product">
        <img src="images/pizza1.jpg" alt="Product 1">
        <h2>Vegee Pizza</h2>
        <p>Rs.1500</p>
        <button onclick="addToCart('Product 1', 1500)">Add to Cart</button>
    </div>

    <div class="product">
        <img src="images/pizza2.jpg" alt="Product 2">
        <h2>Cheese Pizza</h2>
        <p>Rs.1300</p>
        <button onclick="addToCart('Product 2', 1300)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="images/pizza3.jpg" alt="Product 3">
        <h2>Chicken Pizza</h2>
        <p>Rs.1200</p>
        <button onclick="addToCart('Product 3', 1200)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="https://tse3.mm.bing.net/th?id=OIP.zNsLu3Hwfbi3vsU4SaWBpQHaHa&pid=Api&P=0&h=220" alt="Product 4">
        <h2>Mongolian Pizza</h2>
        <p>Rs.1300</p>
        <button onclick="addToCart('Product 4', 1300)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="images/pizza4.jpg" alt="Product 5">
        <h2>Pork Pizza</h2>
        <p>Rs.2000</p>
        <button onclick="addToCart('Product 5', 2000)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="https://tse4.mm.bing.net/th?id=OIP.ogbqJsGYW6WQD_9gkK7BZgHaHT&pid=Api&P=0&h=220" alt="Product 6">
        <h2>Belpeper Pizza</h2>
        <p>Rs.2100</p>
        <button onclick="addToCart('Product 6', 2000)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="https://tse4.mm.bing.net/th?id=OIP.5LaZe00TcACoG2-1pA8BQAHaHg&pid=Api&P=0&h=220" alt="Product 7">
        <h2>Chicken with Sausage Pizza</h2>
        <p>Rs.2000</p>
        <button onclick="addToCart('Product 7', 2000)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="https://tse4.mm.bing.net/th?id=OIP.O97Rhp1oHJexCHI5fzX5YQHaGI&pid=Api&P=0&h=220" alt="Product 8">
        <h2> Sausage Pizza</h2>
        <p>Rs.2200</p>
        <button onclick="addToCart('Product 8', 2000)"">Add to Cart</button>
    </div>

    

    <div class="product">
        <img src="images/burger1.jpg" alt="Product 9">
        <h2>Vegee Burger</h2>
        <p>Rs.999</p>
        <button onclick="addToCart('Product 9', 999)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="images/burger4.jpg" alt="Product 10">
        <h2>Devel Burger with Potatto</h2>
        <p>Rs.800</p>
        <button onclick="addToCart('Product 10', 800)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="https://tse2.mm.bing.net/th?id=OIP.1YTjhP0fitcVzOyytQ-z6AHaE7&pid=Api&P=0&h=220" alt="Product 11">
        <h2>Easy Cheesy Burger </h2>
        <p>Rs.800</p>
        <button onclick="addToCart('Product 11', 800)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="https://tse3.mm.bing.net/th?id=OIP.TX5cvuJgfnEdPcvRUE0TSAHaFU&pid=Api&P=0&h=220" alt="Product 12">
        <h2>Large Burger </h2>
        <p>Rs.800</p>
        <button onclick="addToCart('Product 12', 800)">Add to Cart</button>
    </div>

    
    <div class="product">
        <img src="images/pasta1.jpg" alt="Product 13">
        <h2>Vegee Pasta</h2>
        <p>Rs.1300</p>
        <button onclick="addToCart('Product 13', 1300)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="images/pasta2.jpg" alt="Product 14">
        <h2>Slza Pasta</h2>
        <p>Rs.1600</p>
        <button onclick="addToCart('Product 14', 1600)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="images/pasta3.jpg" alt="Product 15">
        <h2>Ramen Noodles</h2>
        <p>Rs.1450</p>
        <button onclick="addToCart('Product 15', 1450)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="https://tse4.mm.bing.net/th?id=OIP.W5ksA3cBujtMMf3m690DnwHaE7&pid=Api&P=0&h=220" alt="Product 16" >
        <h2>Cheecy Noodles</h2>
        <p>Rs.1450</p>
        <button onclick="addToCart('Product 16', 1450)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="https://tse1.mm.bing.net/th?id=OIP.kwOhGjs8qOs60XPz7y28bAHaE3&pid=Api&P=0&h=220" alt="Product 17">
        <h2>Spicy Noodles</h2>
        <p>Rs.1450</p>
        <button onclick="addToCart('Product 17', 1450)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="https://tse1.mm.bing.net/th?id=OIP.1qQGmmzthcR6HpNl43dFXgHaE7&pid=Api&P=0&h=220" alt="Product 18">
        <h2>Devel Noodles</h2>
        <p>Rs.1450</p>
        <button onclick="addToCart('Product 18', 1450)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="https://tse1.mm.bing.net/th?id=OIP.0J_lSoR3sZmlXTj3W7jXegHaLH&pid=Api&P=0&h=220" alt="Product 19">
        <h2>Vegee Noodles</h2>
        <p>Rs.1250</p>
        <button onclick="addToCart('Product 19', 1450)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="https://tse4.mm.bing.net/th?id=OIP.YmgsHtWXDFAjzKhGVzHuRAHaLH&pid=Api&P=0&h=220" alt="Product 20">
        <h2>Garlic Noodles</h2>
        <p>Rs.1550</p>
        <button onclick="addToCart('Product 20', 1450)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="https://tse3.mm.bing.net/th?id=OIP.uX-GV1sCg1cqQrF8Hh-u8QEsDH&pid=Api&P=0&h=220" alt="Product 21">
        <h2>Chicken Noodles</h2>
        <p>Rs.1750</p>
        <button onclick="addToCart('Product 21', 1450)">Add to Cart</button>
    </div>



    <div class="product">
        <img src="https://media.gettyimages.com/id/157311412/photo/mojito-cocktail.jpg?s=612x612&w=0&k=20&c=HdA_wMcf7epWesCsI8efPcRR97oMEB4bW1PMBBn3gk8=" alt="Product 22">
        <h2>Mojito Cocktail</h2>
        <p>Rs.500</p>
        <button onclick="addToCart('Product 22', 500)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="https://media.gettyimages.com/id/157311412/photo/mojito-cocktail.jpg?s=612x612&w=0&k=20&c=HdA_wMcf7epWesCsI8efPcRR97oMEB4bW1PMBBn3gk8=" alt="Product 23">
        <h2>Moceeto Cocktail</h2>
        <p>Rs.1450</p>
        <button onclick="addToCart('Product 23', 1450)">Add to Cart</button>
    </div>
    
    <div class="product">
        <img src="https://media.gettyimages.com/id/168857810/photo/tequila-sunrise-cocktail-on-the-beach.jpg?s=612x612&w=0&k=20&c=S0lrifMmIpHPrbloYUjZ4fJ6-ECeZTy78ojR-eKuvMw=" alt="Product 24">
        <h2>Orange Cocktail</h2>
        <p>Rs.1250</p>
        <button onclick="addToCart('Product 24', 1250)">Add to Cart</button>
    </div>
    
    <div class="product">
        <img src="https://media.gettyimages.com/id/1204404992/photo/lemon-ice-tea.jpg?s=612x612&w=0&k=20&c=h-kF_PzJCl4fyvZEcjZ1kqn74rsQwxeALl1pkWzvPp4=" alt="Product 25">
        <h2>Ramen Noodles</h2>
        <p>Rs.1250</p>
        <button onclick="addToCart('Product 25', 1250)">Add to Cart</button>
    </div>

    
    <div class="product">
        <img src="https://media.gettyimages.com/id/663935780/photo/negroni.jpg?s=612x612&w=0&k=20&c=6zKLS7nPOKAAGhcjMSjmX6QTPyGaC1X9uWQCfX42IWo=" alt="Product 26" >
        <h2>Orange Cocktail Special</h2>
        <p>Rs.1250</p>
        <button onclick="addToCart('Product 26', 1250)">Add to Cart</button>
    </div>
    
    <div class="product">
        <img src="https://tse3.mm.bing.net/th?id=OIP.3Bgxqzvcz_EHZKy2PTisGgHaHa&pid=Api&P=0&h=220" alt="Product 27" width="80%">
        <h2>Pepso</h2>
        <p>Rs.250</p>
        <button onclick="addToCart('Product 27', 250)">Add to Cart</button>
    </div>
    
    <div class="product">
        <img src="https://tse1.mm.bing.net/th?id=OIP.8MeIaaAmGN4uU0pzY5fTGwHaOB&pid=Api&P=0&h=220" alt="Product 28" width="60%">
        <h2>Coca Cola</h2>
        <p>Rs.350</p>
        <button onclick="addToCart('Product 28', 350)">Add to Cart</button>
    </div>
    
    <div class="product">
        <img src="https://tse3.mm.bing.net/th?id=OIP.m2zj74opQ-FlD9RDPwu9LwHaNu&pid=Api&P=0&h=220" alt="Product 29" width="50%">
        <h2>Coca Cola Zero</h2>
        <p>Rs.350</p>
        <button onclick="addToCart('Product 29',  350)">Add to Cart</button>
    </div>
    

    <!-- Add more product divs as needed -->

</main>

<div id="cart">
    <h2>Shopping Cart</h2>
    <ul id="cart-items"></ul>
    <button id="checkout-btn" onclick="openCheckout()">Checkout</button>
</div>

<div id="checkout-modal">
    <div id="modal-content">
        <h2>Order Summary</h2>
        <ul id="modal-cart-items"></ul>
        <p>Total: Rs.<span id="modal-cart-total">0</span></p>

        <!-- Additional fields for card details and delivery address -->
        <!-- Updated Checkout Form -->
<div class="checkout-form">
    <form action="InsertCheckout.php" method="post">
    <h3>Customer Information</h3>

    <label for="name"><i class="fa fa-user"></i>Full Name</label>
    <input type="text" id="name" name="name" placeholder="John M. Doe" required>
    
    <label for="email"><i class="fa fa-envelope"></i> Email</label>
    <input type="email" id="email" name="email" placeholder="john@example.com" required>
    
    <label for="city"><i class="fa fa-institution"></i> City</label>
    <input type="text" id="city" name="city" placeholder="New York" required>

    

    <label for="payment">Full Payment</label>
    <input type="text" id="payment" name="payment" placeholder="Enter your Full Payment" required>
    

    <label for="card-number">Credit Card Number</label>
    <input type="text" id="card-number" name="cardnumber" placeholder="Enter your card number" required>

    <label for="expiredate">Expire Date</label>
    <input type="text" id="ed" name="expiredate" placeholder="Enter Expire Date" required>

    <label for="cvv">CVV</label>
    <input id="text" name="cvv" placeholder="cvv" required>
</div>

<button id="submit-order" onclick="submitOrder()">Submit Order</button>
<button id="close-modal" onclick="closeCheckout()">Close</button>
 </form>
        
        
    </div>
</div>

<script>
    const cartItems = [];
    let cartTotal = 0;

    function addToCart(productName, price) {
        cartItems.push({ name: productName, price: price });
        cartTotal += price;
        updateCart();
    }

    function updateCart() {
        const cartList = document.getElementById("cart-items");
        const cartTotalElement = document.getElementById("modal-cart-total");

        cartList.innerHTML = "";

        cartItems.forEach(item => {
            const listItem = document.createElement("li");
            listItem.textContent = `${item.name} - Rs.${item.price}`;
            cartList.appendChild(listItem);
        });

        cartTotalElement.textContent = cartTotal.toFixed(2);
    }

    function openCheckout() {
        const modal = document.getElementById("checkout-modal");
        modal.style.display = "flex";
    }

    function closeCheckout() {
        const modal = document.getElementById("checkout-modal");
        modal.style.display = "none";
    }

    function submitOrder() {
    var fullName = document.getElementById('fname').value;
    var email = document.getElementById('email').value;
    var city = document.getElementById('city').value;
    var cardNumber = document.getElementById('card-number').value;
    var deliveryAddress = document.getElementById('delivery-address').value;

    // Validate the form
    if (!fullName || !email || !city || !cardNumber || !deliveryAddress) {
        alert('Please fill in all required fields.');
        return;
    }

    // Prepare order data
    var orderData = {
        fullName: fullName,
        email: email,
        city: city,
        cardNumber: cardNumber,
        deliveryAddress: deliveryAddress,
        cartItems: cartItems
    };

    // Add an AJAX request to send the order details to the server
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "process_order.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");

    // Convert the JavaScript object to JSON string
    var jsonData = JSON.stringify(orderData);

    // Send the data to the server
    xhr.send(jsonData);

    // Assume a successful order submission
    alert('Order submitted successfully!\nThank you for your purchase.');

    // Clear the cart and close the checkout modal
    cartItems.length = 0;
    cartTotal = 0;
    updateCart();
    closeCheckout();

    // Reset the form
    document.getElementById("checkout-form").reset();
}



</script>
<footer>
    &copy; 2023 Chalo food Hub. All rights reserved.<br>
</footer>

</body>
</html>
