<?php
require '../includes/db.php';
include '../includes/header.php';

$success = null;
$error = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name && $email && $subject && $message) {
        $stmt = $pdo->prepare('INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)');
        $stmt->execute([$name, $email, $subject, $message]);
        @mail('info@unico-consult.be', $subject, $message, "From: $name <$email>");
        $success = 'Votre message a été envoyé.';
    } else {
        $error = 'Veuillez remplir tous les champs.';
    }
}
?>
<h2>Contact</h2>
<?php if ($success): ?>
<p style="color:green;"><?php echo $success; ?></p>
<?php elseif ($error): ?>
<p style="color:red;"><?php echo $error; ?></p>
<?php endif; ?>
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
<?php include '../includes/footer.php'; ?>
