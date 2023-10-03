<?php
$server = "localhost";
$username = "root";
$password = "root";
$database = "workshop";

// Create a PDO connection to the database
try {
    $pdo = new PDO("mysql:host=$server;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $response = ["error" => "Database connection failed: " . $e->getMessage()];
    echo json_encode($response);
    exit();
}

// Get the JSON data from the request body
$data = json_decode(file_get_contents("php://input"), true);

if (!empty($data)) {
    try {
        // Loop through the data and compare/update each entry in the "Gestion" table
        foreach ($data as $entry) {
            $id = $entry['id'];

            // Check if the entry exists in the database
            $checkQuery = "SELECT * FROM Gestion WHERE id = :id";
            $stmt = $pdo->prepare($checkQuery);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                // The entry exists, update it
                $updateColumns = [];
                $bindParameters = [":id" => $id];

                // Define your column names here
                $columnNames = [
                    "id",
                    "nom",
                    "prenom",
                    "ville",
                    "cursus"
                                ];

                foreach ($columnNames as $columnName) {
                    if ($columnName !== 'id') {
                        $updateColumns[] = "$columnName = :$columnName";
                        $bindParameters[":$columnName"] = $entry[$columnName]; // Add parameter for the column
                    }
                }

                $updateQuery = "UPDATE Gestion SET " . implode(', ', $updateColumns) . " WHERE id = :id";

                $updateStmt = $pdo->prepare($updateQuery);

                // Bind parameters for each field
                foreach ($bindParameters as $parameter => &$value) {
                    $updateStmt->bindParam($parameter, $value, PDO::PARAM_STR);
                }

                $updateStmt->execute();
            } else {
                // The entry doesn't exist, insert it
                $insertQuery = "INSERT INTO Gestion (id, nom, prenom, ville, cursus)";
                $insertStmt = $pdo->prepare($insertQuery);

                // Bind parameters for each field
                foreach ($entry as $columnName => $columnValue) {
                    $insertStmt->bindParam(":$columnName", $columnValue, PDO::PARAM_STR);
                }

                $insertStmt->execute();
            }
        }

        // Respond with a success message
        $response = ["success" => true];
        echo json_encode($response);
    } catch (PDOException $e) {
        $response = ["error" => "Error updating changes: " . $e->getMessage()];
        echo json_encode($response);
    }
} else {
    // No data received
    $response = ["error" => "No data received"];
    echo json_encode($response);
}
?>