<?php
use yii\helpers\Html;
$this->title = Yii::t('user', 'Petunjuk Penggunaan');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="kearsipan-default-index">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?= Yii::$app->settings->get('Site.petunjukPenggunaan') ?>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
    </section><!-- /.content -->
</div>
