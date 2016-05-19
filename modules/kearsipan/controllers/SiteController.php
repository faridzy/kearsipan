<?php
namespace app\modules\kearsipan\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\AccessRule;

class SiteController extends Controller
{
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

        public function actions(){
           return [
                //....
                    'settings' => [
                        'class' => 'pheme\settings\SettingsAction',
                        'modelClass' => 'app\models\Site',
                        //'scenario' => 'site', // Change if you want to re-use the model for multiple setting form.
                        'viewName' => 'settings'   // The form we need to render
                    ],
                //....
            ];
        }
}
