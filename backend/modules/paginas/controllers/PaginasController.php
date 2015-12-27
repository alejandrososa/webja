<?php

namespace backend\modules\paginas\controllers;

use Yii;
use common\models\JaPaginas;
use backend\models\PaginasBuscador;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PaginasController implements the CRUD actions for JaPaginas model.
 */
class PaginasController extends Controller
{


    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }


    /**
     * Lists all JaPaginas models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new JaPaginas();
        $searchModel = new PaginasBuscador();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model
        ]);
    }


    /**
     * Updates an existing JaPaginas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionPortada()
    {
        $model = $this->findModelPortada();
        $model->scenario = 'update';
        $imagen = ['uploadUrl' => '@backend/web/imagenes/paginas'];

        //print_r(Yii::$app->request->post()); die();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['portada', 'id' => $model->id]);
        } else {
            return $this->render('portada', [
                'model' => $model,
                'imagenUp' => $imagen
            ]);
        }
    }

    /**
     * Displays a single JaPaginas model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new JaPaginas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new JaPaginas();
        $model->scenario = 'insert';
        $imagen = ['uploadUrl' => '@backend/web/imagenes/paginas'];

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'imagenUp' => $imagen
            ]);
        }
    }

    /**
     * Updates an existing JaPaginas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->scenario = 'update';
        $imagen = ['uploadUrl' => '@backend/web/imagenes/paginas'];

        //print_r(Yii::$app->request->post()); die();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'imagenUp' => $imagen
            ]);
        }
    }

    /**
     * Deletes an existing JaPaginas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the JaPaginas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return JaPaginas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = JaPaginas::find()
                ->where(['id' => $id])
                ->with(['autores','categorias'])
                ->one()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function findModelPortada()
    {
        if (($model = JaPaginas::find()
                ->where(['tipo' => JaPaginas::TIPO_PORTADA, 'categoria' => 0])
                ->with(['autores','categorias'])
                ->one()) !== null) {
            return $model;
        } else {
            return new JaPaginas();
            //throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
