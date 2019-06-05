<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pousada */

$this->title = $model->nome_fantasia;
$this->params['breadcrumbs'][] = ['label' => 'Pousadas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pousada-view">

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Remover', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'a remoção não pode ser desfeita, continuar?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nome_fantasia',
            'razao_social',
            'cnpj',
            'cep',
            'endereco',
            'bairro',
            'numero',
            'cidade',
            'uf',
            'email:email',
            'telefone',
            'celular',
            'password_hash',
        ],
    ]) ?>

</div>
