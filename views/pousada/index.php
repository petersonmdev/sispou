<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PousadaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pousadas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pousada-index">

    <h3>
        <?php //= Html::encode($this->title) ?>
        <?= Html::a('Cadastrar Nova', ['create'], ['class' => 'btn btn-success']) ?>
    </h3>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nome_fantasia',
            //'razao_social',
            //'cnpj',
            //'cep',
            //'endereco',
            //'bairro',
            //'numero',
            'cidade',
            //'uf',
            //'localizacao',
            //'pagina_facebook',
            //'google_businnes',
            //'site',
            'telefone',
            'email:email',
            //'celular',
            //'senha',
            //'rp_nome',
            //'rp_idade',
            //'rp_sexo',
            //'rp_cpf',
            //'rp_rg',
            //'rp_naturalidade',
            //'rp_nacionalidade',
            //'rp_celular',
            //'rp_cep',
            //'rp_endereco',
            //'rp_bairro',
            //'rp_numero',
            //'rp_cidade',
            //'rp_uf',
            //'rp_email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
