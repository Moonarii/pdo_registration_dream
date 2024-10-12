<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Job</title>
</head>
<body>
    <pre> 
    <?php

    //Deleting a data from the database
    
    $query = "DELETE FROM job WHERE id = 1234";
    
    $stmt = $pdo->prepare($query);

    //If the query is executed then the data must be presented
    $executeQuery = $stmt->execute();

    if ($executeQuery) {
        echo "Deletion successful!";
    }
    else {
        echo "Deletion failed";
    }

    ?>
    </pre>

</body>
</html>
