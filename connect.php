<?php
    $server="localhost";
    $userName="root";
    $pass="";
    $database="learnphp";
    function connect($server,$username,$pass,$database){
        $conn=new mysqli($server,$username,$pass);
        if($conn){
            try{
                try{
                    $conn->query("CREATE DATABASE $database");
                }catch(Exception $e){
                    echo "Already created<br>";
                }
                $conn->select_db($database);
                echo "Connected<br>";
            }catch(Exception $e){
                echo "The exception is <br> $e <br>";
            }
            $sql = "CREATE TABLE IF NOT EXISTS users (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(50) NOT NULL,
                email VARCHAR(50) NOT NULL
            )";
            $conn->query($sql);
            $sql="INSERT INTO users (name,email) VALUES ('mrdey','abcd@gmail.com')";
            $conn->query($sql);
            echo "Inserted sucessfully<br>";
        }
    }
    connect(server:$server,username:$userName,pass:$pass,database:$database);
?>