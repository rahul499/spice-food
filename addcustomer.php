<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <style>
       body {
background-image: url('images/demo.png');
background-repeat: no-repeat;
background-size: cover;
}

.form-register{
    max-width: 1000px;
    width: 100%;
    margin: 0 auto;

    font: bold 14px sans-serif;
    text-align: center;
}

.form1{
    position: relative;
    display: inline-block;
    vertical-align: top;
    margin-right: 130px;
    text-align: center;
}

.form1 .form-white-background{
    width: 570px;
    box-sizing: border-box;
    background-color: #ffffff;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
    padding: 60px 80px;
    margin-bottom: 35px;
}

.form1 .form-row{
    text-align: left;
    margin-bottom: 23px;
}

.form1 .form-title-row{
    text-align: center;
    margin-bottom: 50px;
}

.form1 h1{
    display: inline-block;
    box-sizing: border-box;
    color:  #4c565e;
    font-size: 24px;
    padding: 0 20px 15px;
    border-bottom: 2px solid #6caee0;
    margin: 0;
}

.form1 .form-row > label span{
    display: inline-block;
    box-sizing: border-box;
    color:  #5f5f5f;
    width: 125px;
    text-align: right;
    padding-right: 25px;
}

.form1 input{
    color:  #5f5f5f;
    box-sizing: border-box;
    width: 230px;
    box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
    padding: 12px 18px;
    border: 1px solid #dbdbdb;
}

.form1 .form-checkbox input{
    margin-left: 128px;
    margin-right: 10px;
    width: auto;
    vertical-align: top;
}

.form1 .form-row .form-checkbox span{
    font-size: 12px;
    font-weight: normal;
    display: inline-block;
    text-align: left;
    width: 220px;
    margin: 0;
}

.form1.form-checkbox span a{
    text-decoration: none;
    color:  #6caee0;
}

.form1 button{
    display: block;
    border-radius: 2px;
    background-color:  #6caee0;
    color: #ffffff;
    font-weight: bold;
    box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
    padding: 15px 35px;
    border: 0;
    margin: 55px auto 0;
    cursor: pointer;
}

.form1 .form-log-in-with-existing{
    text-decoration: none;
    padding: 4px 8px;
    font-weight: normal;
    color: #7b9d62;
    background-color: #d6f0c3;
}

.msg-box{
            height: 80px;
        }

@media (max-width: 900px) {


    .form-register{
        margin: 20px auto;
    }

    .form1{
        position: relative;
        display: block;
        margin: 0;
    }

    .form1 .form-white-background{
        margin: 0 auto 32px;
    }

    .form1:after{
        bottom: -80px;
        left: 50%;
        margin-left: -25px;
    }

    .form-sign-in-with-social {
        margin-top: 105px;
    }

}

@media (max-width: 600px) {

    .form1 .form-white-background{
        width: 300px;
        padding-left: 35px;
        padding-right: 35px;
    }

    .form1 .form-row > label span{
        display: block;
        text-align: left;
        padding: 0 0 10px;
    }

    .form1 input{
        display: block;
        margin: 0 auto;
    }

    .form1 .form-checkbox input{
        display: inline-block;
        margin-left: 0;
    }

    .form1 .form-checkbox span{
        width: 200px !important;
    }

    .form1:after{
        bottom: -80px;
        left: 50%;
        margin-left: -25px;
    }
.body{
background-image-width: 600px;
}

}
</style>


    </head>
    <body>

<div class="list">
<ul>
    
    <li class="title"><a href="index.php">SPICE FOOD</a>
  </li>  <img src="images/logo.png" alt="logo" style="width:100px; height:80px; border:2px solid black;">
     
         <li><a href="admin.php">ADMIN PANEL</a></li>
     <li><a href="contact.php">CONTACT US</a></li>
     <li><a href="menu.php">MENU</a></li>
      <li><a href="about.php">ABOUT US</a></li>
      <li><a href="index.php">HOME</a></li>      
</ul>
</div>


    <div class="main-content" >
  <br><br><br>
        <form class="form-register" method="post" action="addcustomerdata.php">

            <div class="form1">

                <div class="form-white-background" style="background-color: #FFE4E1; border:4px;">

                    <div class="form-title-row">
                        <h1>Customer Registration</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Name</span>
                            <input type="text" name="name" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Age</span>
                            <input type="text" name="age" required>
                        </label>
                    </div>

                   

                    <div class="form-row">
                        <label>
                            <span>Gender</span>
                           <select name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                     </select>
                        </label>
                    </div>

                     
                     <div class="form-row">
                        <label>
                            <span>Mobile Number</span>
                            <input type="text" name="number" pattern="[0-9]{10}"  /> 
                        </label>
                    </div>

                    

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email" required>
                        </label>
                    </div>

                     <div class="form-row">
                        <label>
                            <span>Address</span>
                            <input type="text" name="address"   /> 
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Pending Dues</span>
                            <input type="text" name="dues"   /> 
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Payment Methods</span>
                            <input type="text" name="payment"   /> 
                        </label>
                    </div>


                    <div class="form-row">
                        <button type="submit">Add</button>
                    </div><br>

                </div>

                

            </div>

        </form>
  <br><br>
    </div>

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