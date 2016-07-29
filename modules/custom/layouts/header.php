<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">SMK</span><span class="logo-lg">' .Yii::$app->settings->get('Site.siteName') . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <!-- User Account: style can be found in dropdown.less -->
                <?php if (Yii::$app->user->isGuest): ?>
                <li><?= Html::a(Html::tag('i','',['class'=>'fa fa-users']).Html::tag('span',' Login'),['/user/security/login']); ?></li>
                <?php else: ?>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?= Yii::$app->user->identity->profile->getImageUrl() ?>" class="user-image" alt="User Image"/>
                            <span class="hidden-xs"><?= Yii::$app->user->identity->profile->name ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?= Yii::$app->user->identity->profile->getImageUrl() ?>" class="img-circle"
                                     alt="User Image"/>

                                <p>
                                    <?= Yii::$app->user->identity->profile->name ?>
                                    <small>Birthday <?= date('d M Y',  strtotime(Yii::$app->user->identity->profile->birthday)) ?></small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <?= Html::a('Profile',['/user/settings/profile'],['class'=>'btn btn-default btn-flat']) ?>
                                </div>
                                <div class="pull-right">
                                    <?= Html::a(
                                        'Sign out',
                                        ['/site/logout'],
                                        ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                    ) ?>
                                </div>
                            </li>
                        </ul>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </nav>
</header>
