<?php 
$title = "profil"; // TITRE DE LA PAGE

session_start();


if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    // Maintenant vous pouvez utiliser $user_id comme vous le souhaitez sur cette page
        if ($user_id == 1) {
            $adminButton = "<a class='adminButton' href='./admin.php'>Admin</a>";
        } 

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    
    if (isset($_POST['logout'])) {
        unset($_SESSION['user_id']);
        header("location: /fansite/PHP/account.php");
        exit();

}
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include('./includes/head_.php'); ?>

<body>

<?php include('./includes/header_.php'); ?>

<h1>Profil</h1>
<div class=adminButtonContainer>
<?php if (!empty($adminButton)) { echo $adminButton; } ?> 
</div>
<form action="account.php" method="post" class="login-form"> <!-- Ajoutez la classe login-form pour appliquer les styles -->
        <br />
        <input name="logout" type="submit" value="Se déconnecter">
    </form>

<?php include('./includes/footer_.php'); ?>

</body>
</html>

