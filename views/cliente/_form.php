<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <div class="row">
        <div class="col-md-8"><?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?></div>
        <div class="col-md-4"><?= $form->field($model, 'cpf')->widget(\yii\widgets\MaskedInput::className(), ['mask' => '999.999.999.99']) ?></div>
    </div>
    <div class="row">
        <div class="col-md-2"><?= $form->field($model, 'cep')->widget(\yii\widgets\MaskedInput::className(), ['mask' => '99999-999']) ?></div>
        <div class="col-md-4"><?= $form->field($model, 'endereco')->textInput(['maxlength' => true]) ?></div>
        <div class="col-md-2"><?= $form->field($model, 'numero')->textInput(['maxlength' => true]) ?></div>
        <div class="col-md-4"><?= $form->field($model, 'bairro')->textInput(['maxlength' => true]) ?></div>
    </div>
    <div class="row">
        <div class="col-md-4"><?= $form->field($model, 'cidade')->textInput(['maxlength' => true]) ?></div>
        <div class="col-md-2"><?= $form->field($model, 'uf')->textInput(['maxlength' => true]) ?></div>
        <div class="col-md-3"><?= $form->field($model, 'telefone')->widget(\yii\widgets\MaskedInput::className(), ['mask' => ['(99) 9999-9999', '(99) 9 9999-9999']]) ?></div>
        <div class="col-md-3"><?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?></div>
    </div>
    <div class="row">
        <div class="col-md-4"><?= $form->field($model, 'nascimento')->widget(\yii\widgets\MaskedInput::className(), ['mask' => '99/99/9999']) ?></div>
        <div class="col-md-4"><?= $form->field($model, 'sexo')->dropDownList(
            ['m' => 'Masculino', 'f' => 'Feminino'], ['prompt' => 'Qual o sexo?']
    ); ?></div>
    </div>    

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
