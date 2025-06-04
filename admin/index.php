<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
</head>
<body>
<h2>Bienvenue dans l'admin</h2>
<p>Tableau de bord à venir.</p>
<ul>
    <li><a href="messages.php">Messages reçus</a></li>
</ul>
<a href="logout.php">Déconnexion</a>
</body>
</html>
