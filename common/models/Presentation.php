<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "presentation".
 *
 * @property integer $id
 * @property string $access_code
 * @property integer $status
 * @property integer $created_at
 * @property integer $user_id
 */
class Presentation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'presentation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'user_id'], 'integer'],
            [['created_at', 'user_id'], 'required'],
            [['access_code'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'access_code' => 'Access Code',
            'status' => 'Status',
            'created_at' => 'Created At',
            'user_id' => 'User ID',
        ];
    }
}
