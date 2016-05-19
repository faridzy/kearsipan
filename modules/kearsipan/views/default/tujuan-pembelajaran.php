<?php
use yii\helpers\Html;
$this->title = Yii::t('user', 'Tujuan Pembelajaran');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="kearsipan-default-index">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs pull-right">
                        <li><a href="#tab_1" data-toggle="tab">Indikator</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Kompetensi Dasar (KD)</a></li>
                        <li class="active"><a href="#tab_3" data-toggle="tab">Kompetensi Inti (KI)</a></li>
                        <li class="pull-left header"><i class="fa fa-th"></i> Tujuan Pembelajaran</li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_3">
                            <?= Yii::$app->settings->get('Site.tujuanPembelajaranInti') ?>
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <?= Yii::$app->settings->get('Site.tujuanPembelajaranDasar') ?>
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_1">
                            <?= Yii::$app->settings->get('Site.tujuanPembelajaranIndikator') ?>
                        </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->
                </div>
            </div>
        </div><!-- /.row -->
    </section><!-- /.content -->
</div>
