<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Benne&display=swap" rel="stylesheet"> 

   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

  <title>Photos</title>
</head>
<style>
  body{
   
     background-color: white;
     background-position: center;
     background-repeat: no-repeat;
     background-size: cover;
     background-attachment: fixed;
     font-family: "Segoe UI", Arial, sans-serif;
         font-family: 'Benne', serif;
  }
.mySlides {
  display:none;
}
.flex-container {
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  
}
  header.fixed {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  padding: 30px;
  background: orange;
  text-align: center;
}

  div.slider img {
    width: 100%;
    height: auto;
  }

html {
    width:100%;
  --top-spacing: 100px;
  
}
.footer{
    width:cover;
}

.bg{
  background-color: white; 
  background: rgba(0, 128, 0, 0.1);
  margin-top: 0.1%;
  padding-left: 1%;


}
.category{
  //background-color: black;
  text-align: center;
  color: black;
  padding-bottom: 10px;
}
.photo1{
  padding-top: 2%;
  max-width: 500px; 
  margin-left: 4%;
}
.photo2{
  padding-top: 2%;
  margin-top: -82%;
  margin-left: 110%;
}
.photo3{
  padding-top: 10px;
  margin-top: -123%;
 margin-left: 220%;
}
.photo4{
  padding-top: 10px;
  
}
.photo5{
  margin-top: -80%;
  margin-left: 220%;
}
.photo6{
  margin-top: -80%;
  margin-left: 110%;
}
.img-hover-zoom--brightness img {
  transition: transform 0.5s, filter 0.5s ease-in-out;
  transform-origin: center center;

 
}

/* The Transformation */
.img-hover-zoom--brightness:hover img {
  filter: brightness(50%);
  transform: scale(1.1);
}
.text{
  position: absolute;


}




@media only screen and (max-width: 600px){
    
  
    .category{
      width: auto;
      
    }
   
    .photo1{
       padding-top: 10%;
      height: auto;
     width: auto;
    }
    .photo2{
      padding-top: 90%;
      
      height: auto;
     width: auto;
    }
   .photo3{
      padding-top: 90%;
     
      height: auto;
     width: auto;
    }
    .photo6{
      padding-top: 88%;
      
      height: auto;
     width: auto;
    }
     .photo5{
      padding-top: 82%;
      
      height: auto;
     width: auto;
    }
    .w3-container w3-cursive{
      width:100%;

    }
    /* For 1366 Resolution */  


</style>

<body>
  <div style="padding-top: 15px;text-align: center;font-size: 30px;font-weight: bold;">Trending on <hr><span style="letter-spacing: 2px;  background-color:white;">PHOTOLIO</span></div>
<div class="w3-container w3-cursive" style="width:100%;padding:0px 0px;">
<div class="slider" style="width: 100%;margin-top: 5%">

  <img class="mySlide" src="images/slid2.jpg" style="height:550px;width:100%">
  <img class="mySlide" src="images/camera2.jpg" style="height:550px;width:100%">
  <img class="mySlide" src="images/about1.jpg" style="height:550px;width:100%">
  <img class="mySlide" src="images/bike.png" style="height:550px;width:100%">
    
</div>
<div class="category">
  <h2>Category</h2>
</div>
<center>
<div class="flex-container">

<div class="photo1">
  <div class="img-hover-zoom--brightness">
    <a href="category_photos.php?category=Nature">
      <div class="text" style="padding-top: 200px;padding-left: 140px;font-size: 30px;">Nature</div>
       <img src="images/square 1.jpeg" style="width: 400px;height: 400px;">
       
    </a>
  </div>
 


  <div class="photo2">
    <div class="img-hover-zoom--brightness">
     <a href="category_photos.php?category=Food">
      <div class="text" style="padding-top: 200px;padding-left: 140px;font-size: 30px;color: black">Food</div>
       <img src="images/square 2.jpeg" style="width: 400px;height: 400px;">
    </a>
    </div>
  </div>

   <div class="photo3">
    <div class="img-hover-zoom--brightness">
     <a href="category_photos.php?category=Flowers">
      <div class="text" style="padding-top: 200px;padding-left: 140px;font-size: 30px;color: black">Flowers</div>
       <img src="images/square 3.jpeg" style="width: 400px;height: 400px;">
    </a>
    </div>
  </div>

  <div class="photo4">
    <div class="img-hover-zoom--brightness">
     <a href="category_photos.php?category=Buildings">
      <div class="text" style="padding-top: 210px;padding-left: 163px;font-size: 23px;color: white">Buildings</div>
       <img src="images/square 4.jpeg" style="width: 400px;height: 400px;">
    </a>
    </div>
  </div>
  
   <div class="photo5">
    <div class="img-hover-zoom--brightness">
     <a href="category_photos.php?category=Sports">
      <div class="text" style="padding-top: 200px;padding-left: 140px;font-size: 30px;color: black">Sports</div>
       <img src="images/square 5.jpeg" style="width: 400px;height: 400px;">
    </a>
    </div>
  </div>

  <div class="photo6">
    <div class="img-hover-zoom--brightness">
     <a href="category_photos.php?category=Animals">
      <div class="text" style="padding-top: 200px;padding-left: 140px;font-size: 30px;color: white">Animals</div>
       <img src="images/square 6.jpeg" style="width: 400px;height: 400px;">
    </a>
    </div>
  </div>
  </div>
  
  
</div>
</center>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlide");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>





</body>
<footer class="w3-container w3-padding-64  w3-center w3-opacity w3-xlarge" style="margin-top:150px;background: rgba(165, 167, 172, 0.79);"> 
    <div class="foot-data">
    Follow us on 

            
    

  <a href="https://www.instagram.com/atharva.shirke.77/?a=1";>
  <i class="fa fa-instagram w3-hover-opacity"></i>
</a>
<!-- Social media
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  -->

  <p class="w3-medium">Powered by <a href="https://www.google.com" target="_blank" class="w3-hover-text-blue">Google</a></p>
</div>
</div>

</footer>
</html>