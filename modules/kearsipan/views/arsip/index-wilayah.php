<?php
use yii\helpers\Html;
$this->title = Yii::t('user', 'Arsip Wilayah');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="kearsipan-default-index">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs pull-right">
                        <li><?= Html::a('Pencarian',['/kearsipan/arsip/wilayah']) ?></li>
                        <li><a href="#tab_wilayahSoal" data-toggle="tab">Soal Latihan</a></li>
                        <li><a href="#tab_wilayahUntungRugi" data-toggle="tab">Keuntungan & Kerugian</a></li>
                        <li class="active"><a href="#tab_wilayahPengertian" data-toggle="tab">Pengertian</a></li>
                        <li class="pull-left header"><i class="fa fa-th"></i> Arsip Wilayah</li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_wilayahPengertian">
                            <?= Yii::$app->settings->get('Site.wilayahPengertian') ?>
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_wilayahUntungRugi">
                            <?= Yii::$app->settings->get('Site.wilayahUntungRugi') ?>
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_wilayahSoal">
                            <?= Yii::$app->settings->get('Site.wilayahSoal') ?>
                        </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->
                </div>
            </div>
        </div><!-- /.row -->
    </section><!-- /.content -->
</div>
