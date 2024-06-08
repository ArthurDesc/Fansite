<?php 
$title = "profil"; // TITRE DE LA PAGE

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['logout'])) {
        session_destroy();
        header(location: '/fansite/PHP/account.php');
        exit();
}
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include('./includes/head_.php'); ?>

<body>

<?php include('./includes/header_.php'); ?>

    <form action="account.php" method="post" class="login-form"> <!-- Ajoutez la classe login-form pour appliquer les styles -->
        <h1>Profil</h1>
        <input name="logout" type="submit" value="Se déconnecter">
    </form>

<?php include('./includes/footer_.php'); ?>

</body>
</html>

