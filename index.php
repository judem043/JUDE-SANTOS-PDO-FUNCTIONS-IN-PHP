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

    $query ="DELETE FROM Customers WHERE customer_id = 11";


    $stmt =$pdo->prepare($query);
    $executeQuery = $stmt->execute();

    if ($executeQuery) {
        echo "Delete Successful!";
    }
    else {
        echo "Delete Failed";
    }

    ?>
</body>
</html>