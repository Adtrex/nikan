<!DOCTYPE html>
<html>
<head>
	<title>Nikan Concept</title>
	<link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="float.css">
  <link rel="stylesheet" type="text/css" href="contact.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    

    
</head>
<body >

 <header>
<div class="home-page-1 con-page-1">
<header>
   <?php
 include_once("nav.php");
 ?>

 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php" >Home</a>
  <a href="about.php">About</a>
  <a href="gallery.php">Gallery</a>
  <a class="sidenav-active" style="padding-left: 0px; padding-bottom: 0px;" href="contact.php">Contact</a>
</div>
</header>



  <center>
    <div class="slideanim">

<div class="head-text">
<h1>Contact Us</h1>
  
</div>

</div>

</center>
  


</div>

<div  class="home-page-2 con-page-2 container  ">

<div class="home-about ">
<center>
<div class="row">
<div class="col-md-6"  >
     <form>
    <input type="text" name="" placeholder="First Name" class="first_name" style="margin-top: 10px; ">
    <input type="text" name="" placeholder="Last Name" class="last_name" style="margin-top: 10px; "><br />
    <input type="Email" name="" placeholder="Email" style="margin-top: 10px; "><br />
    <textarea placeholder="Enter your message..." style="margin-top: 10px; "></textarea><br />
    <button class="btn2 text-center">CONTACT ME</button>
  </form>
</div>

  <div class="col-md-6 box-about" style="margin-top:20px;">
    <h1>Reach Us Via <hr style=" height: 5px"></h1>
    
    <p>Facebook</p>
    <p>Instagram</p>
    <p>Phone Number</p>
    <p>Email</p>
  </div>
</div>

  
</div>
  </center>
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
</script>
    

</body>
</html>