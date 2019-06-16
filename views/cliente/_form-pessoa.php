
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */
/* @var $form yii\widgets\ActiveForm */

?>


<table class="table">
      <?php 
         $form = ActiveForm::begin([                  
            'encodeErrorSummary' => false,
            'errorSummaryCssClass' => 'alert alert-info alert-dismissible',
            'fieldConfig' => ['template' => "{input}"],
         ]);

         $nome       = $form->field($model, 'nome')->textInput(['maxlength' => true])->input('text', ['placeholder' => "Nome"])->label(false);
         $cpf        = $form->field($model, 'cpf')->widget(\yii\widgets\MaskedInput::className(), [ 'mask' => '999.999.999.99',])->input('text', ['placeholder' => "CPF"])->label(false);
         $cep        = $form->field($model, 'cep')->widget(\yii\widgets\MaskedInput::className(), [ 'mask' => '99999-999',])->input('cpf', ['placeholder' => "CEP"])->label(false);
         $endereco   = $form->field($model, 'endereco')->textInput(['maxlength' => true])->input('text', ['placeholder' => "Endereço"])->label(false);
         $numero     = $form->field($model, 'numero')->textInput(['maxlength' => true])->input('number', ['placeholder' => "Número"])->label(false);
         $bairro     = $form->field($model, 'bairro')->textInput(['maxlength' => true])->input('text', ['placeholder' => "Bairro"])->label(false);
         $cidade     = $form->field($model, 'cidade')->textInput(['maxlength' => true])->input('text', ['placeholder' => "Cidade"])->label(false);
         $uf         = $form->field($model, 'uf')->textInput(['maxlength' => true])->input('text', ['placeholder' => "UF"])->label(false);
         $telefone   = $form->field($model, 'telefone')->widget(\yii\widgets\MaskedInput::className(), [ 'mask' => ['(99) 9999-9999', '(99) 9 9999-9999'],])->input('text', ['placeholder' => "Telefone"])->label(false);
         $email      = $form->field($model, 'email')->textInput(['maxlength' => true])->input('email', ['placeholder' => "Email"])->label(false);
         $nascimento = $form->field($model, 'nascimento')->widget(\yii\widgets\MaskedInput::className(), [ 'mask' => '99/99/9999',])->input('text', ['placeholder' => "Nascimento"])->label(false);
         $sexo       = $form->field($model, 'sexo')->textInput(['maxlength' => true])->dropDownList( ['M' => 'Masculino', 'F' => 'Feminino'], ['prompt'=>'Sexo...'] )->label(false);
      ?>
      <thead>
         <tr>
            <?= $form->errorSummary($model) ?>
         </tr>
      </thead>
      <tbody>
         <tr role="row">
            <td colspan="3"> <?= $nome ?> </td>
            <td colspan="2"> <?= $cpf ?> </td>
         </tr>
         <tr role="row">
            <td> <?= $cep ?> </td>
            <td colspan="3"> <?= $endereco ?> </td>
            <td> <?= $numero ?> </td>
         </tr>
         <tr role="row">
            <td colspan="3"> <?= $bairro ?> </td>
            <td> <?= $cidade ?> </td>
            <td> <?= $uf; ?> </td>
         </tr>
         <tr role="row">
            <td> <?= $telefone ?> </td>
            <td colspan="2"> <?= $email ?> </td>
            <td> <?= $nascimento ?> </td>
            <td> <?= $sexo ?> </td>
         </tr>
      </tbody>
      <tfoot>
         <tf>
            <td colspan="5">
               <div class="pull-right">
                  <button type="button" class="btn btn-sispou btn-sispou-return">
                     <a href="pessoa">voltar</a>
                  </button>
                  <?= Html::submitButton('Salvar', ['class' => 'btn btn-sispou btn-sispou-success']) ?>
               </div>
            </td>
         </tf>
      </tfoot>
   <?php ActiveForm::end(); ?>
</table>