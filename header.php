<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="flex justify-around gap-8 items-center text-gray-100 bg-gray-900 p-8">

        <a href="accueil.php">Accueil</a>
        <a href="about.php">A propos</a>
        <a href="liste-article.php">Articles</a>

        <?php if (!empty($_SESSION['pseudo'])) : ?>
            <a href="deconnexion.php">Déconnexion</a>
            <p>Bonjour, <?= $_SESSION['pseudo'] ?></p>

        <?php else : ?>
            <a href="connexion.php">Connexion</a>
        <?php endif; ?>
        <a href="register.php">Register</a>
    </nav>
</html>    
</body>