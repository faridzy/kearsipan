<?php
use kartik\tree\TreeView;
use app\models\Kategori;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = Yii::t('app', 'Settings Kategori');
$this->params['breadcrumbs'][] = $this->title;
 
echo TreeView::widget([
    // single query fetch to render the tree
    // use the Kategori model you have in the previous step
    'query' => Kategori::find()->addOrderBy('root, lft'), 
    'headingOptions' => ['label' => 'Categories'],
    'fontAwesome' => false,     // optional
    'isAdmin' => false,         // optional (toggle to enable admin mode)
    'displayValue' => 1,        // initial display value
    'softDelete' => true,       // defaults to true
    'cacheSettings' => [        
        'enableCache' => true   // defaults to true
    ]
]);
