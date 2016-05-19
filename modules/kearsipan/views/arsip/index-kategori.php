<?php
use yii\helpers\Html;
$this->title = Yii::t('user', 'Arsip Kategori');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="kearsipan-default-index">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs pull-right">
                        <li><?= Html::a('Pencarian',['/kearsipan/arsip/kategori']) ?></li>
                        <li><a href="#tab_kategoriSoal" data-toggle="tab">Soal Latihan</a></li>
                        <li><a href="#tab_kategoriUntungRugi" data-toggle="tab">Keuntungan & Kerugian</a></li>
                        <li class="active"><a href="#tab_kategoriPengertian" data-toggle="tab">Pengertian</a></li>
                        <li class="pull-left header"><i class="fa fa-th"></i> Arsip Kategori</li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_kategoriPengertian">
                            <?= Yii::$app->settings->get('Site.kategoriPengertian') ?>
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_kategoriUntungRugi">
                            <?= Yii::$app->settings->get('Site.kategoriUntungRugi') ?>
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_kategoriSoal">
                            <?= Yii::$app->settings->get('Site.kategoriSoal') ?>
                        </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->
                </div>
            </div>
        </div><!-- /.row -->
    </section><!-- /.content -->
</div>
