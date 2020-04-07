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
    $position = $_POST['position'];
    $shift = $_POST['shift'];
    $gender = $_POST['gender'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $query = " insert into staffinfo (name, age, position, shift, gender, number, email, address, salary)
    values ('$name', '$age', '$position', '$shift', '$gender', '$number', '$email', '$address', 'salary') ";


    mysqli_query($con, $query);

    header('location:admin.php');

?>