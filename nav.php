
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<!-- Webpage Icon -->
<link rel="shortcut icon" type="image/x-icon" href="img/logo.PNG" /> 
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
body {
    background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(img/Contact2.jpg);
    background-size: cover;
}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
.borderless table {
    border-top-style: none;
    border-left-style: none;
    border-right-style: none;
    border-bottom-style: none;
}

.bigger_input {
  transition-property: height;
  transition-duration: 1s;
  transition-timing-function: linear;
  transition-delay: 0.5s;
}
.bigger_input:hover{
     height:150px;
}


@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="">
<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <div class="p-3">
    <img src="img/logo.PNG" style="width:100%">
    </div>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-black text-white">
      <i class="fa fa-home  w3-xxlarge"></i>
      <p>HOME</p>
    </a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black text-white">
      <i class="fa fa-envelope w3-xxlarge"></i>
      <p>CONTACT</p>
    </a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black text-white" >
      <i style="font-size:24px" class="fa w3-xxlarge">&#xf011;</i>
      <p>LOGOUT</p>
    </a>
  </nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->

<ul class="nav nav-tabs  w3-hide-large  sticky-top px-3 " id="myNavbar">
  <li class="nav-item p-3"> 
   <img src="img/logo.PNG" style="width:25px" disable></li>
  <li class="nav-item">
     <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-black text-white">
      <p><i class="fa fa-home  w3-large"></i>HOME</p>
     </a>
  </li>
  <li class="nav-item">
     <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black text-white">
      <p><i class="fa fa-envelope w3-large"></i>CONTACT</p>
     </a>
  </li>
  <li class="nav-item">
     <a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black text-white" >
      <p><i style="font-size:24px" class="fa w3-large">&#xf011;</i>LOGOUT</p>
     </a>
  </li>
  
</ul>

</body>
</html>