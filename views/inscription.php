<?php
require_once '../models/alertContent.php';
require_once '../views/header.php';
require_once '../models/Requete.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <title>inscription</title>
</head>

<body>
  <h2 class="ms-4 mt-2">INSCRIPTION DATING - SPORT</h2>
  <?php alertContent(); ?>
  <form action="../controlers/controller.php" method="POST" class="px-4 mt-2">
    <!-- inscription -->
    <div class="card px-3 my-2">
      <div class="mb-3 ">
        <label for="nom" class="form-label">nom</label>
        <input type="text" class="form-control" id="nom" name="nom">
      </div>
      <div class="mb-3 ">
        <label for="prenom" class="form-label">prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom">
      </div>
      <div class="mb-3 ">
        <select class="form-select" name="departement">
          <option selected>choisissez votre département</option>
          <?php
          $showAllDpt = new Requetes;
          $showAllDpt->getAllDepartement();
          ?>
        </select>
      </div>
      <div class="mb-3 ">
        <label for="email" class="form-label">email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <div class="mb-3">
        <label for="pasword" class="form-label">mot de passe</label>
        <input type="password" class="form-control" id="pasword" name="password">
      </div>
      <div class="mb-3">
        <label for="pasword-confirm" class="form-label">confirmez votre mot de passe</label>
        <input type="password" class="form-control" id="pasword-confirm" name="pasword-confirm">
      </div>
    </div>
    <!-- choix du sport -->
    <div class="card px-3 py-2">
      <select class="form-select my-2" aria-label="Default select example" name="sport">
        <option selected>choisissez votre sport</option>
        <?php
        $showSportInscription = new Requetes;
        $showSportInscription->getAllSport();
        ?>
      </select>
      <select class="form-select" aria-label="Default select example" name="niveau">
        <option selected>choisissez votre niveau</option>
        <?php
        $showSportlevel = new Requetes;
        $showSportlevel->getAllLevel();
        ?>
      </select>
    </div>
    <button type="submit" class="btn btn-primary mt-2">m'inscrire
    </button>
  </form>

  <form action="../controlers/controlAddSport.php" method="POST" class="px-4 mt-2">
    <div class="card px-3 py-2">
      <div class="mb-3 ">
        <button type="submit" class="btn btn-secondary mt-2 mb-2">ajouter un sport
        </button>
        <input type="text" class="form-control" name="addSport">
      </div>
      <div class="mb-3 ">
        <button type="submit" class="btn btn-secondary mt-2 mb-2">ajouter un niveau
        </button>
        <input type="text" class="form-control" name="addLevel">
      </div>
    </div>
  </form>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>