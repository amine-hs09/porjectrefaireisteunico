<?php
session_start();
if (isset($_POST['username'], $_POST['password'])) {
    if ($_POST['username'] === 'admin' && $_POST['password'] === 'password') {
        $_SESSION['logged_in'] = true;
        header('Location: index.php');
        exit;
    } else {
        $error = 'Identifiants incorrects';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion Admin</title>
</head>
<body>
<h2>Connexion Admin</h2>
<?php if (!empty($error)) echo '<p style="color:red">'.$error.'</p>'; ?>
<form action="" method="post">
    <input type="text" name="username" placeholder="Nom d'utilisateur" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <button type="submit">Se connecter</button>
</form>
</body>
</html>
