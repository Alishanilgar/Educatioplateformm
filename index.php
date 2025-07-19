<?php
// Example: backend logic that sends a JSON response to frontend
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Return some data to the frontend (could be from a database or logic)
    echo json_encode(["message" => "Hello from PHP backend!"]);
    exit;
}

?>
<?php
// Handling POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the raw POST data
    $inputData = json_decode(file_get_contents("php://input"), true);

    // Process the data
    $name = $inputData["name"];
    $age = $inputData["age"];

    // Respond with JSON data
    echo json_encode(["message" => "Received data: Name - $name, Age - $age"]);
    exit;
}
?>

