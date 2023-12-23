<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PIbAxJC5NSb4lQYPUwq4L4Dk5tA3gweG3PLsib5I2fF3dY" crossorigin="anonymous">
    <style>
    
    * {box-sizing: border-box;}
      body {font-family: Verdana, sans-serif;}
      .mySlides {display: none;}
      img {vertical-align: middle;}
        
        /* Slideshow container */
        .slideshow-container {
          width: 50px;
          height: 20x;
          position: sticky;
          margin: auto;
        }
        
        /* Caption text */
        .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: center;
        }
        
        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }
        
        /* The dots/bullets/indicators */
        .dot {
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }
        
        .active {
          background-color: #c9af1d;
        }
        
        /* Fading animation */
        .fade {
          animation-name: fade;
          animation-duration: 1.5s;
        }
        
        @keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
          .text {font-size: 11px}
        }
        body {
           
            margin: 0;
            padding: 0;
            background-color: #442309;
            font-family: 'Tangerine', serif;
            font-size: 48px;
            text-shadow: 4px 4px 4px #aaa;
           
        }

        header {
            background-color: #d67d09;
            color: rgb(102, 0, 0);
            padding: px;
            text-align: center;
            
            
        }
        footer{
          background-color: #d67d09;
          font-family: 'Aclonica';
          font-size:20px;
        }

        nav {
            
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: rgb(8, 8, 8);
            text-align: center;
            padding: 16px 18px;
            text-decoration: none;
            border-radius: 5px;
          

           
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

      
        

        input[type="text"] {
          padding: 6px;
          margin-top: 8px;
          font-size: 17px;
          border: none;
        }

        input[type="submit"] {
            padding: 10px;
            cursor: pointer;
            border: 1px solid #ccc;
        }
         
        .container {
             position: relative;
             text-align: center;
             color: white;
}

        .bottom-left {
             position: absolute;
             bottom: 8px;
             left: 16px;
}

        .top-left {
             position: absolute;
             top: 8px;
             left: 16px;
}

         .top-right {
             position: absolute;
             top: 8px;
             right: 16px;
}

         .bottom-right {
             position: absolute;
            bottom: 8px;
            right: 16px;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}


#slideshow-container {
  max-width: 1000px;
  max-height: 100px;
  position: relative;
  margin: auto;
  text-align: left;
}

.slide {
  display: none;
}

img {
  width: 90%;
  height: auto;
}

.prev, .next {
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  font-size: 20px;
  cursor: pointer;
}

.prev {
  left: 0;
}

.next {
  right: 0;
}

.logo img {
    width: 150px; /* Ensure the logo image doesn't exceed its container */
    
}

.welcome{
  text-align: left;
  color: #f3efef;
  font-size: 30px;


}

.my{
  text-align: center;
  color: #0f0e0e;
  font-size: 50px;


}

/* Apply some basic styles to the form */
form {
    max-width: 400px;
    margin: 20px auto;
    text-align: center;
}


/* Style the search input */
input[type="text"] {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

/* Style the submit button */
input[type="submit"] {
    background-color: #612b13;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

/* Add some hover effect to the submit button */
input[type="submit"]:hover {
    background-color: #5c3317;
}

.paragraph{
  color: #faf8f8;
  font-size: 40px;

}

/* Style all font awesome icons */
.fa {
  padding: 30px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
}

/* Add a hover effect if you want */
.fa:hover {
  opacity: 0.7;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
  background: #3B5998;
  color: white;
}

/* Twitter */
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-google {
  background: #dd4b39;
  color: white;
}
.fa-youtube {
  background: #bb0000;
  color: white;
}
.fa-instagram {
  background: #125688;
  color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
  font-family: Arial, Helvetica, sans-serif;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}





        
</style>
</head>

<body>
    
  <header>
  <div class="my">
    <h1>Chalo Food Hub</h1>
  </div>
    
    <div class="logo">
      <img src="images/1234.png" alt="Logo">
    </div>

    <nav>
  
    
          <a href="Home_1.php">Home</a>
          <a href="about.php">About</a>
          <a href="Menu_3.php">Menu</a>
          <a href="Checkout.php">Cart</a>
          <a href="contact.php">Contact</a>
          <a href="login.php">LogIn</a>
   
    
 
    
          
    </nav>      
</header>  


<div class="welcome">
  <h1>Welcome to Our Food Kingdome!</h1> 
</div>



      <div id="slideshow-container">
        <div class="slide fade">
          <img src="https://wallpapercave.com/wp/wp7029400.jpg" alt="Slide 1" width="80%">
        </div>
        <div class="slide fade">
          <img src="https://e0.pxfuel.com/wallpapers/174/190/desktop-wallpaper-fast-food-fast-food-junk-food.jpg" alt="Slide 2" width="80%">
        </div>
        <div id="slideshow-container">
          <div class="slide fade">
            <img src="https://wallpapercave.com/wp/wp7029400.jpg" alt="Slide 3" width="100%">
          </div>
          <div class="slide fade">
            <img src="https://wallpapercave.com/wp/wp7029317.jpg" alt="Slide 4" width="100%">
          </div>
          
        <!-- Add more slides as needed -->
    
        <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeSlide(1)">&#10095;</a>
      </div><br><br>
      <div class="paragraph">
        <p>Food is not merely a source of sustenance; it is a cultural tapestry woven with flavors, traditions, and memories. Beyond its essential role in nourishing our bodies, food has the power to evoke emotions, spark conversations, and connect people across diverse backgrounds. Whether it's the sizzle of street food in bustling markets, the comforting aroma of a home-cooked meal, or the exquisite presentation of a gourmet dish, food engages our senses and transcends mere consumption.</p></div>
      
        
        
        <script>
        let slideIndex = 0;

function showSlides() {
  let slides = document.getElementsByClassName("slide");
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 2000); // Change slide every 2 seconds
}

function changeSlide(n) {
  showSlides(slideIndex += n);
}

document.addEventListener("DOMContentLoaded", showSlides);

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

        </script>
        <footer>
          &copy; 2023 Chalo food Hub. All rights reserved.<br>
      </footer>
        
</body>
</html>
















<img class="mySlides" src="https://wallpapers.com/images/hd/food-4k-1pf6px6ryqfjtnyr.jpg">
    <img class="mySlides" src="https://wallpapersmug.com/download/3840x2400/ebde76/delicious-pizza-food.jpg">
    <img class="mySlides" src="https://wallpapercave.com/wp/wp7029317.jpg">
    <img class="mySlides" src="https://wallpapercave.com/wp/wp7029400.jpg">
	<img class="mySlides" src="https://e0.pxfuel.com/wallpapers/174/190/desktop-wallpaper-fast-food-fast-food-junk-food.jpg">
	<img class="mySlides" src="https://wallpapercave.com/wp/wp7029400.jpg">
	<img class="mySlides" src="https://wallpapercave.com/wp/wp9455176.jpg">
	<img class="mySlides" src="https://wallpapercave.com/wp/wp7029400.jpg">
