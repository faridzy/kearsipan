<?php

namespace app\modules\kearsipan\models;

use Yii;
use app\models\Kategori;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "surat".
 *
 * @property integer $id
 * @property string $nama
 * @property string $nomor
 * @property string $tanggal
 * @property integer $kategori_id
 * @property integer $kelurahan_id
 * @property integer $image_id
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Kategori $kategori
 */
class Surat extends \yii\db\ActiveRecord
{
    public $image;
    public $title;
    public $start;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'surat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tanggal','image_id'], 'safe'],
            [['kategori_id', 'kelurahan_id'], 'required'],
            [['kategori_id', 'kelurahan_id', 'image_id'], 'integer'],
            [['nama'], 'string', 'max' => 64],
            [['nomor'], 'string', 'max' => 255],
            [['kategori_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::className(), 'targetAttribute' => ['kategori_id' => 'id']],
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new Expression('NOW()'),
            ],
            [
                'class' => 'mdm\upload\UploadBehavior',
                'attribute' => 'image', // required, use to receive input file
                'savedAttribute' => 'image_id', // optional, use to link model with saved file.
                'uploadPath' => '@webroot/images/upload', // saved directory. default to '@runtime/upload'
                'autoSave' => true, // when true then uploaded file will be save before ActiveRecord::save()
                'autoDelete' => true, // when true then uploaded file will deleted before ActiveRecord::delete()
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'nomor' => 'Nomor',
            'tanggal' => 'Tanggal',
            'kategori_id' => 'Kategori ID',
            'kelurahan_id' => 'Kelurahan ID',
            'image_id' => 'Image ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(Kategori::className(), ['id' => 'kategori_id']);
    }
}
