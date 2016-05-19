<?php

namespace app\modules\kearsipan\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\AccessRule;
use yii\web\Response;
use \app\modules\kearsipan\models\Surat;

/**
 * Default controller for the `kearsipan` module
 */
class ArsipController extends Controller {

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
    public function actionIndex($kode=null) {
        switch ($kode) {
            case 'abjad':
                return $this->render('index-abjad',[compact($kode)]);
                break;
            
            case 'wilayah':
                return $this->render('index-wilayah',[compact($kode)]);
                break;

            case 'nomor':
                return $this->render('index-nomor',[compact($kode)]);
                break;

            case 'kategori':
                return $this->render('index-kategori',[compact($kode)]);
                break;

            case 'tanggal':
                return $this->render('index-tanggal',[compact($kode)]);
                break;

            default:
                return $this->redirect(['/kearsipan/default/index']);
                break;
        }
    }
    
    public function actionAbjad($q=null) {
        if (!empty($q)) {
            return $this->redirect(['/kearsipan/surat','SuratSearch[nama]'=>$q]);
        }
        return $this->render('abjad');
    }
    
    public function actionWilayah($id=null) {
        $connection = \Yii::$app->db;
        if (!empty($id)) {
            switch (strlen($id)) {
                case '2':
                    $daerah = 'Kabupaten';
                    $sql = 'SELECT id_kab AS id, nama FROM kabupaten WHERE id_prov = '.$id;
                    break;
                
                case '4':
                    $daerah = 'Kecamatan';
                    $sql = 'SELECT id_kec AS id, nama FROM kecamatan WHERE id_kab = '.$id;
                    break;

                case '6':
                    $daerah = 'Kelurahan';
                    $sql = 'SELECT id_kel AS id, nama FROM kelurahan WHERE id_kec = '.$id;
                    break;

                case '10':
                    return $this->redirect(['/kearsipan/surat','SuratSearch[kelurahan_id]'=>$id]);
                    break;

                default:
                    $daerah = 'Provinsi';
                    $sql = 'SELECT id_prov AS id, nama FROM provinsi WHERE 1 = 1';
                    break;
            }
            $sql = $sql.' ORDER BY nama ASC';
            $model = $connection->createCommand($sql);
        } else {
            $sql = 'SELECT id_prov AS id, nama FROM provinsi WHERE 1 = 1';
            $sql = $sql.' ORDER BY nama ASC';
            $daerah = 'Provinsi';
            $model = $connection->createCommand($sql);
        }
        $data = $model->queryAll();
        return $this->render('wilayah', ['wilayah' => $data,'daerah'=>$daerah]);
    }
    
    public function actionNomor($q=null) {
        if (!empty($q)) {
            return $this->redirect(['/kearsipan/surat','SuratSearch[id]'=>$q]);
        }
        return $this->render('nomor');
    }
    
    public function actionTanggal() {
        return $this->render('tanggal');
    }

    public function actionGetSurat($start=null,$end=null)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        if (!empty($start) && !empty($end)) {
            return Surat::find()->select(['title'=>'nama','start'=>'tanggal','id'])->where(['between','tanggal',$start,$end])->asArray()->all();
        }
        return [
            [
                "title" => "All Day Event",
                "start" => "2016-01-01"
            ]
        ];
    }

    public function actionGetNomor($q = null) {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $out = ['results' => ['id' => '', 'text' => '']];
        if (!is_null($q)) {
            $query = new \yii\db\Query;
            $query->select('id, nomor AS text')
                    ->from('surat')
                    ->where(['like', 'nomor', $q.'%',false])
                    ->limit(20);
            $command = $query->createCommand();
            $data = $command->queryAll();
            $out['results'] = array_values($data);
        }
        return $out;
    }
    
    public function actionKategori($q=null) {
        if (!empty($q)) {
            return $this->redirect(['/kearsipan/surat','SuratSearch[kategori_id]'=>$q]);
        }
        return $this->render('kategori');
    }

}
