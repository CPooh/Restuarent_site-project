<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">

<style>
* {
  box-sizing: border-box;
}

body {
            background-color: #442309;
            color: white;
            padding: 1px;
            text-align: center;
            margin: 0;
            padding: 0;
            text-shadow: 4px 4px 4px #aaa;
            
            
  
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-family: 'Tangerine', serif;
  font-size: 150px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
    background-color: rgb(216, 164, 19);
    padding: 10px;
}
.content img{
            max-height: 140px;
            object-fit: cover;
            margin-bottom: 20px;
            border-radius: 5px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
  border-radius: 5px;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}

footer{background-color: #d67d09;}



        nav {
            
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color:white;
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

        .my{
  text-align: center;
  color: #0f0e0e;
  font-size: 50px;
        }       
        
        .logo img {
    width: 150px; /* Ensure the logo image doesn't exceed its container */
    
        }


        #tag{
            position: fixed;
            float: left;
            display: block;
            top: 0px;
            background-color:#d67d09;
           
            


        }



</style>
</head>
<body>
 

<!-- MAIN (Center website) -->
<div class="main">
 

<h1>Food Categorie</h1>
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
<hr>

<h2>PORTFOLIO</h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('pizza')"> Pizza</button>
  <button class="btn" onclick="filterSelection('pasta')"> Pasta</button>
  <button class="btn" onclick="filterSelection('burger')"> Burger</button>
  <button class="btn" onclick="filterSelection('noodles')"> Noodles</button>
  <button class="btn" onclick="filterSelection('beverages')">Beverages</button>

</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column pizza">
    <div class="content">
      <img src="images/pizza1.jpg" alt="pizza" style="width:100%">
      <h2>Vegee Pizza</h2>
      <p>Rs.1500</p>
    </div>
  </div>
  <div class="column pizza">
    <div class="content">
        <img src="images/pizza2.jpg" alt="pizza" style="width:100%">
        <h2>Cheese Pizza</h2>
        <p>Rs.1300</p>
    </div>
  </div>
  <div class="column pizza">
    <div class="content">
        <img src="images/pizza3.jpg" alt="pizza" style="width:100%">
        <h2>Chicken Pizza</h2>
        <p>Rs.1200</p>
    </div>
  </div>
  
  <div class="column pizza">
    <div class="content">
        <img src="https://tse3.mm.bing.net/th?id=OIP.zNsLu3Hwfbi3vsU4SaWBpQHaHa&pid=Api&P=0&h=220" alt="pizza" style="width:70%">
        <h2>Mongolian Pizza</h2>
        <p>Rs.1300</p>
    </div>
  </div>
  <div class="column pizza">
    <div class="content">
        <img src="images/pizza4.jpg" alt="pizza" style="width:99%">
        <h2>Pork Pizza</h2>
        <p>Rs.2000</p>
    </div>
  </div>
  <div class="column pizza">
    <div class="content">
        <img src="https://tse4.mm.bing.net/th?id=OIP.ogbqJsGYW6WQD_9gkK7BZgHaHT&pid=Api&P=0&h=220" alt="pizza" style="width:75%">
        <h2>Belpeper Pizza</h2>
        <p>Rs.2100</p>
    </div>
  </div>

  <div class="column pizza">
    <div class="content">
        <img src="https://tse4.mm.bing.net/th?id=OIP.5LaZe00TcACoG2-1pA8BQAHaHg&pid=Api&P=0&h=220" alt="pizza" style="width:75%">
        <h2>Chicken with Sausage Pizza</h2>
        <p>Rs.2000</p>
    </div>
  </div>
  <div class="column pizza">
    <div class="content">
    <img src="https://tse4.mm.bing.net/th?id=OIP.O97Rhp1oHJexCHI5fzX5YQHaGI&pid=Api&P=0&h=220" alt="pizza" style="width:99%">
    <h2> Sausage Pizza</h2>
    <p>Rs.2200</p>
    </div>
  </div>
  <div class="column burger">
    <div class="content">
        <img src="images/burger1.jpg" alt="burger" style="width:99%">
        <h2>Vegee Burger</h2>
        <p>Rs.999</p>
        
    </div>
  </div>
  <div class="column burger">
    <div class="content">
        <img src="images/burger4.jpg" alt="burger" style="width:100%">
        <h2>Devel Burger with Potatto</h2>
        <p>Rs.800</p>
        
    </div>
  </div>
  <div class="column burger">
    <div class="content">
        <img src="https://tse2.mm.bing.net/th?id=OIP.1YTjhP0fitcVzOyytQ-z6AHaE7&pid=Api&P=0&h=220" alt="burger" style="width:100%">
        <h2>Easy Cheesy Burger </h2>
        <p>Rs.800</p>
        
    </div>
  </div>
  <div class="column burger">
    <div class="content">
        <img src="https://tse3.mm.bing.net/th?id=OIP.TX5cvuJgfnEdPcvRUE0TSAHaFU&pid=Api&P=0&h=220" alt="burger" style="width:100%">
        <h2>Large Burger </h2>
        <p>Rs.800</p>
        
    </div>
  </div>
  <div class="column pasta">
    <div class="content">
        <img src="images/pasta1.jpg" alt="pasta" style="width:100%">
        <h2>Vegee Pasta</h2>
        <p>Rs.1300</p>
        
    </div>
  </div>
  <div class="column pasta">
    <div class="content">
        <img src="images/pasta2.jpg" alt="pasta" style="width:100%">
        <h2>Slza Pasta</h2>
        <p>Rs.1600</p>
        
    </div>
  </div>
  <div class="column pasta">
    <div class="content">
        <img src="images/pasta3.jpg" alt="pasta" style="width:100%">
        <h2>Ramen Noodles</h2>
        <p>Rs.1450</p>
       
    </div>
  </div>
  <div class="column noodles">
    <div class="content">
        <img src="https://tse4.mm.bing.net/th?id=OIP.W5ksA3cBujtMMf3m690DnwHaE7&pid=Api&P=0&h=220" alt="noodles" style="width:100%" >
        <h2>Cheecy Noodles</h2>
        <p>Rs.1450</p>
        
    </div>
  </div>
  <div class="column noodles">
    <div class="content">
        <img src="https://tse1.mm.bing.net/th?id=OIP.kwOhGjs8qOs60XPz7y28bAHaE3&pid=Api&P=0&h=220" alt="noodles" style="width:100%">
        <h2>Spicy Noodles</h2>
        <p>Rs.1450</p>
        
    </div>
  </div>
  <div class="column noodles">
    <div class="content">
        <img src="https://tse1.mm.bing.net/th?id=OIP.1qQGmmzthcR6HpNl43dFXgHaE7&pid=Api&P=0&h=220" alt="noodles" style="width:100%">
        <h2>Devel Noodles</h2>
        <p>Rs.1450</p>
        
    </div>
  </div>
  <div class="column noodles">
    <div class="content">
        <img src="https://tse1.mm.bing.net/th?id=OIP.0J_lSoR3sZmlXTj3W7jXegHaLH&pid=Api&P=0&h=220" alt="noodles" width:120%>
        <h2>Vegee Noodles</h2>
        <p>Rs.1250</p>
        
    </div>
  </div>
  <div class="column noodles">
    <div class="content">
        <img src="https://tse4.mm.bing.net/th?id=OIP.YmgsHtWXDFAjzKhGVzHuRAHaLH&pid=Api&P=0&h=220" alt="noodles" width:100%>
        <h2>Garlic Noodles</h2>
        <p>Rs.1550</p>
       
    </div>
  </div>
  <div class="column noodles">
    <div class="content">
        <img src="https://tse3.mm.bing.net/th?id=OIP.uX-GV1sCg1cqQrF8Hh-u8QEsDH&pid=Api&P=0&h=220" alt="noodles" style="width:100%">
        <h2>Chicken Noodles</h2>
        <p>Rs.1750</p>
        
    </div>
  </div>
  <div class="column noodles">
    <div class="content">
        <img src="https://tse4.mm.bing.net/th?id=OIP.W5ksA3cBujtMMf3m690DnwHaE7&pid=Api&P=0&h=220" alt="noodles"  width:100%>
        <h2>Cheecy Noodles</h2>
        <p>Rs.1450</p>
        
    </div>
  </div>
  <div class="column beverages">
    <div class="content">
        <img src="https://media.gettyimages.com/id/157311412/photo/mojito-cocktail.jpg?s=612x612&w=0&k=20&c=HdA_wMcf7epWesCsI8efPcRR97oMEB4bW1PMBBn3gk8=" alt="beverages" width:100%>
        <h2>Mojito Cocktail</h2>
        <p>Rs.500</p>
        
    </div>
  </div>
  <div class="column beverages">
    <div class="content">
        <img src="https://media.gettyimages.com/id/157311412/photo/mojito-cocktail.jpg?s=612x612&w=0&k=20&c=HdA_wMcf7epWesCsI8efPcRR97oMEB4bW1PMBBn3gk8=" alt="beverages" width:100%>
        <h2>Moceeto Cocktail</h2>
        <p>Rs.1450</p>
        
    </div>
  </div>
  <div class="column beverages">
    <div class="content">
        <img src="https://media.gettyimages.com/id/168857810/photo/tequila-sunrise-cocktail-on-the-beach.jpg?s=612x612&w=0&k=20&c=S0lrifMmIpHPrbloYUjZ4fJ6-ECeZTy78ojR-eKuvMw=" alt="beverages" width:100%>
        <h2>Orange Cocktail</h2>
        <p>Rs.1250</p>
        
    </div>
  </div>
  <div class="column noodles">
    <div class="content">
        <img src="https://media.gettyimages.com/id/1204404992/photo/lemon-ice-tea.jpg?s=612x612&w=0&k=20&c=h-kF_PzJCl4fyvZEcjZ1kqn74rsQwxeALl1pkWzvPp4=" alt="noodles" width:50%>
        <h2>Ramen Noodles</h2>
        <p>Rs.1250</p>
       
    </div>
  </div>
  <div class="column beverages">
    <div class="content">
        <img src="https://media.gettyimages.com/id/663935780/photo/negroni.jpg?s=612x612&w=0&k=20&c=6zKLS7nPOKAAGhcjMSjmX6QTPyGaC1X9uWQCfX42IWo=" alt="beverages" width:50% >
        <h2>Orange Cocktail Special</h2>
        <p>Rs.1250</p>
        
    </div>
  </div>
  <div class="column beverages">
    <div class="content">
        <img src="https://tse3.mm.bing.net/th?id=OIP.3Bgxqzvcz_EHZKy2PTisGgHaHa&pid=Api&P=0&h=220" alt="beverages" width:100%>
        <h2>Pepso</h2>
        <p>Rs.250</p>
        
    </div>
  </div>
  <div class="column beverages">
    <div class="content">
        <img src="https://tse1.mm.bing.net/th?id=OIP.8MeIaaAmGN4uU0pzY5fTGwHaOB&pid=Api&P=0&h=220" alt="beverages" width:100%>
        <h2>Coca Cola</h2>
        <p>Rs.350</p>
        
    </div>
  </div>
  <div class="column beverages>
    <div class="content">
        <img src="https://tse3.mm.bing.net/th?id=OIP.m2zj74opQ-FlD9RDPwu9LwHaNu&pid=Api&P=0&h=220" alt="beverages" width:90%>
        <h2>Coca Cola Zero</h2>
        <p>Rs.350</p>
        
    </div>
  </div>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
<footer>
  &copy; 2023 Chalo food Hub. All rights reserved.<br>
</footer>

</body>
</html>
