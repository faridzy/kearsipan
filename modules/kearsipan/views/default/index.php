<?php
use yii\helpers\Html;
$this->title = Yii::t('user', 'Kearsipan');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="kearsipan-default-index">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-4 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><sub>Abjad</sub></h3>
                        <p>Pencarian berdasarkan huruf</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-sort-alpha-asc"></i>
                    </div>
                    <?= Html::a('More Info '.Html::tag('i','',['class'=>'fa fa-arror-circle-right']),['/kearsipan/arsip?kode=abjad'],['class'=>'small-box-footer']) ?>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <div class="small-box bg-orange">
                    <div class="inner">
                        <h3><sub>Wilayah</sub></h3>
                        <p>Pencarian berdasarkan wilayah</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <?= Html::a(
                            'More Info '.Html::tag('i','',['class'=>'fa fa-arrow-circle-right']),
                            ['/kearsipan/arsip?kode=wilayah'],
                            ['class'=>'small-box-footer']
                    ); ?>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <div class="small-box bg-teal">
                    <div class="inner">
                        <h3><sub>Nomor</sub></h3>
                        <p>Pencarian dengan Nomor Arsip</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-sort-numeric-asc"></i>
                    </div>
                    <?= Html::a(
                            'More Info '.Html::tag('i','',['class'=>'fa fa-arrow-circle-right']),
                            ['/kearsipan/arsip?kode=nomor'],
                            ['class'=>'small-box-footer']
                    ); ?>
                </div>
            </div>
            <div class="col-sm-4 col-sm-offset-2 col-xs-6">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3><sub>Kategori</sub></h3>
                        <p>Pencarian dengan Kategori Arsip</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-folder-open"></i>
                    </div>
                    <?= Html::a(
                            'More Info '.Html::tag('i','',['class'=>'fa fa-arrow-circle-right']),
                            ['/kearsipan/arsip?kode=kategori'],
                            ['class'=>'small-box-footer']
                    ); ?>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><sub>Tanggal</sub></h3>
                        <p>Pencarian dengan Tanggal Arsip</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <?= Html::a(
                            'More Info '.Html::tag('i','',['class'=>'fa fa-arrow-circle-right']),
                            ['/kearsipan/arsip?kode=tanggal'],
                            ['class'=>'small-box-footer']
                    ); ?>
                </div>
            </div>
        </div><!-- /.row -->
    </section><!-- /.content -->
</div>
