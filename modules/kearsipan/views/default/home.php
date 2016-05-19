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
                <?= Html::a('Pilih Sistem',['/kearsipan/default/index'],['class'=>'btn btn-success btn-block']) ?>
            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-3">
                <?= Html::a('Kuis Umum',['/kearsipan/default/kuis'],['class'=>'btn btn-success btn-block']) ?>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <?= Html::a('Profile Pembuat',['/kearsipan/default/profile'],['class'=>'btn btn-success btn-block']) ?>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <?= Html::a('Petunjuk Penggunaan Media',['/kearsipan/default/petunjuk-penggunaan'],['class'=>'btn btn-success btn-block']) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-md-offset-2">
                <?= Html::a('Peraturan Index',['/kearsipan/default/peraturan-index'],['class'=>'btn btn-success btn-block']) ?>
            </div>
            <div class="col-md-3 col-md-offset-2">
                <?= Html::a('Tujuan Pembelajaran',['/kearsipan/default/tujuan-pembelajaran'],['class'=>'btn btn-success btn-block']) ?>
            </div>
        </div>
    </section><!-- /.content -->
</div>
<style>
    .btn {
        margin-top: 12px;
        height: 223px;
        border-radius: 50% 50%;
        padding-top: 100px;
    }
</style>
