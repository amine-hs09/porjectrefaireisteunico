<?php
require '../includes/auth.php';
require '../includes/db.php';

// Count messages in contact form
$countStmt = $pdo->query('SELECT COUNT(*) FROM contacts');
$messageCount = $countStmt->fetchColumn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
</head>
<body>
<h2>Bienvenue dans l'admin</h2>
<p>Vous avez <?php echo $messageCount; ?> message(s) de contact.</p>
<nav>
    <a href="messages.php">Voir les messages</a> |
    <a href="logout.php">Déconnexion</a>
</nav>
</body>
</html>
