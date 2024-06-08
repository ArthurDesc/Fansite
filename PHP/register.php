<?php 
$title = "S'inscrire"; // TITRE DE LA PAGE

session_start();

// CONNECTING TO DB
// CHECKING IF THE METHOD IS POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $mail = $_POST['mail'];

    // Expression régulière pour valider l'adresse email
    $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

    if (!preg_match($pattern, $mail)) {
        $error_message = "<p class='.text-danger'>Adresse mail non valide</p>";
    } elseif ($confirm_password !== $password) {
        $error_message = "Les mots de passe ne correspondent pas";
    } else {
        $password = password_hash($password, PASSWORD_BCRYPT); // SECURISE LE MDP EN BCRYPT
        $mysqli = mysqli_connect('localhost', 'root', '', 'rap_verse');

        if (!$mysqli) {
            die("Could not connect: " . mysqli_connect_error());
        }

        // Préparer la requête SQL
        $sql = "INSERT INTO users (login, mail, password) VALUES ('$login', '$mail', '$password')";

        // Exécuter la requête SQL
        $result = mysqli_query($mysqli, $sql);

        if ($result) {
            header("Location: ./login.php");
            exit(); // Assurez-vous de quitter après la redirection
        } else {
            $error_message = "Erreur lors de l'inscription:" . mysqli_error($mysqli);
        }

        // Fermer la connexion
        mysqli_close($mysqli);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include('./includes/head_.php'); ?>
<body>
<?php include('./includes/header_.php'); ?>
    <a href="./index.php">Accueil</a>
    <form action="register.php" method="post" class="login-form"> <!-- Ajoutez la classe login-form pour appliquer les styles -->
        <h1>S'inscrire</h1>
        <br />  
        <input type="text" name="login" placeholder="Pseudo" required>
        <br />
        <input type="text" name="mail" placeholder="Adresse email" required>
        <br />
        <input type="password" name="password" placeholder="Mot de passe" required>
        <br />
        <input type="password" name="confirm_password" placeholder="Confirmez votre mot de passe" required>
        <br />
        <input type="submit" value="S'inscrire">
        <?php 
        if (!empty($error_message)) {
            echo "<p class='error-message'>" . $error_message . "</p>"; // Utilisez la classe error-message pour appliquer les styles d'erreur
        }
        ?>
    </form>
<?php include('./includes/footer_.php'); ?>
</body>
</html>

