<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "faculties".
 *
 * @property integer $id
 * @property integer $id_institute
 * @property string $title
 */
class Faculties extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faculties';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_institute', 'title'], 'required'],
            [['id_institute'], 'integer'],
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
            'id_institute' => 'Id Institute',
            'title' => 'Title',
        ];
    }
}
