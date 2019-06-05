<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Excursao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="excursao-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-8">
        <div class="row">
            <div class="col-md-6"><?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?></div>
        </div>

        <div class="row">
            <div class="col-md-6"><?= $form->field($model, 'cpf')->widget(\yii\widgets\MaskedInput::className(), [
                        'mask' => '999-999-999-99',
                    ]) ?></div>
            <div class="col-md-6"><?= $form->field($model, 'cidade')->textInput(['maxlength' => true]) ?></div>
        </div>

        <div class="row"> 
            <div class="col-md-4"><?= $form->field($model, 'telefone')->widget(\yii\widgets\MaskedInput::className(), [
                        'mask' => ['(99) 9999-9999', '(99) 9 9999-9999'],
                    ]) ?></div>           
            <div class="col-md-8"><?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?></div>
        </div>        

        <div class="form-group">
            <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
