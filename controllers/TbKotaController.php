<?php

namespace app\controllers;

use app\models\TbKota;
use app\models\TbKotaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TbKotaController implements the CRUD actions for TbKota model.
 */
class TbKotaController extends Controller
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
     * Lists all TbKota models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TbKotaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TbKota model.
     * @param int $id_kota Id Kota
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_kota)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_kota),
        ]);
    }

    /**
     * Creates a new TbKota model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TbKota();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_kota' => $model->id_kota]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TbKota model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_kota Id Kota
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_kota)
    {
        $model = $this->findModel($id_kota);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_kota' => $model->id_kota]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TbKota model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_kota Id Kota
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_kota)
    {
        $this->findModel($id_kota)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TbKota model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_kota Id Kota
     * @return TbKota the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_kota)
    {
        if (($model = TbKota::findOne(['id_kota' => $id_kota])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
