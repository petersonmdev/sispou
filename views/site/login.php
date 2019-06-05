<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'SISPOU - Acessar conta';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback form-email'],
    'inputTemplate' => "<i class='fa fa-envelope-o form-control-feedback' aria-hidden='true'></i>{input}<label for='text' class='lb-email'>Email</label><div class='bar'></div>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback form-pass'],
    'inputTemplate' => "<i class='fa fa-lock form-control-feedback' aria-hidden='true'></i>{input}<label for='pass' class='lb-pass'>Senha</label><div class='bar'></div>"
];
?>

<div class="login-box animated flipInX delay-1s">
    <div class="login-logo">
        <?= Html::img('@web/img/logo-sispou.png', ['class'=>'img-responsive', 'alt' => 'logo']) ?>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Acessar conta</p>

        <?php $form = ActiveForm::begin(['enableClientValidation' => false]); ?>

        <?= $form
            ->field($model, 'username', $fieldOptions1)
            ->textInput(['placeholder' => false, 'class' => 'form-control inpt-email', 'id' => false, 'required' => 'required'])
            ->label(false) ?>

        <?= $form
            ->field($model, 'password', $fieldOptions2)
            ->passwordInput(['placeholder' => false, 'class' => 'form-control inpt-pass', 'id' => false, 'required' => 'required'])
            ->label(false) ?>

        <div class="row">
            <div class="col-xs-12 login-remember">
                <?= Html::a('<i>Esqueceu?</i>', ['site/request-password-reset'], ['class' => 'pull-right']) ?>
            </div>
            <!-- /.col -->
            <div class="col-xs-12">
                <?= Html::submitButton('Acessar', ['class' => 'btn btn-access btn-block', 'name' => 'login-button']) ?>
            </div>

        </div>

        <?php ActiveForm::end(); ?>        

        <div class="row content-login-register">
            <?= Html::a('<span>Novo por aqui?</span> Quer utilizar SISPOU?', ['site/register'], ['class' => 'col-xs-12 text-center']) ?>
        </div>

    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->

<div class="copy-login">
    <span class="info-copy-login">&copy; <?= date("Y"); ?> SISPOU - Todos direitos reservados<br>
        <small><i>Version 1.0</i></small>
    </span>
</div>