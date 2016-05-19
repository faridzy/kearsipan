<?php
use yii\helpers\Html;
$this->title = Yii::t('user', 'Peraturan Index');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="kearsipan-default-index">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs pull-right">
                        <li><a href="#tab_1" data-toggle="tab">Materi</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Pengertian</a></li>
                        <li class="active"><a href="#tab_3" data-toggle="tab">Tujuan Pembelajaran</a></li>
                        <li class="pull-left header"><i class="fa fa-th"></i> Peraturan Index</li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_3">
                            <?= Yii::$app->settings->get('Site.peraturanIndekTujuan') ?>
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <?= Yii::$app->settings->get('Site.peraturanIndekPengertian') ?>
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_1">
                            <?= Yii::$app->settings->get('Site.peraturanIndekMateri') ?>
                        </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->
                </div>
            </div>
        </div><!-- /.row -->
    </section><!-- /.content -->
</div>
