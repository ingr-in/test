<?php
// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "nature_website";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['update_content'])) {
        $id = $_POST['id'];
        $content = $_POST['content'];
        $sql = "UPDATE sections SET content='$content' WHERE id=$id";
        $conn->query($sql);
    }
}

// Get all sections
$sections = [];
$result = $conn->query("SELECT * FROM sections");
while ($row = $result->fetch_assoc()) {
    $sections[$row['id']] = $row;
}
?>
<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>प्रकृति का सौंदर्य - एक नजर</title>
  <meta name="description" content="प्रकृति की सुंदरता पर एक SEO फ्रेंडली पेज जिसमें पेड़, पहाड़, नदियाँ और जीवनशैली को दर्शाया गया है।">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      background-color: #fff;
      color: #333;
      transition: all 0.3s ease-in-out;
    }
    header, footer {
      background: linear-gradient(45deg, #FF9A9E 0%, #FAD0C4 99%, #FAD0C4 100%);
      color: white;
      padding: 30px;
      text-align: center;
    }
    nav {
      background: linear-gradient(to right, #FF416C, #FF4B2B);
      color: white;
      padding: 15px;
      text-align: center;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    nav a {
      color: white;
      margin: 0 15px;
      text-decoration: none;
      font-weight: bold;
      font-size: 18px;
      padding: 8px 15px;
      border-radius: 20px;
      transition: all 0.3s ease;
    }
    h1 {
      font-family: 'Great Vibes', cursive;
      font-size: 3.5rem;
      background: linear-gradient(to right, #FF416C, #FF4B2B);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
    }
    .admin-panel {
      background: #f8f9fa;
      padding: 20px;
      margin: 20px auto;
      max-width: 800px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .admin-form {
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <header>
    <h1>🌿 प्रकृति का सौंदर्य 🌸</h1>
    <p>🌍 नेचर हमें शांति, ऊर्जा और प्रेरणा देती है। 🌞</p>
  </header>
  
  <nav>
    <a href="index.php">🏡 मुख्य पृष्ठ</a>
    <a href="about.php">🌲 हमारे बारे में</a>
    <a href="gallery.php">📷 गैलरी</a>
    <a href="contact.php">📩 संपर्क करें</a>
    <a href="admin.php" style="background: rgba(255,255,255,0.3);">🔧 एडमिन</a>
  </nav>

  <?php
  // Current page content
  $page = basename($_SERVER['PHP_SELF'], '.php');
  
  switch($page) {
    case 'index':
      include 'home.php';
      break;
    case 'about':
      include 'about.php';
      break;
    case 'gallery':
      include 'gallery.php';
      break;
    case 'contact':
      include 'contact.php';
      break;
    case 'admin':
      include 'admin.php';
      break;
    default:
      include 'home.php';
  }
  ?>

  <footer>
    <p>© <?php echo date("Y"); ?> प्रकृति प्रेमी | Developed with ❤️</p>
    <p>🌸 प्रकृति से प्रेम करें, उसकी रक्षा करें 🌍</p>
  </footer>
</body>
    </html>
