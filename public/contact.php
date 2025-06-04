<?php include '../includes/header.php'; ?>
<h2>Contact</h2>
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
