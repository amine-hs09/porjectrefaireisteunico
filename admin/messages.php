<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit;
}

require '../includes/db.php';
$stmt = $pdo->query('SELECT id, name, email, subject, status, created_at FROM messages ORDER BY created_at DESC');
$messages = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Messages reçus</title>
</head>
<body>
<h2>Messages reçus</h2>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Sujet</th>
        <th>Statut</th>
        <th>Date</th>
    </tr>
    <?php foreach ($messages as $msg): ?>
    <tr>
        <td><?php echo htmlspecialchars($msg['id']); ?></td>
        <td><?php echo htmlspecialchars($msg['name']); ?></td>
        <td><?php echo htmlspecialchars($msg['email']); ?></td>
        <td><?php echo htmlspecialchars($msg['subject']); ?></td>
        <td><?php echo htmlspecialchars($msg['status']); ?></td>
        <td><?php echo htmlspecialchars($msg['created_at']); ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="index.php">Retour au tableau de bord</a>
</body>
</html>
