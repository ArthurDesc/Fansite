<?php
$title = "Inscription"; // TITRE DE LA PAGE

include('./includes/_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $error_message = '';

    if ($password !== $confirmPassword) {
        $error_message = "Les mots de passe ne correspondent pas";
    } else {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        include('./includes/_connect.php');

        if (!$mysqli) {
            die("Could not connect: " . mysqli_connect_error());
        }

        // Utilisation d'une requête préparée pour éviter les injections SQL
        $stmt = $mysqli->prepare("INSERT INTO users (login, password) VALUES (?, ?)");
        if ($stmt) {
            $stmt->bind_param("ss", $login, $hashed_password);
            $result = $stmt->execute();

            if ($result) {
                header("Location: ./connexion.php");
                exit();
            } else {
                $error_message = "Erreur lors de l'inscription: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $error_message = "Erreur lors de la préparation de la requête: " . $mysqli->error;
        }

        mysqli_close($mysqli);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<?php include('./includes/head_.php'); ?>

<body>
<?php include('./includes/header_.php');?>
    <form action="inscription.php" method="post">
        <input type="text" class= name="login" placeholder="Login" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <input type="password" name="confirmPassword" placeholder="Confirmer le mot de passe" required>
        <button type="submit">S'inscrire</button>
    </form>

    <!-- AFFICHE MESSAGE D'ERREUR SI BESOIN -->
    <?php if (!empty($error_message)) : ?>
        <p><?php echo $error_message; ?></p>
    <?php endif; ?>
    <?php include('./includes/footer_.php');?>

</body>
</html>
