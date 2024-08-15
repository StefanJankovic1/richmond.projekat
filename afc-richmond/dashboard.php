<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
$username = $_SESSION['username']; // Pretpostavimo da je korisničko ime spremljeno u sesiji
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFC Richmond Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
    <link href="css/styles.css" rel="stylesheet">
    <script src="js/scripts.js" defer></script>
    <style>
        body {
            background-color: #0044cc; 
            color: #ffffff; 
            font-family: 'Roboto', sans-serif; 
        }
        .navbar {
            background-color: #002080; /
        }
        .navbar a {
            color: #ffffff !important;
        }
        .content-section {
            text-align: center;
            margin-top: 50px;
        }
        .content-section img {
            max-width: 800px; /
            height: auto;
            border-radius: 10px;
            border: 5px solid #800000; 
            margin: 20px auto; 
        }
        .content-section h2, .content-section h3 {
            margin-top: 20px;
            font-size: 3em;
            text-transform: uppercase;
            color: #ffcc00;
        }
        .content-section p {
            font-size: 1.2em;
            margin-top: 20px;
            color: #ffffff; 
            text-align: justify;
        }
        .main-content {
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: justify; 
        }
        .main-content .info {
            max-width: 800px;
            margin: 0 auto;
        }
        .main-content .logo {
            text-align: right;
        }
        .main-content .logo img {
            max-width: 300px;
            height: auto;
            border: 5px solid #800000; 
            border-radius: 10px;
        }
        .coach-section {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
        }
        .coach-section img {
            max-width: 300px; 
            height: auto;
            border: 5px solid #800000; 
            border-radius: 10px;
            margin-right: 20px;
        }
        .coach-section p {
            font-size: 1.2em;
            text-align: justify;
        }
        .team-section img {
            max-width: 100%; 
            height: auto;
            border-radius: 10px;
            border: 5px solid #800000; 
            margin-top: 20px;
        }
        .news-section {
            margin-top: 50px;
        }
        .card {
            background-color: #ffcc00; 
            border: 2px solid #800000; 
            border-radius: 10px;
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
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">AFC Richmond</a>
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
                    <a class="nav-link" href="#">Zdravo, <?php echo htmlspecialchars($username); ?>!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Odjavi se</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="main-content">
            <div class="info">
                <h2 style="color: #ffcc00;">AFC Richmond</h2> 
                <p>
                    AFC Richmond je fiktivni fudbalski klub iz popularne TV serije "Ted Lasso". Klub je poznat po svojim strastvenim navijačima i posvećenosti lepom fudbalu. Pod vođstvom uvek pozitivnog i inspirativnog Teda Lassa, AFC Richmond ima za cilj da ostavi trag u svetu fudbala. Klub se takmiči u vrhunskim ligama i neprestano radi na unapređenju svojih veština i taktike.
                </p>
                <p>
                    Fudbalski klub AFC Richmond osnovan je s ciljem da promoviše timski duh i sportski duh među igračima i navijačima. Klub je domaćin mnogim uzbudljivim utakmicama i događajima koji okupljaju ljubitelje fudbala iz svih krajeva sveta. Sa bogatom istorijom i jakim vrednostima, AFC Richmond teži ka uspehu i na terenu i van njega.
                </p>
                <p>
                    Posetite naš sajt za najnovije vesti, raspored utakmica i rezultate. Pratite nas i podržite AFC Richmond u njihovim naporima da postanu najbolji tim u ligi. Zajedno, možemo postići velike stvari!
                </p>
            </div>
            <div class="logo">
                <img src="img/afc_richmond_logo.jpg" alt="AFC Richmond">
            </div>
        </div>
        <div id="teamCarousel" class="carousel slide content-section" data-ride="carousel">
            <h3 style="color: #ffcc00;">Tim</h3>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/player1.jpg" class="d-block w-100" alt="Player 1">
                    <div class="carousel-caption d-none d-md-block">
                        <p>
                            Naš tim se sastoji od talentovanih igrača koji su posvećeni postizanju najboljih rezultata na terenu.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/player2.jpg" class="d-block w-100" alt="Player 2">
                    <div class="carousel-caption d-none d-md-block">
                        <p>
                            Igrači AFC Richmond-a poznati su po svojoj borbenosti, timskoj igri i neustrašivom duhu.
                        </p>
                    </div>
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#teamCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Prethodni</span>
            </a>
            <a class="carousel-control-next" href="#teamCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Sledeći</span>
            </a>
        </div>
        <div class="news-section content-section">
            <h3 style="color: #ffcc00;">Novosti</h3> 
            <div class="card-deck">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pobeda u poslednjoj utakmici</h5>
                        <p class="card-text">AFC Richmond je ostvario pobedu u poslednjoj utakmici rezultatom 2-1 protiv rivala. Igrači su pokazali izuzetnu borbenost i timski duh.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Novi trener za sledeću sezonu</h5>
                        <p class="card-text">Tim je najavio dolazak novog trenera koji će preuzeti ekipu sledeće sezone. Očekujemo još bolje rezultate pod njegovim vođstvom.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Održan trening sa mladim talentima</h5>
                        <p class="card-text">AFC Richmond je organizovao specijalni trening za mlade talente iz lokalne zajednice. Cilj je da se mladi igrači inspirišu i motivišu.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="coach-section">
            <img src="img/coach.jpg" alt="Coach">
            <div>
                <h3 style="color: #ffcc00;">Trener</h3> 
                <p>
                    Trener AFC Richmond-a, Ted Lasso, je poznat po svom jedinstvenom pristupu treniranju. Njegov optimizam, motivacioni stil i posvećenost timu inspirišu igrače da daju sve od sebe na terenu. Pod njegovim vođstvom, tim je postigao izvanredne rezultate i nastavlja da napreduje.
                </p>
                <p>
                    Ted Lasso donosi svežinu i entuzijazam u svaki trening i utakmicu. Njegova filozofija treniranja zasnovana je na verovanju u timski rad, podršci i stalnom učenju. Sa Tedovim vođstvom, igrači AFC Richmond-a razvijaju se ne samo kao sportisti već i kao osobe, što doprinosi pozitivnoj atmosferi unutar tima i odličnim rezultatima na terenu.
                </p>
            </div>
        </div>
        <div class="footer">
            <p>&copy; 2024 AFC Richmond. Sva prava zadržana.</p>
            <button class="btn btn-custom">Kontaktirajte nas</button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
