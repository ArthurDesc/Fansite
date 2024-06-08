<?php 
session_start();
?>

<header>
        <nav>
          <a href="./index.php"><img class="logo" src="../IMAGE/EDIT/rap verse 6.png" alt=""></a> 
            
            
            <a class="txt-header" href="/fansite/PHP/index.php"><p>Accueil</p></a>
            <a class="txt-header" href="/fansite/PHP/news.php"><p>News</p></a>
            <a class="txt-header" href="/fansite/PHP/rap fr.php"><p>Rap FR</p></a>
            <!-- <a class="txt-header" href="./rap us.php"><p>Rap US</p></a> -->
            <a class="txt-header" href="/fansite/PHP/contact.php"><p>Contact</p></a>



            <a href="/fansite/php/account.php">

            <section class="character">

                
                <?php echo "<p>" . $_SESSION['user_login'] . "</p>"  ?>
                

                <div>

                    <svg height="3vw" width="3vw" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
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

            </section>



        </nav>
</header>