<?php

namespace lukos\openbadge;

/**
 * Base module for the open badge functionality
 */
class Module extends \yii\base\Module
{
    public $controllerNamespace = 'lukos\openbadge\controllers';
    public $baseUrl;
    public $route = '/openbadge/<action>';
    public $pattern = '/openbadge/<action:[\w\-]+>';
    
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
            [
                'class' => 'yii\web\UrlRule',
                'route' => $this->route,
                'pattern' => $this->pattern,
            ]
        ], false);
    }
}