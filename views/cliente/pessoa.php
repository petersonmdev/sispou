<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;

?>

<section class="content">
   <div class="col-md-12 content-client box">
      <hr>
      <div class="content-list-client">

         <?php Pjax::begin(); ?>
            <?php echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([

               'dataProvider' => $dataProvider,
               'tableOptions' => ['class' => 'table table-striped dataTable table-list-sispou'],

               'pager' => [
                  'options' => [
                        'tag' => 'ul',
                        'class' => 'pagination pull-right',
                        'id' => 'pager-container',
                    ],
                  'firstPageLabel' => 'Anterior',
                  'lastPageLabel'  => 'Próximo'
                ],

                'rowOptions'   => function ($model, $key, $index, $grid) {
                    return ['data-id' => $model->id];
                },


               'columns' => [
                  'nome',
                  'cpf',
                  'cidade',
                  'telefone',
                  'email:email',
               ],
            ]); ?>
         <?php Pjax::end(); ?>

      </div>


      <div class="row">
         <div class="col-sm-5">
            <button type="button" class="btn btn-sispou btn-sispou-success">
               <a href="pessoa-cadastro">Adicionar novo</a>
            </button>
         </div>
      </div>

   </div>
</section>


<?php
$this->registerJs("

    $('td').click(function (e) {
        var id = $(this).closest('tr').data('id');
        if(e.target == this)
            location.href = '" . Url::to(['cliente/pessoa-dados-cadastrais']) . "?id=' + id;
    });

");