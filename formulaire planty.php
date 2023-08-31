    <div>
        <h1>Commander</h1>
    </div>
    <div class="bloc_fomulaire">
        <div class="bloc_commande">
            <h3>votre commande</h3>
            <div class="form1 ">   



                <article class="Fruits">
                    <div class="container">
                        <img src=" http://localhost/planty/wp-content/uploads/2023/08/jeremy-bezanger-0QgbyZdhX7k-unsplash-1.png">
                        <div class="text">
                          <h2><label class="imagfraise tailleimagefruits"> FRAISE</label></h2>
                        </div>
                    </div>             
                    <div class="valid_quantite">
                        <div class="larg_nbr_fruit"  >
                            <div class="number-input">
                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                <div classe="bloc_bouton_p_m">
                                    <div>
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="bouton-select">+</button>
                                    </div>
                                    <div>
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"class="bouton-select" >-</button>                   
                                    </div>
                                </div>
                            </div>

                            <!--
                            [number fraise id:Framboise class:images_fruits "0"]  
                        -->
                        </div>
                        <div class="larg_valid_fruit" >
                            <input type="button" value="Ok" class="boutton_fruit">
                        </div>
                    </div>
                </article>
<!--    
                <article class="Fruits">
                    <div class="essai">
                        <h2><label class="imagfraise tailleimagefruits"> FRAISE</label></h2>
                    </div>                  
                    <div class=valid_quantite>
                        <div class=larg_nbr_fruit  >
                            [number fraise id:Framboise class:images_fruits "0"]  
                        </div>
                        <div class=larg_valid_fruit >
                            <input type="button" value="Ok" class="boutton_fruit">
                        </div>
                    </div>
                </article>
      -->      
                <article class="Fruits">
                    <div class="container">
                        <img src="http://localhost/planty/wp-content/uploads/2023/08/estudio-bloom-tOitjphtIXU-unsplash-1.png">
                        <div class="text">
                            <h2><label class="imagpampl tailleimagefruits"> PAMPLEMOUSSE </label></h2>
                        </div>
                    </div>
                    <div class="valid_quantite">
                        <div class="larg_nbr_fruit"  > 
                            [number pamplemousse id:Citron class:images_fruits "0"]  
                        </div>
                        <div class="larg_valid_fruit" >
                            <input type="button" value="Ok" class="boutton_fruit">
                        </div>
                    </div>
                </article>

                <article class="Fruits">
                    <div class="container">
                        <img src="http://localhost/planty/wp-content/uploads/2023/08/rodion-kutsaev-4k8xEFW4_3Q-unsplash-1.png">
                        <div class="text">
                            <h2><label class="imagframboise tailleimagefruits"> Framboise</label></h2>
                        </div>
                    </div>
                    <div class="valid_quantite">
                        <div class="larg_nbr_fruit" >
                            <div class="number-input">
                                 <input type="number" class="quantity" min="0" name="quantity" value="1" >
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" >-</button>
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus">+</button>
                              </div>
                           <!-- [number fraise id:Framboise class:images_fruits "0"]  
                        -->
                        </div>
                        <div class="larg_valid_fruit" >
                            <input type="button" value="Ok" class="boutton_fruit">
                        </div>
                    </div>
                </article>
            
                <article class="Fruits">
                    <div class="container">
                        <img src="http://localhost/planty/wp-content/uploads/2023/08/estudio-bloom-ezqnxsqUZ80-unsplash-1.png">
                        <div class="text">  
                            <h2><label class="imagcitron tailleimagefruits"> Citron </label></h2>
                        </div>
                    </div>
                    <div class="valid_quantite">
                        <div class="larg_nbr_fruit" > 
                            [number fraise id:Citron class:images_fruits "0"]  
                        </div>
                        <div class="larg_valid_fruit" >
                            <input type="button" value="Ok" class="boutton_fruit">
                        </div>
                    </div>
                    
                </article>

            </div>
        </div>
        <div class="bloc_info_livraison">
            <div class="bloc_information">
                <div>
                  <h4>Vos informations</h4>
                </div>
                <div class="form2">
                    <label> Votre nom
                        [text* your-name autocomplete:name] </label>
            
                    <label> Votre e-mail
                        [email* your-email autocomplete:email] </label>
            
                    <label> Objet
                        [text* your-subject] </label>
                </div>
            </div>
            <div class="bloc_livraison">
                <div>
                    <h4>Livraison</h4>
                </div>
                <div class="form2">
        
                <label> adresse
                [text* adresse]</label>
        
                <label> Code postale
                [number* code-postal max:99999 ]</label>
        
                <label> Ville
                [text* ville]</label>
        
                </div>
            </div>
            </div>
        <div class="bloc_bouton_envoie">
        
        [submit "Envoyer"]
        </div>
    </div>




<!--
        <body>
            <div class="container">
            <img src=" http://localhost/planty/wp-content/uploads/2023/08/jeremy-bezanger-0QgbyZdhX7k-unsplash-1.png">
            <div class="text">
                <h2><label class="imagfraise tailleimagefruits"> FRAISE</label></h2>
            </div>
            </div>
        </body>
        </html>
        <article class="Fruits">
            <div class="container">
                <img src=" http://localhost/planty/wp-content/uploads/2023/08/jeremy-bezanger-0QgbyZdhX7k-unsplash-1.png">
                <div class="text">
                <h2><label class="imagfraise tailleimagefruits"> FRAISE</label></h2>
                </div>
            </div>             
            <div class=valid_quantite>
                <div class=larg_nbr_fruit  >
                    [number fraise id:Framboise class:images_fruits "0"]  
                </div>
                <div class=larg_valid_fruit >
                    <input type="button" value="Ok" class="boutton_fruit">
                </div>
            </div>
        </article>

        <header>
            <img src="images/header.png" alt="skateboard sur un sol goudronné">
            <div class="headerTextContent">
                <h1>RIDING CITIES</h1>
            </div>
        </header>-->