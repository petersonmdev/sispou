<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pousada */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pousada-form">
    <?php $form = ActiveForm::begin(); ?>
    
       <div class="row">
           <div class="col-md-8">
                <div class="row">
                <div class="col-md-12">
                    <h4 class="title">Dados da Pousada</h4>
                </div>
                <div class="col-md-6"><?= $form->field($model, 'nome_fantasia')->textInput(['maxlength' => true]) ?></div>
                <div class="col-md-6"><?= $form->field($model, 'razao_social')->textInput(['maxlength' => true]) ?></div>
            </div>
            <div class="row">
                <div class="col-md-3"><?= $form->field($model, 'cnpj')->textInput(['maxlength' => true]) ?></div>
                <div class="col-md-3"><?= $form->field($model, 'cep')->textInput(['maxlength' => true]) ?></div>
                <div class="col-md-6"><?= $form->field($model, 'endereco')->textInput(['maxlength' => true]) ?></div>
            </div>
            <div class="row">
                <div class="col-md-4"><?= $form->field($model, 'bairro')->textInput(['maxlength' => true]) ?></div>
                <div class="col-md-2"><?= $form->field($model, 'numero')->textInput(['maxlength' => true]) ?></div>
                <div class="col-md-4"><?= $form->field($model, 'cidade')->textInput(['maxlength' => true]) ?></div>
                <div class="col-md-2"><?= $form->field($model, 'uf')->textInput(['maxlength' => true]) ?></div>
            </div>
            <div class="row">                      
                <div class="col-md-6"><?= $form->field($model, 'telefone')->textInput(['maxlength' => true]) ?></div>
                <div class="col-md-6"><?= $form->field($model, 'celular')->textInput(['maxlength' => true]) ?></div>
            </div>
            <div class="row">  
                <div class="col-md-8"><?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?></div>
                <div class="col-md-4"><?= $form->field($model, 'newPassword')->passwordInput(['maxlength' => true]) ?></div>
            </div>

               <div class="row">                   
                    <div class="col-md-12">
                        <h4 class="title">Dados do Responsável</h4>
                    </div>
               </div>
               <div class="row">
                   <div class="col-md-6"><?= $form->field($model, 'rp_nome')->textInput(['maxlength' => true]) ?></div>
                   <div class="col-md-6"><?= $form->field($model, 'rp_cpf')->widget(\yii\widgets\MaskedInput::className(), [
                        'mask' => '999.999.999-99',
                    ]) ?></div>
               </div>
               <div class="row">
                   <div class="col-md-6"><?= $form->field($model, 'rp_telefone')->widget(\yii\widgets\MaskedInput::className(), [
                        'mask' => '(99) 9999-9999',
                    ]) ?></div>
                   <div class="col-md-6"><?= $form->field($model, 'rp_celular')->widget(\yii\widgets\MaskedInput::className(), [
                        'mask' => '(99) 9 9999-9999',
                    ]) ?></div>
                   <div class="col-md-12"><?= $form->field($model, 'rp_email')->textInput(['maxlength' => true]) ?></div>
               </div>
           </div>
       </div>


    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


