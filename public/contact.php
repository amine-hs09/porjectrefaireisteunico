<?php
require '../includes/db.php';
$messageSent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    $stmt = $pdo->prepare('INSERT INTO messages (name, email, subject, message, status, created_at) VALUES (?, ?, ?, ?, "Nouveau", NOW())');
    $stmt->execute([$name, $email, $subject, $message]);
    $messageSent = true;
}

include '../includes/header.php';
?>
<h2>Contact</h2>
<?php if ($messageSent): ?>
    <p>Merci pour votre message&nbsp;!</p>
<?php else: ?>
    <form action="" method="post">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="subject">Sujet</label>
        <input type="text" name="subject" id="subject" required>

        <label for="message">Message</label>
        <textarea name="message" id="message" required></textarea>

        <button type="submit">Envoyer</button>
    </form>
<?php endif; ?>
<?php include '../includes/footer.php'; ?>
