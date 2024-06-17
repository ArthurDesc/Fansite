<?php
$timestamp = time(); // obtenir le timestamp actuel
$style = "<link rel='stylesheet' href='../CSS/FanSite.css?v=$timestamp'>"; // ajouter le timestamp comme paramètre de version



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['dark'])) {
        $style="<link rel='stylesheet' href='/Fansite/CSS/FanSite2.css'>";
        header("location:/Fansite/PHP/profil.php");
     } elseif (isset($_POST['light'])) {
        $style="<link rel='stylesheet' href='/Fansite/CSS/FanSite.css'>";
        header("location:/Fansite/PHP/profil.php");
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$title";?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <?php echo $style;?>
</head>


