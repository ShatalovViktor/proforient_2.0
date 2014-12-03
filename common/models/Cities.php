<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cities".
 *
 * @property integer $id
 * @property integer $id_region
 * @property string $title
 */
class Cities extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_region', 'title'], 'required'],
            [['id_region'], 'integer'],
            [['title'], 'string', 'max' => 155]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_region' => 'Id Region',
            'title' => 'Title',
        ];
    }
}
