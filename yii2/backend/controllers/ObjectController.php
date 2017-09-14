<?php

namespace backend\controllers;

use common\models\ObjectImage;
use common\models\ObjectType;
use PharIo\Manifest\Url;
use Yii;
use common\models\Object;
use common\models\ObjectSearch;
use yii\helpers\FileHelper;
use yii\image\drivers\Image;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\MethodNotAllowedHttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use common\models\Lang;
use yii\web\Response;
use yii\web\UploadedFile;

/**
 * ObjectController implements the CRUD actions for Object model.
 */
class ObjectController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                    'delete-img' => ['POST'],
                    'sort-img' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Object models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ObjectSearch();
        $dataProvider = new ActiveDataProvider([
            'query' => Object::find()
                ->with([
                    'currentTranslate', // loadabing data associated with the current translation
                    'hasTranslate' // need to display the status was translated page
                ]),
        ]);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'langList' => Lang::getList(),
        ]);
    }

    /**
     * Displays a single Object model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Object model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Object();
//        echo '<pre>';
//var_dump($model->attributes);
//die;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'lang_id'=>$model->language]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Object model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'lang_id'=>$model->language]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Object model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Object model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Object the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Object::find()->with('tags')->andWhere(['id'=>$id])->one()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionSaveImg(){
        if(Yii::$app->request->isPost){
            $dir = Yii::getAlias('@images').'/property/';
            $post=Yii::$app->request->post();
            if (!file_exists($dir)) {
                FileHelper::createDirectory($dir);
            }
            $result_link=str_replace('admin','',\yii\helpers\Url::home(true)).'uploads/images/property/';
            $file=UploadedFile::getInstanceByName('ObjectImage[attachment]');
            $model=new ObjectImage();
            $model->image=strtotime('now').'_'.Yii::$app->getSecurity()->generateRandomString(6).'.'.$file->extension;
            $model->load($post);
            $model->validate();
            if($model->hasErrors()){
                $res=[
                    'error'=>$model->getFirstError ('attachment')
                ];
            }
            else
            {

                if($file->saveAs($dir.$model->image)){
                    $imag=Yii::$app->image->load($dir.$model->image);
                    $imag->resize(1920, null, Image::PRECISE)->save($dir.$model->image,85);
                    $res=['filelink'=>$result_link.$model->image, 'filename'=>$model->image];
                }
                else{
                    $res=[
                        'error'=>'ошибка'
                    ];
                }
                $model->save();
            }

            Yii::$app->response->format=Response::FORMAT_JSON;
            return $res;
        } else {
            return $this->render('save-img');
        }


    }
    public function actionDeleteImg()
    {
        if(($model = ObjectImage::findOne(Yii::$app->request->post('key'))) and $model->delete()){

            return true;
        } else {
            throw new NotFoundHttpException('Запрашиваемая страница не найдена.');
        }
    }
    public function actionSortImg($id)
    {
        if(Yii::$app->request->isAjax){
            $post = Yii::$app->request->post('sort');
            if($post['oldIndex'] > $post['newIndex']){
                $param = ['and',['>=','sort',$post['newIndex']],['<','sort',$post['oldIndex']]];
                $counter = 1;
            }else{
                $param = ['and',['<=','sort',$post['newIndex']],['>','sort',$post['oldIndex']]];
                $counter = -1;
            }
            ObjectImage::updateAllCounters(['sort' => $counter], [
                'and',['object_id'=>$id],$param
            ]);
            ObjectImage::updateAll(['sort' => $post['newIndex']], [
                'id' => $post['stack'][$post['newIndex']]['key']
            ]);
            return true;
        }
        throw new MethodNotAllowedHttpException();
    }
}
