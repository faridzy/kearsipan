<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
$this->title = Yii::t('app', 'Settings Site');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
		    <div class="panel-body">
		        <div class="alert alert-info">
		            <?= Yii::t('app', 'General Setting Website') ?>.
		            <?= Yii::t('app', 'Hati-hati dalam perubahan setting di sini.') ?>.
		        </div>
		        <?php $form = ActiveForm::begin(['id' => 'site-settings-form']); ?>
				
		        <?= $form->field($model, 'siteName') ?>
				<?= $form->field($model, 'siteDescription') ?>
				<hr>

				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs pull-right">
						<li><a href="#tab_kuisUmum" data-toggle="tab">Kuis Umum</a></li>
						<li><a href="#tab_petunjukPenggunaan" data-toggle="tab">Petunjuk Penggunaan Media</a></li>
						<li><a href="#tab_peraturanIndek" data-toggle="tab">Peraturan Indek</a></li>
						<li><a href="#tab_profilPembuat" data-toggle="tab">Profil Pembuat</a></li>
						<li class="active"><a href="#tab_tujuanPembelajaran" data-toggle="tab">Tujuan Pembelajaran</a></li>
						<li class="pull-left header"><i class="fa fa-th"></i> Data Umum</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane" id="tab_profilPembuat">
							<?= $form->field($model, 'profilPembuat')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						</div><!-- /.tab-pane -->
						<div class="tab-pane" id="tab_peraturanIndek">
							<?= $form->field($model, 'peraturanIndekTujuan')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						    <?= $form->field($model, 'peraturanIndekPengertian')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						    <?= $form->field($model, 'peraturanIndekMateri')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						</div><!-- /.tab-pane -->
						<div class="tab-pane active" id="tab_tujuanPembelajaran">
							<?= $form->field($model, 'tujuanPembelajaranInti')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						    <?= $form->field($model, 'tujuanPembelajaranDasar')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						    <?= $form->field($model, 'tujuanPembelajaranIndikator')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						</div><!-- /.tab-pane -->
						<div class="tab-pane" id="tab_petunjukPenggunaan">
							<?= $form->field($model, 'petunjukPenggunaan')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						</div><!-- /.tab-pane -->
						<div class="tab-pane" id="tab_kuisUmum">
							<?= $form->field($model, 'kuisUmum')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						</div><!-- /.tab-pane -->
					</div><!-- /.tab-content -->
				</div>

				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs pull-right">
						<li><a href="#tab_abjadSoal" data-toggle="tab">Soal Latihan</a></li>
						<li><a href="#tab_abjadUntungRugi" data-toggle="tab">Keuntungan & Kerugian</a></li>
						<li class="active"><a href="#tab_abjadPengertian" data-toggle="tab">Pengertian</a></li>
						<li class="pull-left header"><i class="fa fa-th"></i> Data Abjad</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_abjadPengertian">
							<?= $form->field($model, 'abjadPengertian')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						</div><!-- /.tab-pane -->
						<div class="tab-pane" id="tab_abjadUntungRugi">
							<?= $form->field($model, 'abjadUntungRugi')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						</div><!-- /.tab-pane -->
						<div class="tab-pane" id="tab_abjadSoal">
							<?= $form->field($model, 'abjadSoal')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						</div><!-- /.tab-pane -->
					</div><!-- /.tab-content -->
				</div>

				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs pull-right">
						<li><a href="#tab_wilayahSoal" data-toggle="tab">Soal Latihan</a></li>
						<li><a href="#tab_wilayahUntungRugi" data-toggle="tab">Keuntungan & Kerugian</a></li>
						<li class="active"><a href="#tab_wilayahPengertian" data-toggle="tab">Pengertian</a></li>
						<li class="pull-left header"><i class="fa fa-th"></i> Data Wilayah</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_wilayahPengertian">
							<?= $form->field($model, 'wilayahPengertian')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						</div><!-- /.tab-pane -->
						<div class="tab-pane" id="tab_wilayahUntungRugi">
							<?= $form->field($model, 'wilayahUntungRugi')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						</div><!-- /.tab-pane -->
						<div class="tab-pane" id="tab_wilayahSoal">
							<?= $form->field($model, 'wilayahSoal')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						</div><!-- /.tab-pane -->
					</div><!-- /.tab-content -->
				</div>

				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs pull-right">
						<li><a href="#tab_nomorSoal" data-toggle="tab">Soal Latihan</a></li>
						<li><a href="#tab_nomorUntungRugi" data-toggle="tab">Keuntungan & Kerugian</a></li>
						<li class="active"><a href="#tab_nomorPengertian" data-toggle="tab">Pengertian</a></li>
						<li class="pull-left header"><i class="fa fa-th"></i> Data Nomor</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_nomorPengertian">
							<?= $form->field($model, 'nomorPengertian')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						</div><!-- /.tab-pane -->
						<div class="tab-pane" id="tab_nomorUntungRugi">
							<?= $form->field($model, 'nomorUntungRugi')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						</div><!-- /.tab-pane -->
						<div class="tab-pane" id="tab_nomorSoal">
							<?= $form->field($model, 'nomorSoal')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						</div><!-- /.tab-pane -->
					</div><!-- /.tab-content -->
				</div>

				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs pull-right">
						<li><a href="#tab_kategoriSoal" data-toggle="tab">Soal Latihan</a></li>
						<li><a href="#tab_kategoriUntungRugi" data-toggle="tab">Keuntungan & Kerugian</a></li>
						<li class="active"><a href="#tab_kategoriPengertian" data-toggle="tab">Pengertian</a></li>
						<li class="pull-left header"><i class="fa fa-th"></i> Data Kategori</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_kategoriPengertian">
							<?= $form->field($model, 'kategoriPengertian')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						</div><!-- /.tab-pane -->
						<div class="tab-pane" id="tab_kategoriUntungRugi">
							<?= $form->field($model, 'kategoriUntungRugi')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						</div><!-- /.tab-pane -->
						<div class="tab-pane" id="tab_kategoriSoal">
							<?= $form->field($model, 'kategoriSoal')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						</div><!-- /.tab-pane -->
					</div><!-- /.tab-content -->
				</div>

				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs pull-right">
						<li><a href="#tab_tanggalSoal" data-toggle="tab">Soal Latihan</a></li>
						<li><a href="#tab_tanggalUntungRugi" data-toggle="tab">Keuntungan & Kerugian</a></li>
						<li class="active"><a href="#tab_tanggalPengertian" data-toggle="tab">Pengertian</a></li>
						<li class="pull-left header"><i class="fa fa-th"></i> Data Tanggal</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_tanggalPengertian">
							<?= $form->field($model, 'tanggalPengertian')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						</div><!-- /.tab-pane -->
						<div class="tab-pane" id="tab_tanggalUntungRugi">
							<?= $form->field($model, 'tanggalUntungRugi')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						</div><!-- /.tab-pane -->
						<div class="tab-pane" id="tab_tanggalSoal">
							<?= $form->field($model, 'tanggalSoal')->widget(CKEditor::className(), [
						        'options' => ['rows' => 6],
						        'preset' => 'basic'
						    ]) ?>
						</div><!-- /.tab-pane -->
					</div><!-- /.tab-content -->
				</div>

		        <div class="form-group">
		            <div class="col-lg-offset-3 col-lg-9 no-padding">
		                <?= Html::submitButton(Yii::t('user', 'Save'), ['class' => 'btn btn-block btn-success']) ?>
		            </div>
		        </div>

		        <?php ActiveForm::end(); ?>
		    </div>
		</div>
	</div>
</div>

