<?php
use yii\helpers\Html;
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <?php if (!Yii::$app->user->isGuest): ?>
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?= Yii::$app->user->identity->profile->getImageUrl() ?>" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p><?= Yii::$app->user->identity->profile->name ?></p>

                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
        <?php endif ?>
        <div class="user-panel">
            <div class="row">
                <div class="col-xs-6">
                   <?= Html::img('@web/images/logo_unesa.png',['class'=>'img-responsive','alt'=>'Logo Unesa']) ?> 
                </div>
                <div class="col-xs-6">
                    <?= Html::img('@web/images/logo_smkn1_jombang.png',['class'=>'img-responsive','alt'=>'Logo SMKN 1 Jombang']) ?>
                </div>
            </div>
        </div>
        <?=
        dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Menu Kearsipan', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard', 'url' => ['/kearsipan/default/index']],
                        ['label' => 'Tables','visible' => false, 'icon' => 'fa fa-archive', 'url' => ['/kearsipan/default/arsip']],
                        [
                            'label' => 'Kearsipan',
                            'icon' => 'fa fa-flag',
                            'visible' => !Yii::$app->user->isGuest,
                            'url' => '#',
                            'items' => [
                                ['label'=>'Kategori Setting','icon'=>'fa fa-gear','url'=>['/kearsipan/kategori']],
                                ['label'=>'Arsip Surat','icon'=>'fa fa-gear','url'=>['/kearsipan/surat']],
                            ]
                        ],
                        [
                            'label' => 'System',
                            'icon' => 'fa fa-flag',
                            'visible' => (!Yii::$app->user->isGuest && Yii::$app->user->can('admin')),
                            'url' => '#',
                            'items' => [
                                ['label'=>'Site Setting','icon'=>'fa fa-gear','url'=>['/kearsipan/site/settings']],
                                ['label'=>'User Admin','icon'=>'fa fa-gear','url'=>['/user/admin']],
                            ]
                        ],
                        ['label' => 'Gii', 'visible' => false, 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                        ['label' => 'Debug', 'visible' => false, 'icon' => 'fa fa-dashboard', 'url' => ['/debug']]
                        
                    ],
                ]
        )
        ?>

    </section>

</aside>
