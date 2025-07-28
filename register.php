
<?php
function multi_hash($password, $rounds = 9) {
    $hashed = $password;
    for ($i = 0; $i < $rounds; $i++) {
        $hashed = hash('sha256', $hashed);
    }
    return $hashed;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $secure = multi_hash($password);
    echo "User: $username<br>Encrypted Password: $secure";
}
?>
