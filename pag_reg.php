<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style_reg.css">
  <title>Página Registro</title>
</head>

<body>
  <p id="titu">IVY COMPANY</p>

  <form method="post" action="pag_reg2.php">
    <?php include('errors.php'); ?>
    <div class="form-group cad">
      <label for="exampleInputEmail1">Nome</label>
      <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>
    <div class="form-group cad">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
      <small id="emailHelp" class="form-text text-muted">Vai ficar em off, relaxa.🤫</small>
    </div>
    <div class="form-group cad">
      <label for="exampleInputPassword1">Senha</label>
      <input type="password" name="password_1" class="form-control" id="exampleInputPassword1" required>
    </div>
    <div class="form-group cad">
      <label for="exampleInputPassword1">Confirme sua senha</label>
      <input type="password" name="password_2" class="form-control" id="exampleInputPassword1" required>
    </div>
    <button style="background-color:rgb(90, 207, 139); ;" type="submit" class="btn btn-primary marg" name="reg_user">Próximo</button>
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