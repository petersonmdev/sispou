<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pousada */

$this->title = 'Cadastro de Pousada';
$this->params['breadcrumbs'][] = ['label' => 'Pousadas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pousada-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
