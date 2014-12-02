<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "data".
 *
 * @property integer $id
 * @property integer $id_school
 */
class Data extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_school'], 'required'],
            [['id_school'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_school' => 'Id School',
        ];
    }
}
