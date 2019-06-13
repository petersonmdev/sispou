

<?php

	use yii\widgets\Breadcrumbs;

	$this->title = ucfirst(str_replace('-', ' ', Yii::$app->controller->action->id));
	$this->params['breadcrumbs'][] = ucfirst(Yii::$app->controller->id);
	$this->params['breadcrumbs'][] = ucfirst(str_replace('-', ' ', Yii::$app->controller->action->id));

?>

<section class="content-header">
	<h1><?=$this->title?></h1>
	<?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>

    <div class="col-md-12">
    	<?php Yii::$app->session->setFlash('info', "Your message to display."); ?>
    </div>
</section>
