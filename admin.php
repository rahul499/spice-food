<!DOCTYPE html>
<html>
<head>
	<title>Spice Food</title>
      <link rel="stylesheet" href="css/style.css">
<style>

  html{
    height: 100%;
}
body{
    font-family: 'Segoe UI', sans-serif;;
    font-size: 1rem;
    line-height: 1.6;
    height: 100%;
    background-image: url("images/login.jpg") ;
}
.wrap {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
   
}
.login-form{
    width: 350px;
    margin: 0 auto;
    border: 1px solid #ddd;
    padding: 2rem;
    background: #ffffff;
}
.form-input{
    background: #fafafa;
    border: 1px solid #eeeeee;
    padding: 12px;
    width: 100%;
}
.form-group{
    margin-bottom: 1rem;
}
.form-button{
    background: #69d2e7;
    border: 1px solid #ddd;
    color: #ffffff;
    padding: 10px;
    width: 100%;
    text-transform: uppercase;
}
.form-button:hover{
    background: #69c8e7;
}
.form-header{
    text-align: center;
    margin-bottom : 2rem;
}
.form-footer{
    text-align: center;
}


.dropbtn {
    background-color: black;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;

}

.dropdown-content {
    display: none;
   
    background-color: lightgrey;
    min-width: 200px;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: white;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: grey;}

</style>

</head>
<body>



<div class="list">
<ul>
	
	<li class="title"><a href="index.php">SPICE FOOD</a>
  </li>  <img src="images/logo.png" alt="logo" style="width:100px; height:80px; border:2px solid black;">

	 <li><a href="contact.php">CONTACT US</a></li>
	 <li><a href="menu.php">MENU</a></li>
	  <li><a href="about.php">ABOUT US</a></li>
	  <li><a href="index.php">HOME</a></li>      
</ul>
</div>
<center>
     <br><br><br><br>
<div class="wrap" >
   
<form class="login-form"  method="post" style="background-color: #E6E6FA;">
<center>
<h2 style="color:blue;">Admin Panel</h2>
<div class="dropdown">
<button class="form-button" id="home" ><a href="index.php" >Home</a></button>
</div><br><br>

<div class="dropdown">
<button class="form-button">Add</button>
<div class="dropdown-content">
<a href="addcustomer.php">Add Customer</a>
<a href="addstaff.php">Add Staff</a>
</div>
</div><br><br>

<div class="dropdown">
<button class="form-button">Remove</button>
<div class="dropdown-content">
<a href="removecustomer.php">Remove Customer</a>
<a href="removestaff.php">Remove Staff</a>
</div>
</div><br><br>

<div class="dropdown">
<button class="form-button" onclick="#"><a href="#" >Developer</a></button>
</div>
</center>    
 </form>
    </div>
</center>


</body>

</html>