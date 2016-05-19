<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
$url = Url::to(['/kearsipan/surat','SuratSearch[id]'=>'']);
$this->title = Yii::t('user', 'Pencarian Tanggal');
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('@web/css/fullcalendar.min.css', ['depends' => [\dmstr\web\AdminLteAsset::className()]]);
$this->registerCssFile('@web/css/fullcalendar.print.css', ['depends' => [\dmstr\web\AdminLteAsset::className()],'media' => 'print']);
$this->registerJsFile('@web/js/moment.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/js/fullcalendar.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJs("
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month'
            },
            defaultDate: '".date('Y-m-d')."',
            editable: true,
            eventLimit: true,
            events: {
                url: '".Url::to(['/kearsipan/arsip/get-surat'])."',
                error: function() {
                }
            },
            eventClick: function(event) {
                if (event.id) {
                    window.location.href = '{$url}'+event.id;
                }
                return false;
            },
            loading: function(bool) {
            }
        });
    });
",View::POS_READY);
?>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div id='calendar'></div>
            </div>
        </div>
    </div>
</div>
