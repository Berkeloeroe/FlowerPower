<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="icon" href="https://www.eatlogos.com/alphabet_logos/png/vector_alphabet_o_green_logo.png">
    <title>FlowerPower</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <h3>FlowerPower</h3>
  <img id="logo" src="https://www.eatlogos.com/alphabet_logos/png/vector_alphabet_o_green_logo.png" alt="picca">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="loginEmployee.php">Inloggen medewerker</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="loginCustomer.php">Inloggen klant</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registreren.php">Registreren <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Zoeken" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Zoeken</button>
    </form>
  </div>
</nav>

<div class="Form">
      <form class="" action="index.html" method="post">
       <center>

       <h2>Inloggen medewerker</h2><br>

      <div class="col-3">
      <input type="email" name="email" class="form-control" placeholder="email" required><br>

      <input type="password" name="password" class="form-control" placeholder="wachtwoord" required><br>

      <a class="nav-link" href="registreren.php">Nog geen account?</a><br>

      <button type="button" class="btn btn-success">Inloggen</button>
      </div>

      <center>
    </form>
  </div>

</body>
</html>