<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FlowerPower</title>
	<link rel="stylesheet" href="styles.css">
  <link rel="icon" href="https://pics.clipartpng.com/Pink_Flower_PNG_Clipart-173.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body class="customer">

<!-- sidebar -->
<div class="wrapper">
    <div class="sidebar">
        <img id="logo" src="https://pics.clipartpng.com/Pink_Flower_PNG_Clipart-173.png" alt="logo">
        <ul>                          
            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="loginEmployee.php"><i class="fas fa-user"></i>Inloggen medewerkers</a></li>
            <li><a href="contact.php"><i class="fas fa-phone-square-alt"></i></i>Contact</a></li>
            <li><a href="loginCustomer.php"><i class="fas fa-user"></i>Inloggen klant</a></li>
            <li><a href="registreren.php"><i class="fas fa-address-card"></i>Registreren</a></li>
        </ul> 
    </div>
    <div class="main_content">
        <div class="header">FlowerPower
          <a class="btn btn-success float-right" href="registreren.php" role="button">Registreren</a>
        </div>  
        <div class="info">

      <!-- form -->
      <center>
        <form action="includes/login.inc.php" method="POST" class="form-signup">
          <img class="mb-4" src="https://pics.clipartpng.com/Pink_Flower_PNG_Clipart-173.png" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">Inloggen als klant</h1>
          <input type="text" name="Voorletters" id="inputUsername" class="form-control" placeholder="Gebruikersnaam" required="">
          <input type="password" name="Wachtwoord" id="inputPassword" class="form-control" placeholder="Wachtwoord" required=""><br>
          <button class="btn btn-lg btn-success btn-block" type="submit">Inloggen</button>
          <p class="mt-5 mb-3 text-muted">© 2021-2021</p>
        </form>
      </center

      </div>
    </div>
</div>

</body>
</html>

