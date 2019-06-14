<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClienteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['pessoa'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?php // $form->field($model, 'id') ?>

    <?php // $form->field($model, 'nome') ?>

    <?php // $form->field($model, 'sexo') ?>

    <?php // $form->field($model, 'nascimento') ?>

    <?php // $form->field($model, 'cpf') ?>

    <?php // echo $form->field($model, 'cep') ?>

    <?php // echo $form->field($model, 'endereco') ?>

    <?php // echo $form->field($model, 'bairro') ?>

    <?php // echo $form->field($model, 'numero') ?>

    <?php // echo $form->field($model, 'cidade') ?>

    <?php // echo $form->field($model, 'uf') ?>

    <?php // echo $form->field($model, 'telefone') ?>

    <?php // echo $form->field($model, 'email') ?>

    
        <div class="row">
            <div class="col-xs-5">
               <div class="form-group">
                  <?= $form->field($model, 'globalSearch')->input('text', ['placeholder' => "Pesquisar"])->label(false) ?>
               </div>
            </div>
            <div class="col-xs-3">
               <div class="form-group">
                  <select class="form-control" placeholder="Pesquisar por...">
                     <option>Geral</option>
                     <option>Nome</option>
                     <option>CPF</option>
                     <option>Cidade</option>
                     <option>Telefone</option>
                     <option>Email</option>
                  </select>
               </div>
            </div>
            <div class="col-xs-2">
               <?= Html::submitButton('Filtrar', ['class' => 'btn btn-block btn-success']) ?>
            </div>
            <div class="col-xs-2">
               <?= Html::resetButton('Limpar filtro', ['class' => 'btn btn-block btn-default']) ?>
            </div>
         </div>

    <?php ActiveForm::end(); ?>

</div>
