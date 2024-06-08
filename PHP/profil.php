<?php 
$title = "profil"; // TITRE DE LA PAGE

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['logout'])) {
        unset($_SESSION['user_id']);
        header("location: /fansite/PHP/account.php");
        exit();
}

    if ($_SESSION['user_id'] == 1) {
        $adminButton = "<a href='/fansite/PHP/admin.php'>" . "Admin" . "</a>";
} else { 
    $adminButton = "";
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
        <?php if (!empty($adminButton)) { echo $adminButton; } ?> 
    </form>

<?php include('./includes/footer_.php'); ?>

</body>
</html>

