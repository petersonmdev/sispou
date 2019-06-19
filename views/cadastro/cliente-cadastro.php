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
         <div class="box">
            <div class="box-body">

               <?= $this->render('_form-cliente', [
                    'model' => $model,
                ]) ?>
                
            </div>
            <!-- /.box-body -->
         </div>
      </div>
      <div class="col-md-3">
         <div class="box box-success">
            <div class="box-header with-border">
               <h3 class="box-title">Últimos cadastros</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <ul>
                  <li>Lorem ipsum dolor sit amet</li>
                  <li>Consectetur adipiscing elit</li>
                  <li>Integer molestie lorem at massa</li>
                  <li>Facilisis in pretium nisl aliquet</li>
                  <li>Nulla volutpat aliquam velit</li>
                  <li>Faucibus porta lacus fringilla vel</li>
                  <li>Aenean sit amet erat nunc</li>
                  <li>Eget porttitor lorem</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>