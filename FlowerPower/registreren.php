<?php

include_once 'sidebar/sidebar.php'

?>

</div>
<div class="info">
               <!-- form -->
               <center>
                  <form action="registreren.php" method="POST" class="form-signup">
                     <img class="mb-4" src="https://pics.clipartpng.com/Pink_Flower_PNG_Clipart-173.png" alt="bloem" width="72" height="72">
                     <h1 class="h3 mb-3 font-weight-normal">Account aanmaken</h1>
                     <input type="text" name="Voorletters" id="inputVoorletters" class="form-control" placeholder="Voornaam" required>
                     <input type="text" name="Tussenvoegsels" id="inputTussenvoegsels" class="form-control" placeholder="Tussenvoegsels">
                     <input type="text" name="Achternaam" id="inputAchternaam" class="form-control" placeholder="Achternaam" required>
                     <input type="text" name="Adres" id="inputAdres" class="form-control" placeholder="Adres" required>
                     <input type="text" name="Postcode" id="inputPostcode" class="form-control" placeholder="Postcode" required>
                     <input type="text" name="Woonplaats" id="inputWoonplaats" class="form-control" placeholder="Woonplaats" required>
                     <input type="text" name="Geboortedatum" id="inputGeboortedatum" class="form-control" placeholder="Geboortedatum" required>
                     <input type="text" name="Gebruikersnaam" id="inputGebruikersnaam" class="form-control" placeholder="Gebruikersnaam" required>
                     <input type="password" name="Wachtwoord" id="inputWachtwoord" class="form-control" placeholder="Wachtwoord" required><br>   
                     <button class="btn btn-lg btn-success btn-block" type="submit" name="submit">Aanmaken</button>
                     <p class="mt-5 mb-3 text-muted">© 2021-2021</p>
                  </form>
               </center>
            </div>
         </div>
      </div>
   </body>
</html>        