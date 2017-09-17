<?php
namespace frontend\controllers;

use common\models\Agents;
use common\models\Blog;
use common\models\ObjectType;
use common\models\Operation;
use Yii;
use yii\base\InvalidParamException;
use yii\data\ActiveDataProvider;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Agent;
use common\models\Object;
use lav45\translate\models\Lang;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;
use yii\data\Pagination;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
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
        $agents=Agent::find()->all();
        $types=ObjectType::find()->all();
        $objects=Object::find()->orderBy(['id'=>SORT_DESC])->limit(3)->all();
        $topobjects=Object::find()->andWhere(['top'=>1])->orderBy(['id'=>SORT_DESC])->all();
        $operations=Operation::find()->all();
//        return $this->render('index', ['blogs'=>$blogs]);//передаем во вью
        return $this->render('index', ['agents'=>$agents, 'objects'=>$objects, 'types'=>$types,  'operations'=>$operations, 'topobjects'=>$topobjects]);//передаем во вью

    }

    public function actionPropertydetail(){
        $newobjects=Object::find()->orderBy(['id'=>SORT_DESC])->limit(3)->all();
        $id=Yii::$app->request->get('id');
        $obj=Object::findOne($id);
        $agents=Agent::find()->all();
        if(empty($obj)) throw new HttpException(404, 'Такой страницы не существует');
        return $this->render('propertydetail', ['obj' => $obj,'newobjects'=>$newobjects, 'agents'=>$agents,]);
    }

public function actionBlog(){
        return $this->render('blog');
    }
    public function actionFaqs(){
        return $this->render('faqs');
    }
public function actionAddproperty(){
        return $this->render('addproperty');
    }

    public function actionAgentdetail($id){
        $newobjects=Object::find()->all();
        $agentobjects=Object::find()->andWhere(['agent_id'=>$id])->all();
        if($agent=Agent::find()->andWhere(['id'=>$id])->one()){
            return $this->render('agentdetail', ['agent'=>$agent,'newobjects'=>$newobjects, 'agentobjects'=>$agentobjects]);//передаем во вью
        }
        throw new NotFoundHttpException('такого агента не существует');
    }

    public function actionPropertylisting(){
        $types=ObjectType::find()->all();
        $operations=Operation::find()->all();
        $objects=Object::find();
        $newobjects=Object::find()->orderBy(['id'=>SORT_DESC])->limit(20)->all();
        $agents=Agent::find()->all();
        $countQuery = clone $objects;
        // подключаем класс Pagination, выводим по 10 пунктов на страницу
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 1]);
        // приводим параметры в ссылке к ЧПУ
        $pages->pageSizeParam = false;
        $pages->forcePageParam = false;
        $models = $objects->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('propertylisting', ['types'=>$types, 'operations'=>$operations, 'objects'=>$models, 'newobjects'=>$newobjects, 'agents'=>$agents,  'pages' => $pages, ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $login_model=new LoginForm();

        if(Yii::$app->request->post('LoginForm')){
            $login_model->attributes=Yii::$app->request->post('LoginForm');
            if ($login_model->validate()){

                $login_model->login();
                return $this->goHome();
            }

        }
        $signup_model = new SignupForm();

        if ($signup_model->load(Yii::$app->request->post())) {
            $signup_model->attributes=Yii::$app->request->post('SignupForm');

            if ($signup_model->validate()) {
                if ($user = $signup_model->signup()) {
                    if (Yii::$app->getUser()->login($user)) {
                        return $this->goHome();
                    }
                }

            }
        }
        return $this->render('loginin', ['login_model'=>$login_model, 'signup_model'=>$signup_model]);


//        if (!Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }
//
//        $model = new LoginForm();
//        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
//        } else {
//            return $this->render('login', [
//                'model' => $model,
//            ]);
//        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        $agents=Agent::find()->all();
        return $this->render('about', ['agents'=>$agents]);
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
