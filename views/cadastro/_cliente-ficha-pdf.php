<?php

use yii\helpers\Html;

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
  
  <div class="jumbotron">
    <h2 class="display-4">Ficha de Cadastro</h2>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  </div>

  <section class="content">
  <div class="box">
    <div class="box-body">      

      <table class="table table-bordered table-dark">
        <tbody>
          <tr>
            <th scope="row">Nome</th>
            <td><?=$model->nome?></td>
          </tr>
          <tr>
            <th scope="row">CPF</th>
            <td><?=$model->cpf?></td>
          </tr>
          <tr>
            <th scope="row">CEP</th>
            <td><?=$model->cep?></td>
          </tr>
          <tr>
            <th scope="row">Endereço</th>
            <td><?=$model->endereco?></td>
          </tr>
          <tr>
            <th scope="row">Número</th>
            <td><?=$model->numero?></td>
          </tr>
          <tr>
            <th scope="row">Bairro</th>
            <td><?=$model->bairro?></td>
          </tr>
          <tr>
            <th scope="row">Cidade</th>
            <td><?=$model->cidade?></td>
          </tr>
          <tr>
            <th scope="row">UF</th>
            <td><?=$model->uf?></td>
          </tr>
          <tr>
            <th scope="row">Telefone</th>
            <td><?=$model->telefone?></td>
          </tr>
          <tr>
            <th scope="row">Email</th>
            <td><?=$model->email?></td>
          </tr>
          <tr>
            <th scope="row">Dt Nasc</th>
            <td><?=$model->nascimento?></td>
          </tr>
          <tr>
            <th scope="row">Sexo</th>
            <td><?=$model->sexo?></td>
          </tr>
        </tbody>
      </table>

    </div>
    <!-- /.box-body -->
  </div>
</section>


  <!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
</body>
</html>