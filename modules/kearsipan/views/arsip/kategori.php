<?php
use kartik\tree\TreeViewInput;
use app\models\Kategori;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = Yii::t('user', 'Pencarian Kategori');
$this->params['breadcrumbs'][] = $this->title;

$form = ActiveForm::begin([
    'method' => 'GET'
]);
echo TreeViewInput::widget([
    // single query fetch to render the tree
    // use the Kategori model you have in the previous step
    'query' => Kategori::find()->addOrderBy('root, lft'), 
    'headingOptions'=>['label'=>'Categories'],
    'name' => 'q', // input name
    'asDropdown' => false,   // will render the tree input widget as a dropdown.
    'multiple' => false,     // set to false if you do not need multiple selection
    'fontAwesome' => true,  // render font awesome icons
    'rootOptions' => [
        'label'=>'<i class="fa fa-tree"></i>',  // custom root label
        'class'=>'text-success'
    ], 
    //'options'=>['disabled' => true],
]); ?>
<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
