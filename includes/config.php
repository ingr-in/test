<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'nature_website');

// Site configuration
define('SITE_NAME', 'प्रकृति का सौंदर्य');
define('SITE_DESC', 'प्रकृति की सुंदरता पर एक वेबसाइट');

// Connect to database
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
