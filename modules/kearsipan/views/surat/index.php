<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat';
$this->params['breadcrumbs'][] = $this->title;
$grid = [
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'nama',
        'nomor',
        'tanggal',
        [
            'label' => 'Kategori',
            'value' => 'kategori.name'
        ],
        // 'kelurahan_id',
        // 'image_id',
        // 'created_at',
        // 'updated_at',

        ['class' => 'yii\grid\ActionColumn'],
    ],
];
?>
<div class="surat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Create Surat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget($grid); ?>
</div>
