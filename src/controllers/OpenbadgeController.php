<?php

namespace lukos\openbadge\controllers;

use lukos\openbadge\models\Badge;
use lukos\openbadge\models\IssuerProfile;
use lukos\openbadge\models\Assertion;

class OpenbadgeController extends \yii\web\Controller
{
    public function actionImage()
    {
        return "Hello";
    }
    
    /**
     * Award a badge by creating a new assertion and populating it accordingly
     */
    protected function AwardBadge()
    {
        $assert = new Assertion();
        $assert->issuedOn = time();
        $assert->id = "";
        
        $assert->save();
    }
    
    // TODO add/edit badges including upload image - config for upload location
    
    /**
     * Attempt to find a badge from the database by its unique id
     * @param string $id Unique URI for this badge
     * @return Badge
     * @throws NotFoundHttpException
     */
    protected function findBadge($id)
    {
        if (($model = Badge::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    /**
     * Attempt to find an issuer profile with the given unique id
     * 
     * Most sites will only have 1 issuer profile, but a minimum of 1 is required.
     * @param string $id The profiles unique id
     * @return IssuerProfile
     * @throws NotFoundHttpException
     */
    protected function findIssuer($id)
    {
        if (($model = IssuerProfile::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
