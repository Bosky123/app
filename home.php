<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="home-php.css">
</head>
<body>



<!-- ===SIDEBAR MENU==== --> 


<div id="mySidebar" class="sidebar">
     <h1 class="side">Side</h1>
     <h2>bar</h2>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰</button>  

</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   

<a class="odhlasit" href="logout.php">Odhlásit</a> 


</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>