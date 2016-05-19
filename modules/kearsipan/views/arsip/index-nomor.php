<?php
use yii\helpers\Html;
$this->title = Yii::t('user', 'Arsip Nomor');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="kearsipan-default-index">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs pull-right">
                        <li><?= Html::a('Pencarian',['/kearsipan/arsip/nomor']) ?></li>
                        <li><a href="#tab_nomorSoal" data-toggle="tab">Soal Latihan</a></li>
                        <li><a href="#tab_nomorUntungRugi" data-toggle="tab">Keuntungan & Kerugian</a></li>
                        <li class="active"><a href="#tab_nomorPengertian" data-toggle="tab">Pengertian</a></li>
                        <li class="pull-left header"><i class="fa fa-th"></i> Arsip Nomor</li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_nomorPengertian">
                            <?= Yii::$app->settings->get('Site.nomorPengertian') ?>
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_nomorUntungRugi">
                            <?= Yii::$app->settings->get('Site.nomorUntungRugi') ?>
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_nomorSoal">
                            <?= Yii::$app->settings->get('Site.nomorSoal') ?>
                        </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->
                </div>
            </div>
        </div><!-- /.row -->
    </section><!-- /.content -->
</div>
