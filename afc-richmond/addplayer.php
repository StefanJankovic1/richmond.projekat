<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $position = $_POST["position"];
    $number = $_POST["number"];
    $biography = $_POST["biography"];
    $goals = $_POST["goals"];
    $assists = $_POST["assists"];
    $matches = $_POST["matches"];

    $sql = "INSERT INTO players (name, position, number, biography, goals, assists, matches)
        VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $position, $number, $biography, $goals, $assists, $matches]);

    header("Location: players.php");
}

?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFC Richmond - Dodaj igrača</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #0044cc; 
            color: #ffffff; 
            font-family: 'Roboto', sans-serif; 
        }
        .navbar {
            background-color: #002080; 
        }
        .navbar a {
            color: #ffffff !important;
        }
        .container {
            margin-top: 50px;
        }
        h1 {
            font-size: 2.5em;
            color: #ffcc00; 
            text-align: center;
            margin-bottom: 40px;
        }
        .card {
            background-color: #ffcc00; 
            color: #0044cc; 
            border: 2px solid #800000;
            border-radius: 10px;
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease; 
        }
        .card:hover {
            transform: scale(1.05); 
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); 
        }
        .card-title {
            color: #0044cc; 
            font-weight: 700;
        }
        .card-text {
            color: #000000; 
        }
        .footer {
            margin-top: 50px;
            padding: 20px;
            background-color: #002080;
            color: #ffffff;
            text-align: center;
        }
        .btn-custom {
            background-color: #ffcc00; 
            border-color: #ffcc00;
            color: #0044cc; 
        }
        .btn-custom:hover {
            background-color: #e6b800;
            border-color: #e6b800;
        }
        .navbar {
            background-color: #002080; 
        }
        .navbar a {
            color: #ffffff !important;
        }
        .container {
            text-align: center;
            background-color: #002080; /* Tamno plava boja */
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); /* Senka za kontejner */
            max-width: 400px;
            width: 100%;
        }
        .logo img {
            max-width: 150px;
            height: auto;
            margin-bottom: 20px;
            border: 5px solid #800000; /* Bordo boja za okvir slike */
            border-radius: 10px;
        }
        h1 {
            font-size: 2em;
            color: #ffcc00; /* Zlatna boja za naslov */
            margin-bottom: 20px;
        }
        .form-control {
            background-color: #ffffff; /* Bela boja za input polja */
            color: #0044cc; /* Plava boja za tekst u input poljima */
            border: 2px solid #800000; /* Bordo boja za okvir input polja */
            margin-bottom: 15px;
        }
        .btn-custom {
            background-color: #ffcc00; /* Zlatna boja za dugmad */
            border-color: #ffcc00;
            color: #0044cc; /* Plava boja za tekst na dugmadi */
            font-size: 1.2em;
            padding: 10px 20px;
            margin-top: 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease; /* Animacija za hover efekat */
        }
        .btn-custom:hover {
            background-color: #e6b800;
            border-color: #e6b800;
            transform: scale(1.05); /* Blagi zoom efekat */
        }
        .error {
            color: red;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="dashboard.php">AFC Richmond</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="addplayer.php">Dodaj igrača</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="players.php">Igrači</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="matches.php">Utakmice</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Zdravo, <?php echo htmlspecialchars($_SESSION['username']); ?>!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Odjavi se</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="logo">
            <img src="img/afc_richmond_logo.jpg" alt="AFC Richmond Logo">
        </div>
        <h1>Dodavanje igrača</h1>
        <form action="addplayer.php" method="post">
            <input type="text" name="name" class="form-control" placeholder="Ime i prezime" required>
            <input type="text" name="position" class="form-control" placeholder="Pozicija" required>
            <input type="text" name="number" class="form-control" placeholder="Broj" required>
            <input type="text" name="biography" class="form-control" placeholder="Biografja" required>
            <input type="text" name="goals" class="form-control" placeholder="Golovi" required>
            <input type="text" name="assists" class="form-control" placeholder="Asistencije" required>
            <input type="text" name="matches" class="form-control" placeholder="Mečevi" required>
            
            <button type="submit" class="btn btn-custom">Dodaj igrača</button>
            <?php
            if (isset($_GET['error']) && $_GET['error'] == 'invalid_credentials') {
                echo '<p class="error">Došlo je do greške.</p>';
            }
            ?>
        </form>
    </div>
    <div class="footer">
        <p>&copy; 2024 AFC Richmond. Sva prava zadržana.</p>
        <button class="btn btn-custom">Kontaktirajte nas</button>
    </div>
</body>
</html>
