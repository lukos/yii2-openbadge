<?php

namespace lukos\openbadge\models;

/**
 * Represents the recipient of a badge
 * 
 * @property string $identity
 * @property string $type
 * @property boolean $hashed
 * @property string $salt
 */
class Identity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'identity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['identity','type','hashed','salt'],'required'],
            [['identity','type','salt'], 'string'],
            [['hashed'], 'boolean'],
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