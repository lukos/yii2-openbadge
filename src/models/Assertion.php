<?php

namespace lukos\openbadge\models;

/**
 * Represents the assertion that a certain person has received a certain badge
 * 
 * @property string $id
 * @property string $type
 * @property lukos\openbadge\models\Identity $recipient
 * @property string $badge
 * @property lukos\openbadge\models\Verification $verification
 * @property string $evidence
 * @property string $narrative
 * @property string $revocationReason
 * @property string $image
 * @property integer $expires
 * @property integer $issuedOn
 * @property boolean $revoked
 */
class Assertion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'assertion';
    }
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id','type','recipient','badge','verification','issuedOn'],'required'],
            [['id','type','recipient','badge','verification','evidence','narrative','revocationReason','image'], 'string'],
            [['issuedOn','expires'], 'integer', 'min'=>1500000000, 'max' => 2500000000],
            [['revoked'], 'boolean'],
            ['type', 'default', 'value'=>'Assertion'],
            ['revoked', 'default', 'value'=>false],
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