<?php
require_once '../models/alertContent.php';
require_once '../views/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <title>connection</title>
</head>

<body>
  <h2 class="ms-4 mt-2">CONNECTION</h2>
  <?php
  alertContent();
  ?>
  <div class="card mx-3 px-3 my-2">
    <form action="../controlers/controlconnection.php" method="POST" class="px-4 mt-2">
      <div class="mb-3 ">
        <label for="email" class="form-label">email</label>
        <input type="email" class="form-control" id="email" value="votre email" name="email">
      </div>
      <div class="mb-3">
        <label for="pasword" class="form-label">Password</label>
        <input type="password" class="form-control" id="pasword" name="password">
      </div>
      <button type="submit" class="btn btn-primary">me connecter</button>
    </form>
  </div>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>