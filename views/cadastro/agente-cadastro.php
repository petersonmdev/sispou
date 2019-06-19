<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */
/* @var $form yii\widgets\ActiveForm */

?>

<section class="content">
   <div class="row">
      <div class="col-md-9">
         <div class="box box-primary">
            <div class="box-body">               

               <?= $this->render('_form-agente', [
                    'model' => $model,
                ]) ?>

            </div>
            <!-- /.box-body -->
         </div>
      </div>
      <div class="col-md-3">
         <div class="box box-primary box-last-signs">
            <div class="box-header with-border">
               <h3 class="box-title">Últimos cadastros</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <ul>
                  <li><a href="#">Lorem ipsum dolor sit amet <small>Goiania-GO</small></a></li>
                  <li><a href="#">Consectetur adipiscing elit <small>Goiania-GO</small></a></li>
                  <li><a href="#">Integer molestie lorem at massa <small>Goiania-GO</small></a></li>
                  <li><a href="#">Facilisis in pretium nisl aliquet <small>Goiania-GO</small></a></li>
                  <li><a href="#">Nulla volutpat aliquam velit <small>Goiania-GO</small></a></li>
                  <li><a href="#">Faucibus porta lacus fringilla vel <small>Goiania-GO</small></a></li>
                  <li><a href="#">Aenean sit amet erat nunc <small>Goiania-GO</small></a></li>
                  <li><a href="#">Eget porttitor lorem <small>Goiania-GO</small></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>