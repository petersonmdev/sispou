<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

?>

<section class="content">
   <div class="col-md-12 content-client box">
      <hr>
      <div class="content-list-client">

         <?php Pjax::begin(); ?>
            <?php echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
               'dataProvider' => $dataProvider,
               //'filterModel' => $searchModel,
               'columns' => [
                     //['class' => 'yii\grid\SerialColumn'],

                     //'id',
                     'nome',
                     //'sexo',
                     //'data_nascimento',
                     'cpf',
                     //'cep',
                     //'endereco',
                     //'bairro',
                     //'numero',
                     'cidade',
                     //'uf',
                     'telefone',
                     'email:email',

                     ['class' => 'yii\grid\ActionColumn'],
               ],
            ]); ?>
         <?php Pjax::end(); ?>

         <div class="row">
            <div class="col-sm-5">
               <button type="button" class="btn btn-success">
                  <a href="pessoa-cadastro">Adicionar novo</a>
               </button>
            </div>
            <div class="col-sm-7">
               <div class="dataTables_paginate paging_simple_numbers pull-right">
                  <ul class="pagination">
                     <li class="paginate_button previous disabled">
                        <a href="#">Anterior</a>
                     </li>
                     <li class="paginate_button active"><a href="#">1</a></li>
                     <li class="paginate_button "><a href="#">2</a></li>
                     <li class="paginate_button "><a href="#">3</a></li>
                     <li class="paginate_button "><a href="#">4</a></li>
                     <li class="paginate_button "><a href="#">5</a></li>
                     <li class="paginate_button "><a href="#">6</a></li>
                     <li class="paginate_button next">
                        <a href="#">Próximo</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>