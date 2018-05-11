<?php

namespace lukos\openbadge\models;

/**
 * Represents an OpenBadge issuer profile
 * 
 * @property string $id
 * @property string $type
 * @property string $name
 * @property string $url
 * @property string $telephone
 * @property string $description
 * @property string $image
 * @property string $email
 * @property string $publicKey
 * @property object $verification
 * @property string $revocationList
 */
class IssuerProfile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'issuer_profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id','type','name','url','email'],'required'],
            [['type','name','telephone','description','image','email','publicKey','verification'], 'string'],
            [['id','url','revocationList'], 'url'],
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