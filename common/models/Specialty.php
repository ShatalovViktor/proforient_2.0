<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "specialty".
 *
 * @property integer $id
 * @property integer $id_direction
 * @property string $title
 */
class Specialty extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'specialty';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_direction', 'title'], 'required'],
            [['id_direction'], 'integer'],
            [['title'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_direction' => 'Id Direction',
            'title' => 'Title',
        ];
    }
}
