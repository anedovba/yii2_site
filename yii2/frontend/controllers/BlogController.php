<?php
namespace frontend\controllers;

use common\models\Blog;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


/**
 * Blog controller
 */
class BlogController extends Controller
{


    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
//        $blogs=Blog::find()->all();//обращаемся к модели и выбираем всё - не забыть импортировать класс
        $blogs=Blog::find()->andWhere(['status_id'=>1])->orderBy('sort')->all();//обращаемся к модели и выбираем с статусом 1 + сортировка
        return $this->render('all', ['blogs'=>$blogs]);//передаем во вью
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
