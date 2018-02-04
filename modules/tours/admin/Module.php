<?php

namespace app\modules\tours\admin;

/**
 * Tours Admin Module.
 *
 * File has been created with `module/create` command. 
 */
class Module extends \luya\admin\base\Module
{
    public $apis = [
        'api-tours-tour' => 'app\modules\tours\admin\apis\TourController',
    ];

    public function getMenu()
    {
        return (new \luya\admin\components\AdminMenuBuilder($this))
            ->node('Tours', 'beach_access')
            ->group('Group')
            ->itemApi('Tours', 'toursadmin/tour/index', 'card_travel', 'api-tours-tour');
    }

}