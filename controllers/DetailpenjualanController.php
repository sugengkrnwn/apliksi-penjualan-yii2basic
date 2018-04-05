<?php

namespace app\controllers;

use Yii;
use app\models\Detailpenjualan;
use app\models\DetailpenjualanSearch;
use app\models\Penjualan;
use app\models\Barang;

use yii\web\Controller;
use yii\web\NotFoundHttpException;

use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;


/**
 * DetailpenjualanController implements the CRUD actions for Detailpenjualan model.
 */
class DetailpenjualanController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout','index','about','contact','create','update','delete'],
                'rules' => [
                    [
                        'actions' => ['logout','index'],
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
     * Lists all Detailpenjualan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DetailpenjualanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Detailpenjualan model.
     * @param integer $id
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
     * Creates a new Detailpenjualan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Detailpenjualan();
        $listnofaktur = Penjualan::find()->all(); //model find all
        $listkodebarang = Barang::find()->all();
        $listnofaktur = ArrayHelper::map($listnofaktur,'nofaktur','nofaktur'); //array helper
        $listkodebarang = ArrayHelper::map($listkodebarang, 'kodebarang','namabarang');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_detailpenjualan]);
        }

        return $this->render('create', [
            'model' => $model,
            'listnofaktur' => $listnofaktur,
            'listkodebarang' => $listkodebarang
        ]);
    }

    /**
     * Updates an existing Detailpenjualan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $listnofaktur = Penjualan::find()->all(); //model find all
        $listkodebarang = Barang::find()->all();
        $listnofaktur = ArrayHelper::map($listnofaktur,'nofaktur','nofaktur'); //array helper
        $listkodebarang = ArrayHelper::map($listkodebarang, 'kodebarang','namabarang');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_detailpenjualan]);
        }

        return $this->render('update', [
            'model' => $model,
            'listnofaktur' => $listnofaktur,
            'listkodebarang' => $listkodebarang
        ]);
    }

    /**
     * Deletes an existing Detailpenjualan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Detailpenjualan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Detailpenjualan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Detailpenjualan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
