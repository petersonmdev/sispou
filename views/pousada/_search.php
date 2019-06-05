<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PousadaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pousada-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nome_fantasia') ?>

    <?= $form->field($model, 'razao_social') ?>

    <?= $form->field($model, 'cnpj') ?>

    <?= $form->field($model, 'cep') ?>

    <?php // echo $form->field($model, 'endereco') ?>

    <?php // echo $form->field($model, 'bairro') ?>

    <?php // echo $form->field($model, 'numero') ?>

    <?php // echo $form->field($model, 'cidade') ?>

    <?php // echo $form->field($model, 'uf') ?>

    <?php // echo $form->field($model, 'localizacao') ?>

    <?php // echo $form->field($model, 'pagina_facebook') ?>

    <?php // echo $form->field($model, 'google_businnes') ?>

    <?php // echo $form->field($model, 'site') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'telefone') ?>

    <?php // echo $form->field($model, 'celular') ?>

    <?php // echo $form->field($model, 'password_hash') ?>

    <?php // echo $form->field($model, 'rp_nome') ?>

    <?php // echo $form->field($model, 'rp_idade') ?>

    <?php // echo $form->field($model, 'rp_sexo') ?>

    <?php // echo $form->field($model, 'rp_cpf') ?>

    <?php // echo $form->field($model, 'rp_rg') ?>

    <?php // echo $form->field($model, 'rp_naturalidade') ?>

    <?php // echo $form->field($model, 'rp_nacionalidade') ?>

    <?php // echo $form->field($model, 'rp_celular') ?>

    <?php // echo $form->field($model, 'rp_cep') ?>

    <?php // echo $form->field($model, 'rp_endereco') ?>

    <?php // echo $form->field($model, 'rp_bairro') ?>

    <?php // echo $form->field($model, 'rp_numero') ?>

    <?php // echo $form->field($model, 'rp_cidade') ?>

    <?php // echo $form->field($model, 'rp_uf') ?>

    <?php // echo $form->field($model, 'rp_email') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
