<?php
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Subasri";

    //creating a connection
    $con = mysqli_connect($email,$password);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO login (email,password) VALUES ('$email', '$password')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);

?>