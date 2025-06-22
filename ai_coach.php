<?php
session_start();
if (!isset($_SESSION['sport'])) {
    header('Location: registration.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coach AI</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
<h2>Il tuo programma personalizzato</h2>
<p><strong>Dati Anagrafici:</strong></p>
<ul>
    <?php foreach ($_SESSION['anagrafica'] as $k => $v): ?>
        <li><?php echo ucfirst($k); ?>: <?php echo htmlspecialchars($v); ?></li>
    <?php endforeach; ?>
</ul>
<p><strong>Sport scelto:</strong> <?php echo ucfirst($_SESSION['sport']); ?> - <?php echo $_SESSION['categoria']; ?></p>
<p>Qui il coach AI ti proporrà il programma personalizzato e potrai impostare il calendario dei tuoi allenamenti.</p>
<a class="button" href="index.php">Torna alla Home</a>
</div>
</body>
</html>
