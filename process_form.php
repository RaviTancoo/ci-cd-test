<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? 'Guest';
    echo "Hello, " . htmlspecialchars($name);
} else {
    echo "Send a POST request to see the result.";
}
?>
