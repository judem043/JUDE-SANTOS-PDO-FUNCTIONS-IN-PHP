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

    $query ="UPDATE Customers
    SET first_name = ?, last_name = ?
    WHERE customer_id = 10
    ";

    $stmt = $pdo->prepare($query);

    $executeQuery = $stmt->execute(
        ["Ivan", "Duane"]
    );

    if ($executeQuery) {
        echo "Update successful!";      
    }
    else {
        echo "Query failed";
    }

    ?>
</body>
</html>