<?php
    include('connection.php');

    try {    
        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $age = $_POST['age'];
        $adders = $_POST['adders'];
        $marks = $_POST['marks'];
        
        $sql = "INSERT INTO students_data (name,fname,age,adders,marks) VALUES (:name, :fname, :age, :adders, :marks)";

        $statment = $connection->prepare($sql);
        
            $statment->execute([
                ':name' => $name,
                ':fname' => $fname,
                ':age' => $age,
                ':adders' => $adders,
                ':marks' => $marks,
            ]);
        echo "My data inserted successful";
    }   catch (PDOException $e) {
        echo "Error in database" . $e->getMessage();
    }