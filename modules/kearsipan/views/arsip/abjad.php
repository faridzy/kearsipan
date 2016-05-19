<?php
use yii\helpers\Html;
$this->title = Yii::t('user', 'Pencarian Abjad');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
	<?php foreach (range('A', 'Z') as $abjad): ?>
		<div class="col-md-2 col-sm-3 col-xs-6 text-center">
			<?= Html::a(Html::tag('i','',['class'=>'fa fa-gg']).$abjad,['/kearsipan/arsip/abjad','q'=>$abjad],['class'=>'btn btn-app']) ?>
		</div>
	<?php endforeach ?>
</div>