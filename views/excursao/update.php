<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Excursao */

$this->title = 'Atualizando: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Excursão', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="excursao-update">

	<?php if($model->tipo == 'pessoa'): ?>
	    <?= $this->render('_form-pessoa', [
	        'model' => $model,
	    ]) ?>
	<?php endif: ?>

	<?php if($model->tipo == 'empresa'): ?>
	    <?= $this->render('_form-empresa', [
	        'model' => $model,
	    ]) ?>
	<?php endif; ?>

</div>
