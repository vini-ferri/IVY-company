<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style_login.css">
  <title>Página Login</title>
</head>

<body>
  <p id="titu">IVY COMPANY</p>

  <form method="post" action="home.html">
    <?php include('errors.php'); ?>
    <div class="form-group cad">
      <label for="exampleInputEmail1">Email</label>
      <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
      <small id="emailHelp" class="form-text text-muted">Vai ficar em off, relaxa.🤫</small>
    </div>
    <div class="form-group cad">
      <label for="exampleInputPassword1">Senha</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
    </div>
    <div class="form-group form-check marg">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label rem" for="exampleCheck1">Remember?😏</label>
    </div>
    <button style="background-color: #BA27EE; ;" type="submit" class="btn btn-primary marg" name="login_user">Submit</button>
  </form>

  <div class="retang">
    <div class="tarta">
      <img src="https://i.imgur.com/jgiHCpb.png" width="500px" height="500px">
    </div>
  </div>




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>


</html>