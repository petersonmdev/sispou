<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pousada */

$this->title = 'Minhas Informações';
$this->params['breadcrumbs'][] = ['label' => 'Pousadas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome_fantasia, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="pousada-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
