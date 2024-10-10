<?php

namespace app\controllers;

use app\models\Ictassistance;
use app\models\IctassistanceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IctassistanceController implements the CRUD actions for Ictassistance model.
 */
class IctassistanceController extends Controller
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
     * Lists all Ictassistance models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new IctassistanceSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ictassistance model.
     * @param int $ictnumber Ictnumber
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ictnumber)
    {
        return $this->render('view', [
            'model' => $this->findModel($ictnumber),
        ]);
    }

    /**
     * Creates a new Ictassistance model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Ictassistance();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['ticketss/index', 'ictnumber' => $model->ictnumber]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Ictassistance model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ictnumber Ictnumber
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ictnumber)
    {
        $model = $this->findModel($ictnumber);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ictnumber' => $model->ictnumber]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Ictassistance model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ictnumber Ictnumber
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ictnumber)
    {
        $this->findModel($ictnumber)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Ictassistance model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ictnumber Ictnumber
     * @return Ictassistance the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ictnumber)
    {
        if (($model = Ictassistance::findOne(['ictnumber' => $ictnumber])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
