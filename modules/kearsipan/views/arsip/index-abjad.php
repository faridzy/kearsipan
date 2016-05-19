<?php
use yii\helpers\Html;
$this->title = Yii::t('user', 'Arsip Abjad');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="kearsipan-default-index">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs pull-right">
                        <li><?= Html::a('Pencarian',['/kearsipan/arsip/abjad']) ?></li>
                        <li><a href="#tab_abjadSoal" data-toggle="tab">Soal Latihan</a></li>
                        <li><a href="#tab_abjadUntungRugi" data-toggle="tab">Keuntungan & Kerugian</a></li>
                        <li class="active"><a href="#tab_abjadPengertian" data-toggle="tab">Pengertian</a></li>
                        <li class="pull-left header"><i class="fa fa-th"></i> Arsip Abjad</li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_abjadPengertian">
                            <?= Yii::$app->settings->get('Site.abjadPengertian') ?>
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_abjadUntungRugi">
                            <?= Yii::$app->settings->get('Site.abjadUntungRugi') ?>
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_abjadSoal">
                            <?= Yii::$app->settings->get('Site.abjadSoal') ?>
                        </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->
                </div>
            </div>
        </div><!-- /.row -->
    </section><!-- /.content -->
</div>
