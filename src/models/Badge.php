<?php

namespace lukos\openbadge\models;

/**
 * Represents an individual OpenBadge that will be instanced multiple times for 
 * each person it is awarded to
 * 
 * @property string $id
 * @property string $type
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $criteria
 * @property string $issuer
 * @property array $alignment
 * @property array $tags
 */
class Badge extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'badge';
    }
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id','type','name','description','image','crtieria','issuer'],'required'],
            [['id','type','name','description','image','crtieria','issuer','alignment','tags'], 'string'],
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