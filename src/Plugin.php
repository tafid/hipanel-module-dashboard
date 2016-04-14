<?php

/*
 * Dashboard Plugin for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-module-dashboard
 * @package   hipanel-module-dashboard
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\modules\dashboard;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'menus' => [
            'hipanel\modules\dashboard\SidebarMenu',
        ],
        'modules' => [
            'dashboard' => [
                'class' => 'hipanel\modules\dashboard\Module',
            ],
        ],
    ];
}
