<?php
namespace kouosl\DersProgrami\controllers\frontend;

use Yii;
use kouosl\DersProgrami\models\Dersprogrami;
use yii\data\ActiveDataProvider;
use kouosl\base\controllers\frontend\BaseController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * Default controller for the `DersProgrami` module
 */
class DefaultController extends \kouosl\base\controllers\frontend\BaseController
{
  /**
   * {@inheritdoc}
   */
  public function behaviors()
  {
      return [
          'verbs' => [
              'class' => VerbFilter::className(),
              'actions' => [
                  'delete' => ['POST'],
              ],
          ],
      ];
  }

  /**
   * Lists all Dersprogrami models.
   * @return mixed
   */
  public function actionIndex()
  {
      $dataProvider = new ActiveDataProvider([
          'query' => Dersprogrami::find(),
      ]);

      return $this->render('index', [
          'dataProvider' => $dataProvider,
      ]);
  }

  /**
   * Displays a single Dersprogrami model.
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
   * Creates a new Dersprogrami model.
   * If creation is successful, the browser will be redirected to the 'view' page.
   * @return mixed
   */
  public function actionCreate()
  {
      $model = new Dersprogrami();

      if ($model->load(Yii::$app->request->post()) && $model->save()) {
          return $this->redirect(['view', 'id' => $model->programID]);
      }

      return $this->render('create', [
          'model' => $model,
      ]);
  }

  /**
   * Updates an existing Dersprogrami model.
   * If update is successful, the browser will be redirected to the 'view' page.
   * @param integer $id
   * @return mixed
   * @throws NotFoundHttpException if the model cannot be found
   */
  public function actionUpdate($id)
  {
      $model = $this->findModel($id);

      if ($model->load(Yii::$app->request->post()) && $model->save()) {
          return $this->redirect(['view', 'id' => $model->programID]);
      }

      return $this->render('update', [
          'model' => $model,
      ]);
  }

  /**
   * Deletes an existing Dersprogrami model.
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
   * Finds the Dersprogrami model based on its primary key value.
   * If the model is not found, a 404 HTTP exception will be thrown.
   * @param integer $id
   * @return Dersprogrami the loaded model
   * @throws NotFoundHttpException if the model cannot be found
   */
  protected function findModel($id)
  {
      if (($model = Dersprogrami::findOne($id)) !== null) {
          return $model;
      }

      throw new NotFoundHttpException('The requested page does not exist.');
  }
}
