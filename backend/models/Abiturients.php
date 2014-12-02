<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "abiturients".
 *
 * @property integer $id
 * @property integer $id_data
 */
class Abiturients extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'abiturients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_data'], 'required'],
            [['id_data'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_data' => 'Id Data',
        ];
    }
}
