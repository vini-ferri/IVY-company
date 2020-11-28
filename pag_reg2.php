<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style_reg.css">

  <title>Página Registro</title>
</head>

<body>
  <p id="titu">IVY COMPANY</p>

  <form method="post" action="home.html">
    <div class="form-group cad">
      <label for="cep">CEP</label>
      <input type="text" id="cep" name="cep" class="form-control" required>
    </div>
    <div class="form-group cad">
      <label for="logradouro">Logradouro</label>
      <input type="text" id="logradouro" name="logradouro" class="form-control" required>
    </div>
    <div class="form-group cad">
      <label for="bairro">Bairro</label>
      <input type="text" id="bairro" name="bairro" class="form-control" required>
    </div>

    <div class="form-group cad">
      <label for="uf">Estado</label>
      <input type="text" id="uf" name="uf" class="form-control" " required>
    </div>
    <div class=" form-group cad">
      <label for="numero">Número</label>
      <input type="number" id="numero" name="numero" class="form-control" required>
    </div>
    <div class="form-group cad">
      <label for="complemento">Complemento</label>
      <input type="text" id="complemento" name="complemento" class="form-control" required>
    </div>
    <button style="background-color:rgb(90, 207, 139); ;" type="submit" class="btn btn-primary marg" name="reg_user">Submit</button>
  </form>


  <div class="retang">
    <div class="tarta">
      <img src="https://i.imgur.com/jgiHCpb.png" width="500px" height="500px">
    </div>
  </div>

  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $("#cep").mask("00000-000");
    })
    $("#cep").focusout(function() {
      //Início do Comando AJAX
      $.ajax({
        //O campo URL diz o caminho de onde virá os dados
        //É importante concatenar o valor digitado no CEP
        url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/unicode/',
        //Aqui você deve preencher o tipo de dados que será lido,
        //no caso, estamos lendo JSON.
        dataType: 'json',
        //SUCESS é referente a função que será executada caso
        //ele consiga ler a fonte de dados com sucesso.
        //O parâmetro dentro da função se refere ao nome da variável
        //que você vai dar para ler esse objeto.
        success: function(resposta) {
          //Agora basta definir os valores que você deseja preencher
          //automaticamente nos campos acima.
          $("#logradouro").val(resposta.logradouro);
          $("#complemento").val(resposta.complemento);
          $("#bairro").val(resposta.bairro);
          $("#cidade").val(resposta.localidade);
          $("#uf").val(resposta.uf);
          //Vamos incluir para que o Número seja focado automaticamente
          //melhorando a experiência do usuário
          $("#numero").focus();
        }
      });
    });
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>


</html>