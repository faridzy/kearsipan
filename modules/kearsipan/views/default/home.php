<?php
use yii\helpers\Html;
$this->title = Yii::t('user', 'Home');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="kearsipan-default-index">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><sub>Pilih Sistem</sub></h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <?= Html::a('More Info '.Html::tag('i','',['class'=>'fa fa-arror-circle-right']),['/kearsipan/default/index'],['class'=>'small-box-footer']) ?>
                </div>
            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-4">
                <div class="small-box bg-orange">
                    <div class="inner">
                        <h3><sub>Kuis Umum</sub></h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-pencil-square-o"></i>
                    </div>
                    <?= Html::a(
                            'More Info '.Html::tag('i','',['class'=>'fa fa-arrow-circle-right']),
                            ['/kearsipan/default/kuis'],
                            ['class'=>'small-box-footer']
                    ); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box bg-teal">
                    <div class="inner">
                        <h3><sub>Profile Pembuat</sub></h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <?= Html::a(
                            'More Info '.Html::tag('i','',['class'=>'fa fa-arrow-circle-right']),
                            ['/kearsipan/default/profile'],
                            ['class'=>'small-box-footer']
                    ); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3><sub>Petunjuk Penggunaan</sub></h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-question"></i>
                    </div>
                    <?= Html::a(
                            'More Info '.Html::tag('i','',['class'=>'fa fa-arrow-circle-right']),
                            ['/kearsipan/default/petunjuk-penggunaan'],
                            ['class'=>'small-box-footer']
                    ); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><sub>Peraturan Index</sub></h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-sort-alpha-asc"></i>
                    </div>
                    <?= Html::a(
                            'More Info '.Html::tag('i','',['class'=>'fa fa-arrow-circle-right']),
                            ['/kearsipan/default/peraturan-index'],
                            ['class'=>'small-box-footer']
                    ); ?>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><sub>Tujuan Pembelajaran</sub></h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <?= Html::a('More Info '.Html::tag('i','',['class'=>'fa fa-arror-circle-right']),['/kearsipan/default/tujuan-pembelajaran'],['class'=>'small-box-footer']) ?>
                </div>
            </div>
        </div>
    </section><!-- /.content -->
</div>
<style>
    .content .btn {
        margin-top: 12px;
        height: 223px;
        border-radius: 50% 50%;
        padding-top: 100px;
    }
</style>
