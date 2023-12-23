
<?php
    
    require_once("connection.php");
?>    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0f0e0e;
            margin: 0;
            padding: 0;
            color: #ccc;
            background-image: url('https://tse4.mm.bing.net/th?id=OIP.eD7MpRmuCp5oKFlcdoKmuwHaE8&pid=Api&P=0&h=220');
        }

        header {
            background-color: #442309;
            color: white;
            text-align: center;
            padding: 10px;
            font-family: 'Tangerine', serif;
            font-size: 40px;
            text-shadow: 4px 4px 4px #aaa;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
           
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: rgb(14, 13, 12);
            opacity: 0.9;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #map {
            height: 300px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .map_location{
             background-color: grey;

        }

        nav {
            
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: rgb(255,255,255);
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
    <h1>Contact Us</h1>
    <nav>
  
  <div>
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
    <section class="map_location">
        <h2>Location</h2>
        <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63382.78091581692!2d79.90382332167967!3d6.839686300000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae251b82ee3f1c5%3A0x2401a3a7b1ed0d0c!2sPizza%20Hut%20-%20Kottawa!5e0!3m2!1sen!2slk!4v1703029730573!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
    </section><br><br>
<center>
    <section class="info">
        <h2>Contact Information</h2>
        <p>Telephone: +94 32256985</p>
        <p>Address: 123 Main Street, Kottawa,Thalagala</p>
    </section><br><br>
</center>    

    <h2 class="feedback">Give Feedbacks</h2>
    
    <form id="contactForm" action="insertData_contactForm.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <p><?php echo "" ?></p>

        <button type="submit">Submit</button>
    </form>
</main>

<script>
    function initMap() {
        // Specify restaurant location
        var restaurantLocation = { lat: 37.7749, lng: -122.4194 };

        // Create a map centered at the restaurant location
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: restaurantLocation
        });

        // Add a marker at the restaurant location
        var marker = new google.maps.Marker({
            position: restaurantLocation,
            map: map,
            title: 'Food Restaurant'
        });
    }

    @media screen and (max-width: 600px) {
            header {
                font-size: 8vw;
            }

            nav a {
                padding: 4vw;
                font-size: 6vw;
            }
        }

    
</script>




</body>
</html>
