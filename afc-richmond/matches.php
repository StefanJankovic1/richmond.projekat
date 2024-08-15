<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
include('db.php');

// Preuzmite sve utakmice iz baze podataka
$sql = "SELECT * FROM matches";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$matches = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFC Richmond - Utakmice</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #0044cc; /* Plava boja iz logotipa */
            color: #ffffff; /* Bela boja za tekst */
            font-family: 'Roboto', sans-serif; /* Promena fonta */
        }
        .navbar {
            background-color: #002080; /* Tamno plava boja */
        }
        .navbar a {
            color: #ffffff !important;
        }
        .container {
            margin-top: 50px;
        }
        h1 {
            font-size: 2.5em;
            color: #ffcc00; /* Zlatna boja za naslov */
            text-align: center;
            margin-bottom: 40px;
        }
        .card {
            background-color: #ffcc00; /* Svetla boja za kartice */
            color: #0044cc; /* Plava boja za tekst */
            border: 2px solid #800000; /* Bordo boja za okvir kartice */
            border-radius: 10px;
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Animacija za hover efekat */
        }
        .card:hover {
            transform: scale(1.05); /* Blagi zoom efekat */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); /* Senka za hover efekat */
        }
        .card-title {
            color: #0044cc; /* Plava boja za naslov kartice */
            font-weight: 700;
        }
        .card-text {
            color: #000000; /* Crna boja za tekst */
        }
        .footer {
            margin-top: 50px;
            padding: 20px;
            background-color: #002080;
            color: #ffffff;
            text-align: center;
        }
        .btn-custom {
            background-color: #ffcc00; /* Zlatna boja za dugmad */
            border-color: #ffcc00;
            color: #0044cc; /* Plava boja za tekst na dugmadi */
        }
        .btn-custom:hover {
            background-color: #e6b800;
            border-color: #e6b800;
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
        <h1>Utakmice AFC Richmond</h1>
        <div class="row">
            <?php foreach ($matches as $match): ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($match['opponent']); ?></h5>
                            <p class="card-text">Datum: <?php echo htmlspecialchars($match['date']); ?></p>
                            <p class="card-text">Rezultat: <?php echo htmlspecialchars($match['result']); ?></p>
                            <p class="card-text">Stadion: <?php echo htmlspecialchars($match['stadium']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 AFC Richmond. Sva prava zadržana.</p>
        <button class="btn btn-custom">Kontaktirajte nas</button>
    </div>
</body>
</html>
