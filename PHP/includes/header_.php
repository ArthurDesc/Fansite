<?php 


if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['logout'])) {
        session_destroy();
        header("location: /fansite/PHP/account.php");
        exit();
}
}

if (isset($_SESSION['user_id'])) {
    $linkAccount = "<a class='character' href='/fansite/PHP/profil.php'>";
} else {
    $linkAccount = "<a class='character' href='/fansite/PHP/account.php'>";
}
 

// Condition pour texte en haut a droite du header
if (isset($_SESSION['user_login'])) {
    $user_login = $_SESSION['user_login'];
    $headerMessage = "<p>". $user_login . "</p>";
} else {
    $headerMessage = "<p>Compte</p>";
}         

?>

<header>
        <nav>


          <a href="./index.php"><img class="logo" src="../IMAGE/EDIT/rap verse 6.png" alt=""></a> 
            
            
            <a class="txt-header" href="/fansite/PHP/index.php"><p>Accueil</p></a>
            <ul class="headerList">
                <li class="txt-hader">
                    <a class="txt-hader" href="/fansite/PHP/rap fr.php"><p>Verse</p></a>
                    <ul>

                        <li class="firstList">
                            <a class="txt-header" href="/fansite/PHP/rap fr.php"><p>Rap US</p></a>
                        </li>

                        <li class="firstList">
                            <a class="txt-header" href="/fansite/PHP/rap us.php"><p>Rap FR</p></a>
                        </li>
                    </ul>
                </li>
            </ul>
            <a class="txt-header" href="/fansite/PHP/news.php"><p>News</p></a>
            <!-- <a class="txt-header" href="./rap us.php"><p>Rap US</p></a> -->
            <a class="txt-header" href="/fansite/PHP/contact.php"><p>Contact</p></a>



            
    <?php echo $linkAccount;?> 

        <!-- PSEUDO ACC -->
        <div class="headerMessageContainer">
            <?php echo "$headerMessage";?>
        </div>
        <!-- PSEUDO ACC -->

        <div>
            <svg class="characterLogo" height="3vw" width="3vw" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                viewBox="0 0 60.671 60.671" xml:space="preserve">
                <g>
                    <g>
                        <ellipse style="fill:#FEA2E7;" cx="30.336" cy="12.097" rx="11.997" ry="12.097"/>
                        <path style="fill:#FEA2E7;" d="M35.64,30.079H25.031c-7.021,0-12.714,5.739-12.714,12.821v17.771h36.037V42.9
                        C48.354,35.818,42.661,30.079,35.64,30.079z"/>
                    </g>
                </g>
            </svg>
        </div>
    </a>






        </nav>
</header>