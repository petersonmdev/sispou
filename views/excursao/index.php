<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExcursaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Excursão';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="excursao-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p class="pull-right">
        <?= Html::a('Cadastrar Pessoa', ['create-pessoa'], ['class' => 'btn btn-warning']) ?>
        <?= Html::a('Cadastrar Empresa', ['create-empresa'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'pousada_id',
            'nome',
            'razao_social',
            //'cpf',
            //'uf',
            'cidade',
            'telefone',
            'email:email',
            //'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
