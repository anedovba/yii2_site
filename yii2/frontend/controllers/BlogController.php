<?php
namespace frontend\controllers;

use common\models\Blog;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


/**
 * Blog controller
 */
class BlogController extends Controller
{
    public function behaviors()
    {
        return [
            [
                'class' => 'yii\filters\PageCache',
                'only' => ['items-list'],
                'duration' => 600,
                'variations' => [
                    $_SERVER['HTTP_HOST'],
                    \Yii::$app->language
                ],
            ],
        ];
    }



    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
//        $blogs=Blog::find()->all();//обращаемся к модели и выбираем всё - не забыть импортировать класс
        $blogs=Blog::find()->andWhere(['status_id'=>1])->orderBy('sort');//обращаемся к модели и выбираем с статусом 1 + сортировка
        $dataProvider = new ActiveDataProvider([
            'query' => $blogs,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        return $this->render('all', ['dataProvider'=>$dataProvider]);//передаем во вью
    }
    public function actionOne($url)
    {
        //обращаемся к модели и выбираем один с урл
        if($blog=Blog::find()->andWhere(['url'=>$url])->one()){
            return $this->render('one', ['blog'=>$blog]);//передаем во вью
        }
        throw new NotFoundHttpException('такой блог не существует');
        }


}
