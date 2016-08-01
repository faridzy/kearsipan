<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use mdm\upload\FileModel;

/* @var $this yii\web\View */
/* @var $model app\models\Surat */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Surats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$img = FileModel::findOne($model->image_id);
if ($img) {
    $temp = pathinfo($img->filename);
    $dir = substr($temp['basename'], 0, 2);
    $url = Yii::getAlias('@web/images/upload/'.$dir.'/').$temp['basename'];
} else {
    $url = '';
}
?>
<div class="surat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
            'nomor',
            'tanggal',
            [
                'label' => 'Kategori',
                'value' => $model->kategori->name
            ],
            'kelurahan_id',
            [
                'label' => 'Dokumen PDF',
                'format' => 'raw',
                // 'value' => Html::img(['/file','id'=>$model->image_id],['class'=>'img-responsive'])
                'value' => Html::a('Show Dokument',$url,['class'=>'img-responsive','target'=>'_blank'])
            ],
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
<img src="" alt="">
