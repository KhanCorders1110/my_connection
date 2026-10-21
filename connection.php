<?php
    $host = 'localhost';
    $user = 'root';
    $passowrd = '';
    $database = 'college';
  
    try {
        $connection = new PDO("mysql:host=$host;dbname=$database",$user,$passowrd);

        $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // echo "My connection is successful";
        
    } catch(PDOException $error) {
        echo "Error in database" . $error;
    }
   