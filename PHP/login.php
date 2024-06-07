<?php $title = "Se connecter";?>


<!DOCTYPE html>
<html lang="en">
<?php include('./includes/head_.php'); ?>

<body>
<?php include('./includes/header_.php');?>
    <a href="./index.php">Accueil</a>
    <form action="register.php" metho="post">
        <h1>Se connecter</h1>
        <br />  
        <input type="text" placeholder="Nom d'utilisateur" required>
        <br />
        <input type="text" placeholder="Mot de passe" required>
        <br />


        <input type="submit" value="Se connecter">
    </form>

    <?php include('./includes/footer_.php');?>

    
</body>
</html>