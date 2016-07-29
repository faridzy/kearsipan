<?php
namespace app\models;
 
use Yii;
 
class Kategori extends \kartik\tree\models\Tree
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategori';
    }    
    
    /**
     * Override isDisabled method if you need as shown in the  
     * example below. You can override similarly other methods
     * like isActive, isMovable etc.
     */
    public function isDisabled()
    {
        if (!Yii::$app->user->isGuest) {
            return false;
        }
        return parent::isDisabled();
    }
}
