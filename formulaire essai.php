<div>
        <h1>COMMANDER</h1>
    </div>
    <div class="bloc_formulaire">
        <fieldset class="bloc_commande">
    
            
            <h2>votre commande</h2>
            <div class="form1 ">   



                <article class="Fruits">
                    <div class="container fraise">
                        <img src=" http://localhost/planty/wp-content/uploads/2023/08/jeremy-bezanger-0QgbyZdhX7k-unsplash-1.png">
                      
                          <h3> FRAISE</h3>
                       
                    </div>             
                    <div class="valid_quantite">
                        <div class="larg_nbr_fruit"  >
                            <div class="number-input">
                                
                               
                                    
                                    <a href='#'onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="bouton-select-plus">+</a>                                
                                   <input class="quantity" min="0" name="quantity_fraise" value="0" type="number">
                                    <a href='#'onclick="this.parentNode.querySelector('input[type=number]').stepDown()"class="bouton-select-moin" >-</a>                                                       
                              
                            </div>
                        </div>
                        <div class="larg_valid_fruit" >
                            <input type="button" value="Ok" class="boutton_fruit">
                        </div>
                    </div>
                </article>
                <article class="Fruits">
                    <div class="container pamplemousse">
                        <img src="http://localhost/planty/wp-content/uploads/2023/08/estudio-bloom-tOitjphtIXU-unsplash-1.png">
                    
                            <h3> PAMPLEMOUSSE</h3>
                       
                    </div>
                    <div class="valid_quantite">
                        <div class="larg_nbr_fruit" >
                            <div class="number-input">
                                 
                                    <a href='#'onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="bouton-select-plus">+</a>                                
                                   <input class="quantity" min="0" name="quantity_pamplemousse" value="0" type="number">
                                    <a href='#'onclick="this.parentNode.querySelector('input[type=number]').stepDown()"class="bouton-select-moin" >-</a>   
                                
                            </div>
                        </div>
                        <div class="larg_valid_fruit" >
                            <input type="button" value="Ok" class="boutton_fruit">
                        </div>
                    </div>
                </article>
                <article class="Fruits">
                    <div class="container framboise">
                        <img src="http://localhost/planty/wp-content/uploads/2023/08/rodion-kutsaev-4k8xEFW4_3Q-unsplash-1.png">                        
                        <h3> FRAMBOISE</h3>                       
                    </div>
                    <div class="valid_quantite">
                        <div class="larg_nbr_fruit" >
                            <div class="number-input">

                                
                                    <a href='#'onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="bouton-select-plus">+</a>                                
                                   <input class="quantity" min="0" name="quantity_framboise" value="0" type="number">
                                    <a href='#'onclick="this.parentNode.querySelector('input[type=number]').stepDown()"class="bouton-select-moin" >-</a>   
                                
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
                    <div class="container citron">
                        <img src="http://localhost/planty/wp-content/uploads/2023/08/estudio-bloom-ezqnxsqUZ80-unsplash-1.png">
                        <h3> CITRON</h3>                       
                    </div>
                    <div class="valid_quantite">
                        <div class="larg_nbr_fruit"  >
                            <div class="number-input">
                                
                              
                                    
                                    <a href='#'onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="bouton-select-plus">+</a>                                
                                   <input class="quantity" min="0" name="quantity_citron" value="0" type="number">
                                    <a href='#'onclick="this.parentNode.querySelector('input[type=number]').stepDown()"class="bouton-select-moin" >-</a>                                                       
                              
                            </div>
                        </div>
                        <div class="larg_valid_fruit" >
                            <input type="button" value="Ok" class="boutton_fruit">
                        </div>
                    </div>
                    
                </article>

            </div>
        </fieldset>
        <div class="bloc_info_livraison">
            <fieldset class="bloc_information">

                <legend >
                <h4>Vos informations</h4></legend>


                <div class="form2">
                    <label>Nom
                        [text* your-name autocomplete:name] </label>

            
                    <label> Prénom
                        [text* your-first-name] </label>
                                
                    <label> E-mail
                    [email* your-email autocomplete:email] </label>
                </div>
            </fieldset>

            <fieldset class="bloc_livraison">

                <legend >
                <h4>Livraison</h4></legend>

                
                <div class="form2">
        
                <label> Adresse de livraison
                [text* adresse]</label>
        
                <label> Code postal
                [number* code-postal max:99999 maxlenght=5 placeholder="26600"]</label>
        
                <label> Ville
                [text* ville]</label>
        
                </div>
            </fieldset>
        </div>
        <div class="bloc_bouton_envoie">
        
        [submit "Envoyer"]
        </div>
    </div>