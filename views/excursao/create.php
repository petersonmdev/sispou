<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Excursao */

$this->title = 'Cadastro de Excursão';
$this->params['breadcrumbs'][] = ['label' => 'Excursão', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="excursao-create">

	<?php if($formType == 'pessoa'): ?>
	    <?= $this->render('_form-pessoa', [
	        'model' => $model,
	    ]) ?>
	<?php endif; ?>

	<?php if($formType == 'empresa'): ?>
	    <?= $this->render('_form-empresa', [
	        'model' => $model,
	    ]) ?>
	<?php endif; ?>

</div>
