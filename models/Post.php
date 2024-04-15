<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

class Post extends ActiveRecord
{
    public static function tableName()
    {
        return 'post';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            [
                'class' =>  TimestampBehavior::class,
                'updatedAtAttribute' => false,
            ],
        ]);
    }
}