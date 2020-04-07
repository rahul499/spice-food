<?php
  
  $con = mysqli_connect('localhost','root');

  if($con)
  {
    echo "Connection successfull";
  }
  else{
    echo "No connection";
  }

  mysqli_select_db($con, 'contactus');

  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $fooditem = $_POST['fooditem'];
  $message = $_POST['message'];

  $query = " insert into userinfo (name, email, mobile, fooditem, message)
  values ('$name', '$email', '$mobile', '$fooditem', '$message') ";

    echo "$query";

  mysqli_query($con, $query);

  header('location:contact.php');

?>