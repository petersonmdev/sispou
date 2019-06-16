<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="cliente-search">

    <?php
      $form = ActiveForm::begin(
        [
          'action' => [Yii::$app->controller->action->id],
          'method' => 'get',
          'options' => [
              'data-pjax' => 1
          ],
      ]);
    ?>

    
        <div class="row">
            <div class="col-xs-5">
               <div class="form-group">
                  <?= $form->field($model, 'globalSearch')->input('text', ['placeholder' => "Pesquisar"])->label(false) ?>
                  <i class="fa fa-search icon-search-filter"></i>
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
               <?= Html::submitButton('Filtrar', ['class' => 'btn btn-sispou btn-sispou-success']) ?>
            </div>
            <div class="col-xs-2">
               <?= Html::resetButton('Limpar filtro', ['class' => 'btn btn-sispou btn-sispou-return']) ?>
            </div>
         </div>

    <?php ActiveForm::end(); ?>

</div>
