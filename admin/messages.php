<?php
require '../includes/auth.php';
require '../includes/db.php';

$stmt = $pdo->query('SELECT * FROM contacts ORDER BY created_at DESC');
$messages = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Messages</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 0.5rem; text-align: left; }
    </style>
</head>
<body>
<h2>Messages reçus</h2>
<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Sujet</th>
        <th>Message</th>
        <th>Date</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($messages as $msg): ?>
        <tr>
            <td><?php echo htmlspecialchars($msg['name']); ?></td>
            <td><?php echo htmlspecialchars($msg['email']); ?></td>
            <td><?php echo htmlspecialchars($msg['subject']); ?></td>
            <td><?php echo nl2br(htmlspecialchars($msg['message'])); ?></td>
            <td><?php echo $msg['created_at']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<p><a href="index.php">Retour au dashboard</a></p>
</body>
</html>
