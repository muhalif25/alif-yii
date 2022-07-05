<?php

namespace app\controllers;

use app\models\TbProvensi;
use app\models\TbProvensiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TbProvensiController implements the CRUD actions for TbProvensi model.
 */
class TbProvensiController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all TbProvensi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TbProvensiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TbProvensi model.
     * @param int $id_provensi Id Provensi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_provensi)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_provensi),
        ]);
    }

    /**
     * Creates a new TbProvensi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TbProvensi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_provensi' => $model->id_provensi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TbProvensi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_provensi Id Provensi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_provensi)
    {
        $model = $this->findModel($id_provensi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_provensi' => $model->id_provensi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TbProvensi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_provensi Id Provensi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_provensi)
    {
        $this->findModel($id_provensi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TbProvensi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_provensi Id Provensi
     * @return TbProvensi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_provensi)
    {
        if (($model = TbProvensi::findOne(['id_provensi' => $id_provensi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
