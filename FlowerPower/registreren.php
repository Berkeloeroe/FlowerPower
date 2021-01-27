<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="icon" href="https://pics.clipartpng.com/Pink_Flower_PNG_Clipart-173.png">
    <title>FlowerPower</title>
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<h3>FlowerPower</h3>&nbsp
  <img id="logo" src="https://pics.clipartpng.com/Pink_Flower_PNG_Clipart-173.png" alt="picca">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<!-- menu items -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a> </li>
      <li class="nav-item"><a class="nav-link" href="artikelen.php">Artikelen</a></li>
      <li class="nav-item"><a class="nav-link" href="loginEmployee.php">Inloggen medewerker</a> </li>
      <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a>  </li>
      <li class="nav-item"><a class="nav-link" href="loginCustomer.php">Inloggen klant</a> </li>
      <li class="nav-item active"><a class="nav-link" href="registreren.php">Registreren<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<!-- form -->
<body class="text-center">
    <form class="form-signup">
      <img class="mb-4" src="https://pics.clipartpng.com/Pink_Flower_PNG_Clipart-173.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Account aanmaken</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Wachtwoord" required="">
      <br>
      <button class="btn btn-lg btn-success btn-block" type="submit">Aanmaken</button>
      <p class="mt-5 mb-3 text-muted">© 2021-2021</p>
    </form>

</body>
</html>