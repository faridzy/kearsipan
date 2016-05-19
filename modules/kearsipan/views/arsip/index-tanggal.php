<?php
use yii\helpers\Html;
$this->title = Yii::t('user', 'Arsip Tanggal');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="kearsipan-default-index">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs pull-right">
                        <li><?= Html::a('Pencarian',['/kearsipan/arsip/tanggal']) ?></li>
                        <li><a href="#tab_tanggalSoal" data-toggle="tab">Soal Latihan</a></li>
                        <li><a href="#tab_tanggalUntungRugi" data-toggle="tab">Keuntungan & Kerugian</a></li>
                        <li class="active"><a href="#tab_tanggalPengertian" data-toggle="tab">Pengertian</a></li>
                        <li class="pull-left header"><i class="fa fa-th"></i> Arsip Tanggal</li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_tanggalPengertian">
                            <?= Yii::$app->settings->get('Site.tanggalPengertian') ?>
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_tanggalUntungRugi">
                            <?= Yii::$app->settings->get('Site.tanggalUntungRugi') ?>
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_tanggalSoal">
                            <?= Yii::$app->settings->get('Site.tanggalSoal') ?>
                        </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->
                </div>
            </div>
        </div><!-- /.row -->
    </section><!-- /.content -->
</div>
