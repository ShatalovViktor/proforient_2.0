<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "directions".
 *
 * @property integer $id
 * @property integer $id_department
 * @property string $code
 * @property string $title
 */
class Directions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'directions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_department', 'code', 'title'], 'required'],
            [['id_department'], 'integer'],
            [['title'], 'string'],
            [['code'], 'string', 'max' => 20],
            [['id_department'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_department' => 'Id Department',
            'code' => 'Code',
            'title' => 'Title',
        ];
    }
}
