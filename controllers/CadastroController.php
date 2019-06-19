<?php

namespace app\controllers;

use Yii;
use app\models\Cadastro;
use app\models\CadastroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * CadastroController implements the CRUD actions for Cadastro model.
 */
class CadastroController extends Controller
{
    
    ////////////////////////////////////
    //////////////////////////////////
    // ACTIONS DE cliente
    ///////////////////////////////
    public function actionCliente(){
        
        $searchModel = new CadastroSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['cliente_tipo' => 'pessoa']);
        $dataProvider->pagination->pageSize=10;

        return $this->render('cliente', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionClienteCadastro()
    {
        $model = new Cadastro();

        if ($model->load(Yii::$app->request->post()) ) {

            $model->pousada_id = Yii::$app->user->identity->id;
            $model->cliente_tipo = 'cliente';
            
            if($model->validate()){
                $model->save();

                Yii::$app->session->setFlash('cliente-dados-cadastrais', 'Cadastro Realizado!');
                return $this->redirect(['cliente-dados-cadastrais', 'id' => $model->id]);
            }
        }

        return $this->render('cliente-cadastro', [
            'model' => $model,
        ]);
    }


    public function actionClienteAtualizar($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) ) {

            $model->pousada_id = Yii::$app->user->identity->id;
            $model->cliente_tipo = 'cliente';
            
            if($model->validate()){
                $model->save();

                Yii::$app->session->setFlash(['options' => ['class' => 'alert-info']], 'Cadastro Atualizado!');
                return $this->redirect(['cliente-dados-cadastrais', 'id' => $model->id]);
            }
            
        }

        return $this->render('cliente-atualizar', [
            'model' => $model,
        ]);
    }


    public function actionClienteDadosCadastrais($id)
    {

        return $this->render('cliente-dados-cadastrais', [
            'model' => $this->findModel($id),
        ]);
    }


    ////////////////////////////////////
    //////////////////////////////////
    // ACTIONS DE AGENTE
    ///////////////////////////////
    public function actionAgente(){        
        
        $searchModel = new CadastroSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['cliente_tipo' => 'agente']);
        $dataProvider->pagination->pageSize=10;

        return $this->render('agente', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionAgenteCadastro()
    {
        
        $model = new Cadastro();

        if ($model->load(Yii::$app->request->post()) ) {

            $model->pousada_id = Yii::$app->user->identity->id;
            $model->cliente_tipo = 'agente';
            
            if($model->validate()){
                $model->save();
                return $this->redirect(['agente-dados-cadastrais', 'id' => $model->id]);
            }
        }

        return $this->render('agente-cadastro', [
            'model' => $model,
        ]);

    }


    public function actionAgenteAtualizar($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) ) {

            $model->pousada_id = Yii::$app->user->identity->id;
            $model->cliente_tipo = 'agente';

            $model->save();

            return $this->redirect(['agente-dados-cadastrais', 'id' => $model->id]);
        }

        return $this->render('agente-atualizar', [
            'model' => $model,
        ]);
    }

    public function actionAgenteDadosCadastrais($id)
    {
        return $this->render('agente-dados-cadastrais', [
            'model' => $this->findModel($id),
        ]);
    }


    
    ////////////////////////////////////
    //////////////////////////////////
    // ACTIONS DE EMPRESA
    ///////////////////////////////
    public function actionEmpresa(){
        
        $searchModel = new CadastroSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['cliente_tipo' => 'empresa']);
        $dataProvider->pagination->pageSize=10;

        return $this->render('empresa', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionEmpresaCadastro()
    {
        $model = new Cadastro();

        if ($model->load(Yii::$app->request->post()) ) {

            $model->pousada_id = Yii::$app->user->identity->id;
            $model->cliente_tipo = 'empresa';
            
            if($model->validate()){
                $model->save();
                return $this->redirect(['empresa-dados-cadastrais', 'id' => $model->id]);
            }
        }

        return $this->render('empresa-cadastro', [
            'model' => $model,
        ]);
    }


    public function actionEmpresaAtualizar($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) ) {

            $model->pousada_id = Yii::$app->user->identity->id;
            $model->cliente_tipo = 'empresa';

            $model->save();

            return $this->redirect(['empresa-dados-cadastrais', 'id' => $model->id]);
        }

        return $this->render('empresa-atualizar', [
            'model' => $model,
        ]);
    }


    public function actionEmpresaDadosCadastrais($id)
    {
        return $this->render('empresa-dados-cadastrais', [
            'model' => $this->findModel($id),
        ]);
    }



    ////////////////////////////////////
    //////////////////////////////////
    // GLOBAL ACTIONS
    ///////////////////////////////
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    protected function findModel($id)
    {
        if (($model = Cadastro::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


}
