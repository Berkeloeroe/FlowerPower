<?php

function emptyInputSignup($voorletters, $achternaam ,$adres, $postcode,  $woonplaats,  $geboortedatum,  $gebruikersnaam, $wachtwoord) {
  $result;
  if (empty($voorletters) || empty($achternaam) || empty($adres) || empty($postcode) || empty($woonplaats) || empty($geboortedatum) || empty($gebruikersnaam) || empty($wachtwoord))  {
        $result = true;
  } 
  else {
        $result = false;
  }
  return $result;
}

function invalidUid($voorletters) {
  $result;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $voorletters)) {
        $result = true;
  } 
  else {
        $result = false;
  }
  return $result;
}

if uidExists($conn, $voorletters) {
      $sql = "SELECT * FROM klant WHERE Voorletters = ?;";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../registreren.php?error=stmtfailed");
            exit();
      }

      mysqli_stmt_bind_param($stmt, "s", $voorletters);
      mysqli_stmt_execute($stmt);

      $resultData = mysqli_stmt_get_result($stmt);
      
      if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
      } 
      else {
            $result = false;
            return $result;
      }

      mysqli_stmt_close($stmt);
}

    function createUser($voorletters, $tussenvoegsels, $achternaam ,$adres, $postcode,  $woonplaats,  $geboortedatum,  $gebruikersnaam, $wachtwoord); {
      $sql = "INSERT INTO klant (Voorletters, Tussenvoegsels, Achternaam ,Adres, Postcode, Woonplaats, Geboortedatum, Gebruikersnaam, Wachtwoord) 
      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../registreren.php?error=stmtfailed");
      }

      $hashedPwd = password_hash($wachtwoord, PASSWORD_DEFAULT);

      mysqli_stmt_bind_param($stmt, "sssssssss", $voorletters, $tussenvoegsels, $achternaam ,$adres, $postcode,  $woonplaats,  $geboortedatum,  $gebruikersnaam, $hashedPwd);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      header("location: ../registreren.php?error=non");
      exit();
}