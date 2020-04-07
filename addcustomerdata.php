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
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $dues = $_POST['dues'];
    $payment = $_POST['payment'];

    $query = " insert into customerinfo (name, age, gender, number, email, address, dues, payment)
    values ('$name', '$age', '$gender', '$number', '$email', '$address', '$dues', '$payment') ";


    mysqli_query($con, $query);

    header('location:admin.php');

?>