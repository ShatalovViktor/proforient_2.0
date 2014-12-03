<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "abiturients".
 *
 * @property integer $id
 * @property integer $id_data
 * @property string $first_name
 * @property string $last_name
 * @property string $father_name
 * @property string $telephone
 * @property string $email
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
            [['id_data', 'first_name', 'last_name', 'father_name', 'telephone', 'email'], 'required'],
            [['id_data'], 'integer'],
            [['first_name', 'last_name', 'father_name', 'email'], 'string', 'max' => 100],
            [['telephone'], 'string', 'max' => 20]
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
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'father_name' => 'Father Name',
            'telephone' => 'Telephone',
            'email' => 'Email',
        ];
    }
}
