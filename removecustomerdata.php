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

    $id = $_POST['id']; 
    $comments = $_POST['comments'];


    $query = " DELETE from customerinfo where id = $id ";


    mysqli_query($con, $query);

    header('location:admin.php');

?>
