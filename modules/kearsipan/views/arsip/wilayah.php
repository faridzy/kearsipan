<?php
use yii\helpers\Html;
$this->title = Yii::t('user', 'Pencarian Wilayah');
if ($daerah!='Provinsi') {
	$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['/kearsipan/arsip/wilayah']];
	$this->params['breadcrumbs'][] = $daerah;
} else {
	$this->params['breadcrumbs'][] = $this->title;
}
?>
<div class="row">
	<div class="col-xs-12"><h4 class="text-center"><?= $daerah ?></h4></div>
	<?php foreach ($wilayah as $wil): ?>
		<div class="col-md-3 col-sm-4 col-xs-6 text-center">
		<?= Html::a((Html::tag('i','',['class'=>'fa fa-globe'])).$wil['nama'],['/kearsipan/arsip/wilayah','id'=>$wil['id']],['class'=>'btn btn-app btn-block']) ?>
		</div>
	<?php endforeach ?>
</div>