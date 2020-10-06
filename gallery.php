<!DOCTYPE html>
<html>
<head>
	<title>Nikan Concept</title>
	<link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="float.css">
  <link rel="stylesheet" type="text/css" href="gallery.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    
</head>
<body >

<div class="con-page-1">
<header>
   <?php
 include_once("nav.php");
 ?>

 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php" >Home</a>
  <a href="about.php">About</a>
  <a class="sidenav-active" style="padding-left: 0px; padding-bottom: 0px;" href="gallery.php">Gallery</a>
  <a  href="contact.php">Contact</a>
</div>
</header>



  <center>
    <div class="slideanim">

<div class="head-text">
<h1>Gallery</h1>

</div>

</div>

</center>
  


</div>



<div class="container gall-1"  align="center">    
<div class="test" >
  <div id="myBtnContainer" >
  <button class="btn active" style="font-size: 20px;" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" style="font-size: 20px;" onclick="filterSelection('wedding')"> Wedding</button>
  <button class="btn" style="font-size: 20px;" onclick="filterSelection('lifestyle')"> Lifestyle</button>
  <button class="btn" style="font-size: 20px;" onclick="filterSelection('birthday')"> Birthday</button>
  <button class="btn" style="font-size: 20px;" onclick="filterSelection('product')"> Product</button>
  <button class="btn" style="font-size: 20px;" onclick="filterSelection('portrait')"> Portrait</button>
  <button class="btn" style="font-size: 20px;" onclick="filterSelection('documentry')"> Documentry</button>
</div>

<!-- Portfolio Gallery Grid -->

<div class="row">
  <div class="col documentry">
    <div class="content">
      
    <div class=" port1 cropped1" style="padding: 0px;">
      <img src="pic/port6.jpg">
    </div>
    </div>
  </div>
  <div class="col wedding">
    <div class="content">
    <div class=" port1 cropped1">
      <img src="pic/port2.jpg">
    </div>
    </div>
  </div>
  <div class="col lifestyle">
    <div class="content">
    <div class=" port1 cropped1">
      <img src="pic/port3.jpg">
    </div>
    </div>
  </div>
  
  <div class="col birthday">
    <div class="content">
      <div class=" port1 cropped1">
      <img src="pic/port4.jpg">
    </div>
    </div>
  </div>
  <div class="col product">
    <div class="content">
    <div class=" port1 cropped1">
      <img src="pic/port5.jpg">
    </div>
    </div>
  </div>
  <div class="col portrait">
    <div class="content">
    <div class=" port1 cropped1">
      <img src="pic/port6.jpg">
    </div>
    </div>
  </div>
</div>
</div>




  
</div>
  
</div>



<footer class="footer"><div class="container ">
    <center>
  <div class="row" >
    <div class="col-sm col-md-4 home-about-us" >
        <a><h4 class="foot-head">About Us</h4></a>
            <div>
            <p class="foot-text">Lorem ipsum dolor sit amet, consectetur adipiscing 
            elit. Mauris consequat consequat enim, 
            non auctor massa ultrices non. Morbi sed odio massa.  </p>
            </div>
    </div>
     <div class="col-sm col-md-4" >
      <h4 class="foot-head">Contact Us</h4>
            <div>
              <p class="foot-text">Phone: +132 5252 625</p>
              <p class="foot-text">Email: nikan@gmail.com</p>
            </div>

    </div>
    <div class="col-sm col-md-4">
      <h4 class="foot-head">Quick Links</h4>
            <div>
              <span class="foot-text">About</span><br/>
              <span class="foot-text">Gallery</span><br/>
              <span class="foot-text">Contact</span>
            </div>

    </div>
  </div>
    
    


</center>
<center><p class="foot-text" style="margin-bottom: 0px;">Copyright 2020 | Nikan Concept | All rights reserved</p></center>

</footer>


	<script src="float-panel.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>



    

    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}


filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("col");
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
</body>
</html>