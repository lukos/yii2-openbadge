<?php

namespace lukos\openbadge\models;

/**
 * Represents the verification mechanism for an assertion
 * 
 * @property string $type
 * @property string $verificationProperty
 * @property string $startsWith
 * @property string $allowedOrigins
 */
class Verification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'verification';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type','verificationProperty','startsWith','allowedOrigins'],'required'],
            [['type','verificationProperty','startsWith','allowedOrigins'], 'string'],
            ['verificationProperty', 'default', 'value' => 'id'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            // TODO
        ];
    }
}