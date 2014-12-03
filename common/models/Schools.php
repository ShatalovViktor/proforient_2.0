<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "schools".
 *
 * @property integer $id
 * @property integer $id_user
 * @property integer $id_city
 * @property string $title
 * @property string $short_title
 * @property string $first_name_director
 * @property string $last_name_director
 * @property string $father_name_director
 * @property string $telephone
 * @property string $email
 * @property string $site
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
            [['id_user', 'id_city', 'title', 'short_title', 'first_name_director', 'last_name_director', 'father_name_director', 'telephone', 'email', 'site'], 'required'],
            [['id_user', 'id_city'], 'integer'],
            [['title'], 'string'],
            [['short_title'], 'string', 'max' => 12],
            [['first_name_director', 'last_name_director', 'father_name_director'], 'string', 'max' => 155],
            [['telephone'], 'string', 'max' => 20],
            [['email', 'site'], 'string', 'max' => 30]
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
            'title' => 'Title',
            'short_title' => 'Short Title',
            'first_name_director' => 'First Name Director',
            'last_name_director' => 'Last Name Director',
            'father_name_director' => 'Father Name Director',
            'telephone' => 'Telephone',
            'email' => 'Email',
            'site' => 'Site',
        ];
    }
}
