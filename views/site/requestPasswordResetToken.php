<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Redefinição de Senha';

$fieldOptionsReset = [
    'options' => ['class' => 'form-group has-feedback form-email'],
    'inputTemplate' => "<i class='fa fa-envelope-o form-control-feedback' aria-hidden='true'></i>{input}<label for='text' class='lb-email'>Email</label><div class='bar'></div>"
];

?>

<div class="login-box animated flipInX delay-1s">
    <div class="login-logo">
        <?= Html::img('@web/img/logo-sispou.png', ['class'=>'img-responsive', 'alt' => 'logo']) ?>
    </div>
    <!-- /.login-logo -->
    <div class="site-request-password-reset">
        <h3 class="text-center request-box-msg"><?= Html::encode($this->title) ?></h3>
        <p>Por favor, preencha o seu email. Um link para redefinir a senha será enviado para lá.</p>

        <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form', 'enableClientValidation' => false]); ?>

        <?= $form
            ->field($model, 'email', $fieldOptionsReset)
            ->textInput(['placeholder' => false, 'class' => 'form-control inpt-email', 'id' => false, 'required' => 'required'])
            ->label(false) ?>

        <div class="row">
            <div class="col-xs-12">
                <?= Html::submitButton('Redefinir', ['class' => 'btn btn-access btn-block', 'name' => 'login-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>

        <div class="row content-login-register">
            <?= Html::a('Fazer login', ['site/login'], ['class' => 'col-xs-12 text-left']) ?>
        </div>
    </div>
</div>

<div class="copy-login">
    <span class="info-copy-login">&copy; <?= date("Y"); ?> SISPOU - Todos direitos reservados<br>
        <small><i>Version 1.0</i></small>
    </span>
</div>