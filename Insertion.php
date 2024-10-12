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

    //Inserting data to the table
    
    $query = "INSERT INTO job (id, Full_Name, date_of_birth, Gender, Contact_Number, Address_added, Profession_dream, Expected_salary) VALUES (?,?,?,?,?,?,?,?)";

    $stmt = $pdo->prepare($query);
    //If the query is executed then the data must be presented
    $executeQuery = $stmt->execute(
            ['9876', 'Rhaenys Ive', '2002-02-02', 'Female', '321-654-1987', 'United Kingdom', 'Software QA', '35,000']
      );

     if ($executeQuery) {
        echo "Query successful!";
     }
     else {
        echo "Query failed";
     }

    ?>
    </pre>

</body>
</html>
