<?php
namespace app\modules\kearsipan\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\AccessRule;
class KategoriController extends Controller {
    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'ruleConfig' => [
                    'class' => AccessRule::className(),
                ],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                ],
            ],
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'delete' => ['post'],
//                    'delete-multiple' => ['post'],
//                    'confirm' => ['post'],
//                    'block' => ['post'],
//                ],
//            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}