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

// Updating a data from the database

	$query = "UPDATE job SET Full_Name = ?, Expected_salary = ? WHERE id = 9876";

	 $stmt = $pdo->prepare($query);

//If the query is executed then the data must be presented
	 $executeQuery = $stmt->execute(
	 	["Kim Taeyeon", "40,000"]
	 );

	if ($executeQuery) {
	 	echo "Update successful!";
	 }
	else {
		echo "Query failed";
	 }

    ?>
    </pre>

</body>
</html>
