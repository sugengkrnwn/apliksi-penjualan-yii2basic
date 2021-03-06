<?php

namespace app\controllers;

use Yii;
use app\models\Penjualan;
use app\models\PenjualanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Petugas;
use yii\helpers\ArrayHelper;

/**
 * PenjualanController implements the CRUD actions for Penjualan model.
 */
class PenjualanController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout','index','create','update','delete'],
                'rules' => [
                    [
                        'actions' => ['logout','index','create','update','delete'],
                        'allow' => 'true',
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Penjualan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PenjualanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Penjualan model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Penjualan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Penjualan();
        $listPetugas = Petugas::find()->all();
        $listPetugas = ArrayHelper::map($listPetugas,'idpetugas','namapetugas');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->nofaktur]);
        }

        return $this->render('create', [
            'model' => $model,
            'listPetugas' => $listPetugas
        ]);
    }

    /**
     * Updates an existing Penjualan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $listPetugas = Petugas::find()->all();
        $listPetugas = ArrayHelper::map($listPetugas,'idpetugas','namapetugas');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->nofaktur]);
        }

        return $this->render('update', [
            'model' => $model,
            'listPetugas' => $listPetugas
        ]);
    }

    /**
     * Deletes an existing Penjualan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Penjualan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Penjualan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Penjualan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
