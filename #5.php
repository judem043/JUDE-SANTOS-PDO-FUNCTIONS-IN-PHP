<?php require_once 'core/dbConfig.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $query ="INSERT INTO Customers (first_name, last_name, contact_info) VALUES (?,?,?)";

    $stmt =$pdo->prepare($query);
    $executeQuery = $stmt->execute(
        ["Daryl", "Smith","testing@gmail.com"]
    );
    if ($executeQuery) {
        echo "Query Successful!";
    }
    else {
        echo "Query Failed";
    }

    ?>
</body>
</html>