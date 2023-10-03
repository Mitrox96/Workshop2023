<?php
// Database connection details
$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = "root"; // Replace with your database password
$dbname = "workshop"; // Replace with your database name

try {
    // Create a new PDO instance (change the driver if you're not using MySQL)
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Collect form data
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ville = $_POST['ville'];
    $cursus = $_POST['cursus'];

    // Prepare and execute the SQL query to insert data into the database
    $stmt = $pdo->prepare("INSERT INTO Economie (nom, prenom, ville, cursus) VALUES (?, ?, ?, ?,)");

    $stmt->execute([$nom, $prenom, $ville, $cursus]);

    // Provide a response to indicate success
    $response = array("message" => "Data added successfully to the database");
    echo json_encode($response);
} catch (PDOException $e) {
    // Handle any errors that occur during database connection or query execution
    $response = array("error" => "Database error: " . $e->getMessage());
    echo json_encode($response);
}
?>