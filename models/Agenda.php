<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agenda".
 *
 * @property integer $agendaID
 * @property string $owner
 * @property string $lastUpdate
 *
 * @property Staff $owner0
 * @property Day[] $days
 * @property Slot[] $slots
 */
class Agenda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agenda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['owner', 'lastUpdate'], 'required'],
            [['owner', 'lastUpdate'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'agendaID' => 'Agenda ID',
            'owner' => 'Owner',
            'lastUpdate' => 'Last Update',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOwner0()
    {
        return $this->hasOne(Staff::className(), ['formalemail' => 'owner']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDays()
    {
        return $this->hasMany(Day::className(), ['agendaID' => 'agendaID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSlots()
    {
        return $this->hasMany(Slot::className(), ['agendaID' => 'agendaID']);
    }
}
