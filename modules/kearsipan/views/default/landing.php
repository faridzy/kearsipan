<?php
use yii\helpers\Url;
use yii\helpers\Html;
$this->title = Yii::$app->name;
?>
<div class="login-box">
	<div class="login-logo">
	    <a href="#"><b><?= Yii::$app->name ?></b></a>
	</div>
	<div class="login-box-body">
		<h2 class="text-center">Selamat Datang</h2>
		<h4 class="text-center">Di website <?= Yii::$app->name ?></h4>
		<div class="row">
			<div class="col-sm-6">
				<?= Html::a('Login Guru',['/user/login'],['class'=>'btn btn-block btn-warning']) ?>
			</div>
			<div class="col-sm-6">
				<?= Html::a('Login Siswa',['/user/login'],['class'=>'btn btn-block btn-warning']) ?>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-12">
				<?= Html::a('Register',['/user/register'],['class'=>'btn btn-block btn-success']) ?>
			</div>
		</div>
	</div>
</div>
<?php
$this->registerCss('
	html {
		background: url('.Url::to('@web/images/paper_tray.jpg').') no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	.login-page {
		background: transparent;
	}
	.login-logo, .login-box-body {
		background: rgba(255,255,255,.6);
	}
');
