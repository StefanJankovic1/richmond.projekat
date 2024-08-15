<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFC Richmond</title>
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
        }
        .logo img {
            max-width: 200px;
            height: auto;
            margin-bottom: 20px;
            border: 5px solid #800000; /* Bordo boja za okvir slike */
            border-radius: 10px;
        }
        h1 {
            font-size: 3em;
            color: #ffcc00; /* Zlatna boja za naslov */
            margin-bottom: 20px;
        }
        .btn-custom {
            background-color: #ffcc00; /* Zlatna boja za dugmad */
            border-color: #ffcc00;
            color: #0044cc; /* Plava boja za tekst na dugmadi */
            font-size: 1.2em;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease; /* Animacija za hover efekat */
        }
        .btn-custom:hover {
            background-color: #e6b800;
            border-color: #e6b800;
            transform: scale(1.05); /* Blagi zoom efekat */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="img/afc_richmond_logo.jpg" alt="AFC Richmond Logo">
        </div>
        <h1>Dobrodošli na zvanicnu stranicu kluba AFC Richmond</h1>
        <a href="login.php" class="btn btn-custom">Prijava</a>
        <a href="register.php" class="btn btn-custom">Registracija</a>
    </div>
</body>
</html>
