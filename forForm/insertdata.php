<?php
    $server="localhost";
    $username="root";
    $pass="";
    $database="learnphp";
    
    $connect=new mysqli($server,$username,$pass);
    // $connect->query("DROP database $database");

    try{
        $connect->select_db($database);
    }catch(Exception $e){
        $connect->query("CREATE DATABASE $database");
    }

    $name=$_POST["name"];
    $email=$_POST["email"];

    $sql="CREATE TABLE IF NOT EXISTS users(
        user_id int(6) AUTO_INCREMENT PRIMARY KEY,
        user_name varchar(50) NOT NULL,
        user_mail varchar(50) NOT NULL
    )";
    $connect->query($sql);
    $sql="DELETE FROM users WHERE user_name='' or user_mail is NULL";
    $connect->query($sql);
    $sql="INSERT INTO users(user_name,user_mail) VALUES ('$name','$email')";
    $connect->query($sql);
    header("Location:http://127.0.0.1/learnsql/form.html");
    exit();
?>
