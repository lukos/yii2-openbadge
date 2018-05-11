<?php

namespace lukos\openbadge;

use yii\base\BootstrapInterface;
use yii\web\GroupUrlRule;

/**
 * Base module for the open badge functionality
 */
class Module extends \yii\base\Module implements BootstrapInterface
{
    public $controllerNamespace = 'lukos\openbadge\controllers';
    public $baseUrl;
    public $pattern = 'openbadge';
    
    public function init()
    {
        parent::init();
    }
    
    /**
     * Event handler for the app bootstrap stage
     * @param type $app
     */
    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules([
            new GroupUrlRule([
                'prefix' => $this->pattern,
                'rules' => [
                    '<action>' => 'openbadge/<action>'
                ],
            ])
        ], false);
    }
}