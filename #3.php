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
    $stmt = $pdo->prepare("SELECT * FROM Customers");
    if ($stmt->execute()) {
        echo "<pre>";
        print_r($stmt->fetchAll());
        echo "<pre>";
    }
    

    ?>
</body>
</html>