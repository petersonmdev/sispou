<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Excursao */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Excursão', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="excursao-view">

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Remover', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Deseja remover?',
                'method' => 'post',
            ],
        ]) ?>

        <span class="pull-right">            
            <?= Html::a('Cadastrar Pessoa', ['create'], ['class' => 'btn btn-warning']) ?>
            <?= Html::a('Cadastrar Empresa', ['create'], ['class' => 'btn btn-success']) ?>
        </span>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'pousada_id',
            'nome',
            //'razao_social',
            'cpf',
            //'uf',
            'cidade',
            'telefone',
            'email:email',
            'created_at',
        ],
    ]) ?>

</div>
