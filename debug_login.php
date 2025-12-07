<?php
session_start();
require_once 'config.php';

$email = "rennntor@mail.com";
$password = "ayamgoreng";

echo "<h3>CEK EMAIL</h3>";

$result = $conn->query("SELECT * FROM user WHERE email='$email'");

if (!$result) {
    die("QUERY ERROR: " . $conn->error);
}

if ($result->num_rows == 0) {
    die("EMAIL TIDAK DITEMUKAN DALAM DATABASE!");
}

$user = $result->fetch_assoc();

echo "Email ditemukan!<br>";
echo "Hash di database:<br>";
echo "<pre>";
var_dump($user['password']);
echo "</pre>";

echo "<h3>CEK PASSWORD</h3>";

if (password_verify($password, $user['password'])) {
    echo "PASSWORD BENAR!";
} else {
    echo "PASSWORD SALAH!";
}
