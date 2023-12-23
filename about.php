<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">

<style>
body {
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  margin: 0;
  font-size: 20px;
  text-shadow: 4px 4px 4px #aaa;
  background-color: #442309;
}
header{
  font-family: 'Tangerine', serif;
  color: rgb(15, 15, 15);
  background-color: #d67d09;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 30.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  background-color: bisque;
  border-radius: 5px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #d67d09;
  background-repeat: inherit;
  color: rgb(236, 235, 231);
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  font-size: 20PX;
  
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
  background-color: bisque;
}

.title {
  color: rgb(59, 40, 15);
}


.about{

  text-align: center;
  font-size: 70px;
  font-family: 'Tangerine', serif;
  color: rgb(15, 15, 14);

}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.my{
 font-size: 30px;
}

.img-comp-container {
  position: relative;
  height: 200px; /*should be the same height as the images*/
 
}

.img-comp-img {
  position: absolute;
  width: auto;
  height: auto;
  overflow:hidden;
  
}

.img-comp-img img {
  display:block;
  vertical-align:middle;
}

.img-comp-slider {
  position: absolute;
  z-index:9;
  cursor: ew-resize;
  /*set the appearance of the slider:*/
  width: 40px;
  height: 40px;
  background-color: #2196F3;
  opacity: 0.7;
  border-radius: 50%;
}
.para{
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  font-size: 20px;
  color: aliceblue;

}
</style>
<script>
  function initComparisons() {
    var x, i;
    /*find all elements with an "overlay" class:*/
    x = document.getElementsByClassName("img-comp-overlay");
    for (i = 0; i < x.length; i++) {
      /*once for each "overlay" element:
      pass the "overlay" element as a parameter when executing the compareImages function:*/
      compareImages(x[i]);
    }
    function compareImages(img) {
      var slider, img, clicked = 0, w, h;
      /*get the width and height of the img element*/
      w = img.offsetWidth;
      h = img.offsetHeight;
      /*set the width of the img element to 50%:*/
      img.style.width = (w / 2) + "px";
      /*create slider:*/
      slider = document.createElement("DIV");
      slider.setAttribute("class", "img-comp-slider");
      /*insert slider*/
      img.parentElement.insertBefore(slider, img);
      /*position the slider in the middle:*/
      slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
      slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
      /*execute a function when the mouse button is pressed:*/
      slider.addEventListener("mousedown", slideReady);
      /*and another function when the mouse button is released:*/
      window.addEventListener("mouseup", slideFinish);
      /*or touched (for touch screens:*/
      slider.addEventListener("touchstart", slideReady);
      /*and released (for touch screens:*/
      window.addEventListener("touchend", slideFinish);
      function slideReady(e) {
        /*prevent any other actions that may occur when moving over the image:*/
        e.preventDefault();
        /*the slider is now clicked and ready to move:*/
        clicked = 1;
        /*execute a function when the slider is moved:*/
        window.addEventListener("mousemove", slideMove);
        window.addEventListener("touchmove", slideMove);
      }
      function slideFinish() {
        /*the slider is no longer clicked:*/
        clicked = 0;
      }
      function slideMove(e) {
        var pos;
        /*if the slider is no longer clicked, exit this function:*/
        if (clicked == 0) return false;
        /*get the cursor's x position:*/
        pos = getCursorPos(e)
        /*prevent the slider from being positioned outside the image:*/
        if (pos < 0) pos = 0;
        if (pos > w) pos = w;
        /*execute a function that will resize the overlay image according to the cursor:*/
        slide(pos);
      }
      function getCursorPos(e) {
        var a, x = 0;
        e = (e.changedTouches) ? e.changedTouches[0] : e;
        /*get the x positions of the image:*/
        a = img.getBoundingClientRect();
        /*calculate the cursor's x coordinate, relative to the image:*/
        x = e.pageX - a.left;
        /*consider any page scrolling:*/
        x = x - window.pageXOffset;
        return x;
      }
      function slide(x) {
        /*resize the image:*/
        img.style.width = x + "px";
        /*position the slider:*/
        slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
      }
    }
  }
  
  </script>
</head>
<body>

<div class="about-section">
  <div  class="about"><h1>About Us  Our Page</h1></div>
 
  <p>The purpose of a restaurant is to provide a venue for people to enjoy diverse culinary experiences, socialize, celebrate special occasions, and explore different cultures through food.</p>
  
</div>

<h2 class="my" style="text-align:center">History</h2>

<div class="img-comp-container">
  <div class="img-comp-img">
    <center><img src="https://tse3.mm.bing.net/th?id=OIP.1cy8xuwPFCd5U_Bmkt-thgHaE9&pid=Api&P=0&h=220" width="300" height="200"></center>
  </div>
  <div class="img-comp-img img-comp-overlay">
    <img src="https://tse4.mm.bing.net/th?id=OIP.6nic5NFGvequ2Eyh2bEsxgHaEK&pid=Api&P=0&h=220" width="300" height="200">
  </div>
</div>
<p class="para">A restaurant is a business that prepares and serves food and drinks to customers. Meals are generally served and eaten on the premises, but many restaurants also offer take-out and food delivery services. Restaurants vary greatly in appearance and offerings, including a wide variety of cuisines and service models ranging from inexpensive fast-food restaurants and cafeterias to mid-priced</p><br><br>

<h2 class="my" style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://tse3.mm.bing.net/th?id=OIP.FP8wuR2w9ZKyLz8Xjfg8-gHaLH&pid=Api&P=0&h=220" alt="Jane" style="width:40%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
       
        <p>jane@example.com</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://tse3.mm.bing.net/th?id=OIP.WiimiE_e52Ek-suZlLgZWwHaJP&pid=Api&P=0&h=220" alt="Mike" style="width:40%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
       
        <p>mike@example.com</p>
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="https://tse3.mm.bing.net/th?id=OIP.aPrAXebVFheO1nA-8qU47gHaJA&pid=Api&P=0&h=220" alt="John" style="width:40%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        
        <p>john@example.com</p>
        
      </div>
    </div>
  </div>
</div>
<div class="column">
  <div class="card">
    <img src="https://tse2.mm.bing.net/th?id=OIP.wzhdJezwKNc1BimSDbF2pwHaKO&pid=Api&P=0&h=220" alt="Mike" style="width:40%">
    <div class="container">
      <h2>Mika Rosalin</h2>
      <p class="title">Main Chef</p>
     
      <p>mika@example.com</p>
      
    </div>
  </div>
</div>
<div class="column">
  <div class="card">
    <img src="https://tse3.mm.bing.net/th?id=OIP.JxyGHWbgPXgjta3k4PznxwHaLH&pid=Api&P=0&h=220" alt="Mike" style="width:40%">
    <div class="container">
      <h2>Chaliya Niloli</h2>
      <p class="title">Sub Chef</p>
     
      <p>chali@example.com</p>
      
    </div>
  </div>
</div>
<div class="column">
  <div class="card">
    <img src="https://tse4.mm.bing.net/th?id=OIP.gjPqtkYGI7Oan_EKFvaG5gHaLH&pid=Api&P=0&h=220" alt="Mike" style="width:40%">
    <div class="container">
      <h2>Mariya Rose</h2>
      <p class="title">Chef</p>
     
      <p>mari@example.com</p>
      
    </div>
  </div>
</div><br>
<script>
  /*Execute a function that will execute an image compare function for each element with the img-comp-overlay class:*/
  initComparisons();
  </script>
<footer>
    &copy; 2023 Chalo food Hub. All rights reserved.
</footer>

</body>
</html>
