<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Vamos conversar?';
?>

<div class="row row-page-register">
    <div class="container container-page-register">
      <div class="col-md-10 col-sm-12 col-md-offset-1 content-text-title-register">
        <h2 class="title-register">Gestão na Medida Certa</h2>
        <div class="row">
          <p class="col-md-6 col-sm-12 text-title-register">Lorem Ipsum placeholder text. Select the number of characters, words, sentences or paragraphs, and hit generate!</p>
        </div>
      </div>
      <div class="col-md-10 col-sm-12 col-12 col-md-offset-1 register-contact-box animated tada delay-1s">
        <!-- /.login-logo -->
          <div class="col-md-8 col-sm-12 col-12 register-box-left">
            <h4 class="title-box-left-register">Vamos conversar? Mande um oi</h4>
            <ul class="list-contacts-l list-group list-group-flush">
              <li class="list-group-item">
                <small>Whatsapp</small>
                <p>+55 62 98516-1191</p>
              </li>
              <li class="list-group-item">
                <small>Quem te atenderá</small>
                <p>Peterson Macedo</p>
              </li>
              <li class="list-group-item">
                <div class="form-group">
                  <label for="contatoWpp"><small>Mensagem</small></label>
                  <input type="email" class="form-control" id="contatoWpp" aria-describedby="wppHelp" value="Oi, quero saber mais sobre o SISPOU">
                  <small id="wppHelp" class="form-text text-muted">Tentaremos responder o mais rápido possivel</small>
                </div>
                <a href="https://wa.me/+5562985261191/?text=Oi, quero saber mais do SISPOU" class="btn btn-success pull-right btn-wpp">Enviar via Whatsapp</a>
              </li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-12 col-12 register-box-right">
            <div>
            <h4 class="title-box-right-register">Informações de contato</h4>
            <ul class="list-contacts-r list-group list-group-flush">
              <li class="list-group-item item-city">
                <p><i class="fa fa-map-marker" aria-hidden="true"></i> Trindade, Goiás</p>
              </li>
              <li class="list-group-item">
                <p><i class="fa fa-whatsapp" aria-hidden="true"></i> +55 62 98526-1191</p>
              </li>
              <li class="list-group-item">
                <p><i class="fa fa-envelope-o" aria-hidden="true"></i> contato@sispou.com.br</p>
              </li>
            </ul>
            </div>
          </div>
    </div>
    <div class="col-md-10 col-sm-12 col-12 col-md-offset-1 return-login-box">
      <div class="col-sm-12">
        <p><h3>Não obrigado,</h3> já tenho uma conta cadastrada <?= Html::a('Fazer login', ['site/login'], ['class' => 'btn btn-default btn-return-login']) ?></p>
      </div>
    </div>
  </div>
</div>
<div class="copy-login">
<span class="info-copy-login"><strong>&copy; 2018 SISPOU</strong> - Todos direitos reservados<br><small><i>Version 1.0</i></small></span>
</div>