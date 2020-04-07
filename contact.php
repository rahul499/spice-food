<!DOCTYPE html>
<html>
<head>
  <title>Spice Food</title>
      <link rel="stylesheet" href="css/about.css">
       <link rel="stylesheet" href="css/style.css">

<style>

  .screen-body{
    background-color: #00FFFF;
  }
  .screen{
    background-color: red;
  }
  body{
    background-image: url("images/demo3.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
  .background{
     background-color:black;
  }

  .app-form-control{
    color:black;
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



<div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>CONTACT</span>
            <span>US</span>
          </div>
          <div class="app-contact">CONTACT INFO : 0226035534</div>
        </div>
        
        <div class="screen-body-item">
          <div class="app-form">

          <form name="form" action="contactdata.php" method="post">

            <div class="app-form-group">
              <input class="app-form-control" name="name" placeholder="NAME" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" name="email" placeholder="EMAIL" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" name="mobile" placeholder="CONTACT NO" required>
            </div>

            <div class="app-form-group message">
             <input class="app-form-control" name="fooditem" placeholder="FOOD ITEM">
            </div>
            <div class="app-form-group">
               <input class="app-form-control" name="amount " placeholder="QUANTITY">
          </div>

            <div class="app-form-group message">
             <input class="app-form-control" name="message" placeholder="ANY ADDITIONAL MESSAGE">
            </div>
            <div class="app-form-group buttons"><BR>
              <input type="submit" value="submit" style="background-color: lightblue;">
            </div>

          </form>

          </div>
        </div>
      </div>
    </div>
   
  </div>
</div>

    <center>
         <h1 class="w3-xxlarge" >MAP OF NEW ZEALAND</h1>
<div class="card" >
<div class="col-lg-6 col-md-6 col-xs-12">
   <div id="map">
 <iframe src="https://www.google.com/maps/d/embed?mid=1DziZYAuUxlZFURMGKp9p37YnhFo"  frameborder="0" style="border:1PX; width:706px; height:500px;" allowfullscreen></iframe> 
    </div>
    </div>
</div>
<br><br><br>
</center>

<div class="abc" style="background-color:pink;black:white;padding:20px;">
Contact Us Here <br>
Spice Food Restaurant<br>
Address: TE RAPA ROAD BASE<br>
Timmings: 11:00am - 12:00pm Everyday<br>
Phone: 0226035534<br>
Email: khoslaabhi3@gmail.com<br>
</div>

</body>
</html>
