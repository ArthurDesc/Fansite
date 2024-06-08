<?php $title = "Contact";?>

<!DOCTYPE html>
<html lang="en">

<?php include('./includes/head_.php'); ?>

<body>
    <?php include('./includes/header_.php');?>

          
        <main>

            <div class="container-contact">
               
                <div class="formulaire">
                    <p><h2>Me contacter</h2></p>

                    <!-- ZONE POUR CHOISIR LE SUJET -->
                    <div class="sujet">
                        <label  for="sujet">Sujets :</label>
                        <select name="" id="sujet">
                            <option value="">Critiques</option>
                            <option value="">Idées à proposer</option>
                            <option value="">Collaboration</option>
                            <option value="">Autres</option>
                        </select>
                    </div>
                    <!-- ZONE POUR CHOISIR LE SUJET -->
                    
                   <br>


                    <div class="formulaire-bottom">

                        <!-- ZONE AVEC TOUTE LES INFOS A RENSEIGNER -->
                        
                            <div class="first-line-contact">
                                <label for="Préfixe">Préfixe :</label>
                                <select id="Préfixe" name="">
                                    <option value="Mr.">Mr.</option>
                                    <option value="Mme.">Mme.</option>
                                </select>
                            
                                <input type="text" placeholder="Nom*">
                                <input type="text" placeholder="Prénom*">
                            </div>

                                
                            <br>
                         <div class="second-line-contact">
                             <input type="text" placeholder="Numéro de téléphone*">
                             <input type="text" placeholder="Adresse mail*">
                         </div>
                            
                            <br>
                            
                                <textarea class="message" placeholder="Message*"></textarea>
                        
                    </div>
                    <!-- ZONE AVEC TOUTE LES INFOS A RENSEIGNER -->
                    
                </div>
                
                
              
            </div>
        </main>
        
        
        <?php include('./includes/footer_.php');?>
    
</body>
</html>