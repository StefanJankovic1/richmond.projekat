<?php
session_start();
include('db.php'); // Proverite da li ovaj fajl postoji i da li sadrži odgovarajuću konekciju ka bazi

// Preuzmite podatke iz forme
$username = $_POST['username'];
$password = $_POST['password'];

// Pripremite i izvršite SQL upit za proveru korisničkog imena i lozinke
$sql = "SELECT * FROM users WHERE username = :username";
$stmt = $pdo->prepare($sql);
$stmt->execute(['username' => $username]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    // Ako je korisnik pronađen, spremite podatke u sesiju i preusmerite na dashboard
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header('Location: dashboard.php');
    exit;
} else {
    // Ako korisnik nije pronađen, vratite ga na login stranicu sa porukom o grešci
    header('Location: login.php?error=invalid_credentials');
    exit;
}
?>
