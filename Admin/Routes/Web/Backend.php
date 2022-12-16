<?php
/**
 * Karaka
 *
 * PHP Version 8.1
 *
 * @package   Modules
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://jingga.app
 */
declare(strict_types=1);

use Modules\Database\Controller\BackendController;
use Modules\Database\Models\PermissionCategory;
use phpOMS\Account\PermissionType;
use phpOMS\Router\RouteVerb;

return [
    '^.*/database/list.*$' => [
        [
            'dest'       => '\Modules\Database\Controller\BackendController:viewDatabaseList',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionCategory::DATABASE,
            ],
        ],
    ],
    '^.*/database/create.*$' => [
        [
            'dest'       => '\Modules\Database\Controller\BackendController:viewDatabaseCreate',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::NAME,
                'type'   => PermissionType::CREATE,
                'state'  => PermissionCategory::DATABASE,
            ],
        ],
    ],
    '^.*/database/result.*$' => [
        [
            'dest'       => '\Modules\Database\Controller\BackendController:viewDatabaseResult',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionCategory::DATABASE,
            ],
        ],
    ],
    '^.*/database/template.*$' => [
        [
            'dest'       => '\Modules\Database\Controller\BackendController:viewDatabaseTemplate',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionCategory::TEMPLATE,
            ],
        ],
    ],
];
