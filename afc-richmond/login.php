<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFC Richmond - Prijava</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #0044cc; /* Plava boja iz logotipa */
            color: #ffffff; /* Bela boja za tekst */
            font-family: 'Roboto', sans-serif; /* Promena fonta */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
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
    <div class="container">
        <div class="logo">
            <img src="img/afc_richmond_logo.jpg" alt="AFC Richmond Logo">
        </div>
        <h1>Prijava</h1>
        <form action="process_login.php" method="post">
            <input type="text" name="username" class="form-control" placeholder="Korisničko ime" required>
            <input type="password" name="password" class="form-control" placeholder="Lozinka" required>
            <button type="submit" class="btn btn-custom">Prijavi se</button>
            <?php
            if (isset($_GET['error']) && $_GET['error'] == 'invalid_credentials') {
                echo '<p class="error">Neispravno korisničko ime ili lozinka.</p>';
            }
            ?>
        </form>
    </div>
</body>
</html>
