<?php

include_once '../sidebars/medewerker.php'

?>

<a class="btn btn-success float-right" href="#" role="button">Uitloggen</a>
            </div>
            <div class="info">
               <form action="edit_artikelen.php" method="post">
                               <!-- doorgaan met setten van value met ternary operator -->
                  <input type="text" name="artikel" placeholder="artikel">
                  <input type="text" name="prijs" placeholder="prijs">
                  <input type="submit" value="wijzig">
               </form>
            </div>
         </div>
      </div>
   </body>
</html>