<?php

use yii\helpers\Html;

?>

<section class="content">
        <div class="box">
          <div class="box-body">
            <div class="col-sm-12 col-md-9 content-dados-cadastrais">
              <div class="row">
                <div class="col-md-8 content-cad-g-h">
                  <p><span>Nome <br /></span><strong> <?=$model->nome?> </strong></p>
                </div>
                <div class="col-md-4 content-cad-g-h">
                  <p><span>CPF <br /></span><strong> <?=$model->cpf?> </strong></p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3 content-cad-g-h">
                  <p><span>CEP <br /></span><strong> <?=$model->cep?> </strong></p>
                </div>
                <div class="col-md-6 content-cad-g-h">
                  <p><span>Endereço <br /></span><strong> <?=$model->endereco?> </strong></p>
                </div>
                <div class="col-md-3 content-cad-g-h">
                  <p><span>Número <br /></span><strong> <?=$model->numero?> </strong></p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 content-cad-g-h">
                  <p><span>Bairro <br /></span><strong> <?=$model->bairro?> </strong></p>
                </div>
                <div class="col-md-3 content-cad-g-h">
                  <p><span>Cidade <br /></span><strong> <?=$model->cidade?> </strong></p>
                </div>
                <div class="col-md-3 content-cad-g-h">
                  <p><span>UF <br /></span><strong> <?=$model->uf?> </strong></p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3 content-cad-g-h">
                  <p><span>Telefone <br /></span><strong> <?=$model->telefone?> </strong></p>
                </div>
                <div class="col-md-3 content-cad-g-h">
                  <p><span>Email <br /></span><strong> <?=$model->email?> </strong></p>
                </div>
                <div class="col-md-3 content-cad-g-h">
                  <p><span>Dt Nasc <br /></span><strong> <?=$model->nascimento?> </strong></p>
                </div>
                <div class="col-md-3 content-cad-g-h">
                  <p><span>Sexo <br /></span><strong> <?=$model->sexo?> </strong></p>
                </div>
              </div>

              <div class="row content-btn-gh">
                <div class="col-md-12 pull-left">
                  <?= Html::a('Voltar', ['empresa'], ['class' => 'btn btn-default']) ?>
                  <?= Html::a('Imprimir', ['empresa-ficha', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
                  <?= Html::a('Atualizar', ['empresa-atualizar', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
                </div>
              </div>
            </div>


            <div class="col-sm-12 col-md-3 content-hospede-info">
              <div class="row">
                <div class="col-md-12 content-cad-g-h">
                  <p><span>Estadia </span><strong>00489</strong></p>
                </div>
                <div class="col-md-12 content-cad-g-h destaque-edit">
                  <h4><span>Hospede <br /></span><strong> <?=$model->nome?> </strong></h4>
                </div>
                <div class="col-md-6 content-cad-g-h">
                  <p><span>Data de entrada <br /></span><strong>05/05/2019</strong></p>
                </div>
                <div class="col-md-6 content-cad-g-h">
                  <p><span>Data de saída <br /></span><strong>05/05/2019</strong></p>
                </div>
                <div class="col-md-6 content-cad-g-h">
                  <p><span>Apartamento <br /></span><strong>00489</strong></p>
                </div>
                <div class="col-md-6 content-cad-g-h">
                  <p><span>Valor diária <br /></span><strong>100,00</strong></p>
                </div>
                <div class="col-md-6 content-cad-g-h">
                  <p><span>Total <br /></span><strong>100,00</strong></p>
                </div>
                <div class="col-md-6 content-cad-g-h">
                  <p><span>Falta pagar <br /></span><strong>100,00</strong></p>
                </div>
                <div class="col-md-6 content-cad-g-h">
                  <p><span>Adultos <br /></span><strong>01</strong></p>
                </div>
                <div class="col-md-6 content-cad-g-h">
                  <p><span>Crianças <br /></span><strong>00</strong></p>
                </div>
                <div class="col-md-12 content-cad-g-h">
                  <p><span>Emprestimos <br /></span><strong>Secador, ferro de passar</strong></p>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
      </section>