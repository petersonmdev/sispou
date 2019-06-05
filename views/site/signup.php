<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Cadastrar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-md-12">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <div class="row">
                    <div class="col-md-5"><?= $form->field($model, 'nome_fantasia')->textInput(['autofocus' => true]) ?></div>
                    <div class="col-md-5"><?= $form->field($model, 'razao_social')->textInput() ?></div>
                    <div class="col-md-2"><?= $form->field($model, 'cnpj')->widget(\yii\widgets\MaskedInput::className(), [
                        'mask' => '99-999-999/9999-99',
                    ]) ?></div>
                </div>
                <div class="row">
                    <div class="col-md-2"><?= $form->field($model, 'cep')->widget(\yii\widgets\MaskedInput::className(), [
                        'mask' => '99999-999',
                    ]) ?></div>
                    <div class="col-md-8"><?= $form->field($model, 'endereco')->textInput() ?></div>
                    <div class="col-md-2"><?= $form->field($model, 'numero')->textInput() ?></div>
                </div>
                <div class="row">                    
                    <div class="col-md-3"><?= $form->field($model, 'bairro')->textInput() ?></div>
                    <div class="col-md-4"><?= $form->field($model, 'cidade')->textInput() ?></div>
                    <div class="col-md-2"><?= $form->field($model, 'uf')->textInput() ?></div>
                    <div class="col-md-3"><?= $form->field($model, 'site')->textInput() ?></div>
                </div>
                <div class="row">
                    <div class="col-md-3"><?= $form->field($model, 'telefone')->widget(\yii\widgets\MaskedInput::className(), [
                        'mask' => '(99) 9999-9999',
                    ]) ?></div>
                    <div class="col-md-3"><?= $form->field($model, 'celular')->widget(\yii\widgets\MaskedInput::className(), [
                        'mask' => '(99) 9 9999-9999',
                    ]) ?></div>
                    <div class="col-md-4"><?= $form->field($model, 'email')->textInput() ?></div>
                    <div class="col-md-2"><?= $form->field($model, 'password_hash')->passwordInput() ?></div>
                </div>
                

                <div class="form-group">
                    <?= Html::submitButton('Cadastrar', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>