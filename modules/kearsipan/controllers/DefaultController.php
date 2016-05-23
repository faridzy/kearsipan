<?php

namespace app\modules\kearsipan\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\AccessRule;

/**
 * Default controller for the `kearsipan` module
 */
class DefaultController extends Controller {

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
                        'roles' => ['admin','siswa'],
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

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        return $this->render('index');
    }

    public function actionHome() {
        return $this->render('home');
    }

    public function actionPeraturanIndex() {
        return $this->render('peraturan-index');
    }

    public function actionTujuanPembelajaran() {
        return $this->render('tujuan-pembelajaran');
    }

    public function actionPetunjukPenggunaan() {
        return $this->render('petunjuk-penggunaan');
    }

    public function actionKuis() {
        return $this->render('kuis');
    }

    public function actionProfile() {
        return $this->render('profile');
    }

}
