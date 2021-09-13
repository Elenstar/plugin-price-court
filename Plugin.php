<?php namespace ElenStar\Offers;

use Backend;
use System\Classes\PluginBase;

/**
 * Offers Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Offers',
            'description' => 'Цены на корты',
            'author'      => 'ElenStar',
            'icon'        => 'icon-credit-card'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'ElenStar\Offers\Components\Price' => 'price',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'elenstar.offers.some_permission' => [
                'tab' => 'Offers',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'offers' => [
                'label'       => 'Цены на корты',
                'url'         => Backend::url('elenstar/offers/prices/update/1'),
                'icon'        => 'icon-credit-card',
                'permissions' => ['elenstar.offers.*'],
                'order'       => 500,
            ],
        ];
    }
}
