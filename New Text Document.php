<?php
session_start(); // Start or resume the session

// Sample user credentials. Replace this with a database query in a real application.
$users = [
    'djproject' => 'djboicool',
    'gsus' => 'gsusgay',
    'momedeh' => 'idkwut',
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (array_key_exists($username, $users) && $users[$username] === $password) {
        // Authentication successful
        $_SESSION['username'] = $username;
        header("Location: djboicool.github.io/soaringboi"); // Redirect to the restricted page
    } else {
        // Authentication failed
        header("Location: ?login=failed"); // Redirect to the sign-in page with an error message
    }
}
?>
