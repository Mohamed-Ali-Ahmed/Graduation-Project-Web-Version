<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staffcancelbook".
 *
 * @property integer $id
 */
class Staffcancelbook extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'staffcancelbook';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
        ];
    }
}
