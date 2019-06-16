<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>


<table class="table table-signs">
   <?php 
      $form = ActiveForm::begin([                  
         'encodeErrorSummary' => false,
         'errorSummaryCssClass' => 'alert alert-info alert-dismissible',
         'fieldConfig' => ['template' => "{input}"],
      ]);

      $nome = $form->field($model, 'nome')->textInput(['maxlength' => true])->input('text', ['placeholder' => "Nome"])->label(false);
      $cpf = $form->field($model, 'cpf')->widget(\yii\widgets\MaskedInput::className(), [ 'mask' => '999.999.999.99',])->input('text', ['placeholder' => "CPF"])->label(false);
      $cidade = $form->field($model, 'cidade')->textInput(['maxlength' => true])->input('text', ['placeholder' => "Cidade"])->label(false);
      $uf = $form->field($model, 'uf')->textInput(['maxlength' => true])->input('text', ['placeholder' => "UF"])->label(false);
      $telefone = $form->field($model, 'telefone')->widget(\yii\widgets\MaskedInput::className(), [ 'mask' => ['(99) 9999-9999', '(99) 9 9999-9999'],])->input('text', ['placeholder' => "Telefone"])->label(false);
      $email = $form->field($model, 'email')->textInput(['maxlength' => true])->input('email', ['placeholder' => "Email"])->label(false);
      
   ?>

   <thead>
      <tr>
         <?= $form->errorSummary($model) ?>
      </tr>
   </thead>

   <tbody>
      <tr role="row">
         <td colspan="3"> <?=$nome?> </td>
         <td colspan="2"> <?=$cpf?> </td>
      </tr>
      <tr role="row">
         <td> <?=$cidade?> </td>
         <td> <?=$uf?> </td>
         <td> <?=$telefone?> </td>
         <td colspan="3"> <?=$email?> </td>
      </tr>
   </tbody>

   <tfoot>
      <tf>
         <td colspan="5">
            <div class="pull-right">
               <button type="button" class="btn btn-sispou btn-sispou-return">
                  <a href="agente">voltar</a>
               </button>
               <?= Html::submitButton('Salvar', ['class' => 'btn btn-sispou btn-sispou-success']) ?>
            </div>
         </td>
      </tf>
   </tfoot>
   <?php ActiveForm::end(); ?>
</table>