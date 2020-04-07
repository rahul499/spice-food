<!DOCTYPE html>
<html>
<head>
	<title>Spice Food</title>
      <link rel="stylesheet" href="css/style.css">
<style>
  body{

  }

  html{
    height: 100%;
}
body{
    font-family: 'Segoe UI', sans-serif;;
    font-size: 1rem;
    line-height: 1.6;
    height: 100%;
    background-image: url("images/login.jpg");
}
.wrap {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url("images/login.jpg");
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
</style>

</head>
<body>



<div class="list">
<ul>
	
	<li class="title"><a href="index.php">SPICE FOOD</a>
  </li>  <img src="images/logo.png" alt="logo" style="width:100px; height:80px; border:2px solid black;">
   
   <li><a href="login.php">ADMIN</a></li>
	 <li><a href="contact.php">CONTACT US</a></li>
	 <li><a href="menu.php">MENU</a></li>
	  <li><a href="about.php">ABOUT US</a></li>
	  <li><a href="index.php">HOME</a></li>      
</ul>
</div>

<div class="wrap" >
        <form class="login-form"  method="post" style="background-color: #E6E6FA;">
            <div class="form-header">
                <h3>Login Form</h3>
                <p>Login to access Admin Panel</p>
            </div>
      
            <div class="form-group">
                <input type="text" class="form-input" id="user" placeholder="Username">
            </div>
          
            <div class="form-group">
                <input type="password" class="form-input" id="pwd" placeholder="Password">
            </div>
        
            <div class="form-group">
                <center><input type="button" value="Login" class="form-button" id="submit" onclick="validate()"/></center>
            </div>
            
        </form>
    </div>

    <div class="abc" style="background-color: #87CEFA; padding:20px;">
Contact Us Here <br>
Spice Food Restaurant<br>
Address: TE RAPA ROAD BASE<br>
Timmings: 11:00am - 12:00pm Everyday<br>
Phone: 0226035534<br>
Email: khoslaabhi3@gmail.com<br>
</div>


</body>

<script>
var attempt = 5; 
function validate(){
var username = document.getElementById("user").value;
var password = document.getElementById("pwd").value;
if ( username == "user" && password == "password"){
alert ("Login successfully");
window.location = "admin.php"; 
return false;
}
else{
attempt --;
alert("You have left "+attempt+" attempt;");
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
window.location="index.php";
}
}
}
</script>
</html>