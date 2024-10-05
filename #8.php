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

    $query = "SELECT * FROM Customers";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll();

    if ($result) {
        ?>
        <table border="1">
            <tr>
                <th>Customer ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Contact Info</th>
            </tr>
            <?php foreach ($result as $row) { ?>
                <tr>
                    <td><?php echo $row['customer_id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['contact_info']; ?></td>
                </tr>
            <?php } ?>
        </table>
        <?php
    } else {
        echo "No results found";
    }

    ?>
</body>
</html>