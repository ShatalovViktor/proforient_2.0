<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "schools".
 *
 * @property integer $id
 * @property integer $id_user
 * @property integer $id_city
 */
class Schools extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schools';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'id_city'], 'required'],
            [['id_user', 'id_city'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_city' => 'Id City',
        ];
    }
}
