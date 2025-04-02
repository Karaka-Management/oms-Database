<?php
/**
 * Jingga
 *
 * PHP Version 8.2
 *
 * @package   Modules\Database
 * @copyright Dennis Eichhorn
 * @license   OMS License 2.2
 * @version   1.0.0
 * @link      https://jingga.app
 */
declare(strict_types=1);

namespace Modules\Database\Controller;

use phpOMS\Contract\RenderableInterface;
use phpOMS\Message\RequestAbstract;
use phpOMS\Message\ResponseAbstract;
use phpOMS\Views\View;

/**
 * Database controller class.
 *
 * @package Modules\Database
 * @license OMS License 2.2
 * @link    https://jingga.app
 * @since   1.0.0
 * @codeCoverageIgnore
 */
final class BackendController extends Controller
{
    /**
     * Routing end-point for application behavior.
     *
     * @param RequestAbstract  $request  Request
     * @param ResponseAbstract $response Response
     * @param array            $data     Generic data
     *
     * @return RenderableInterface
     *
     * @since 1.0.0
     * @codeCoverageIgnore
     */
    public function viewDatabaseList(RequestAbstract $request, ResponseAbstract $response, array $data = []) : RenderableInterface
    {
        $view = new View($this->app->l11nManager, $request, $response);
        $view->setTemplate('/Modules/Database/Theme/Backend/database-list');
        $view->data['nav'] = $this->app->moduleManager->get('Navigation')->createNavigationMid(1005601001, $request, $response);

        return $view;
    }

    /**
     * Routing end-point for application behavior.
     *
     * @param RequestAbstract  $request  Request
     * @param ResponseAbstract $response Response
     * @param array            $data     Generic data
     *
     * @return RenderableInterface
     *
     * @since 1.0.0
     * @codeCoverageIgnore
     */
    public function viewDatabaseCreate(RequestAbstract $request, ResponseAbstract $response, array $data = []) : RenderableInterface
    {
        $view = new View($this->app->l11nManager, $request, $response);
        $view->setTemplate('/Modules/Database/Theme/Backend/database-generator');
        $view->data['nav'] = $this->app->moduleManager->get('Navigation')->createNavigationMid(1005601001, $request, $response);

        return $view;
    }

    /**
     * Routing end-point for application behavior.
     *
     * @param RequestAbstract  $request  Request
     * @param ResponseAbstract $response Response
     * @param array            $data     Generic data
     *
     * @return RenderableInterface
     *
     * @since 1.0.0
     * @codeCoverageIgnore
     */
    public function viewDatabaseResult(RequestAbstract $request, ResponseAbstract $response, array $data = []) : RenderableInterface
    {
        $view = new View($this->app->l11nManager, $request, $response);
        $view->setTemplate('/Modules/Database/Theme/Backend/database-query-result');
        $view->data['nav'] = $this->app->moduleManager->get('Navigation')->createNavigationMid(1005601001, $request, $response);

        return $view;
    }

    /**
     * Routing end-point for application behavior.
     *
     * @param RequestAbstract  $request  Request
     * @param ResponseAbstract $response Response
     * @param array            $data     Generic data
     *
     * @return RenderableInterface
     *
     * @since 1.0.0
     * @codeCoverageIgnore
     */
    public function viewDatabaseTemplate(RequestAbstract $request, ResponseAbstract $response, array $data = []) : RenderableInterface
    {
        $view = new View($this->app->l11nManager, $request, $response);
        $view->setTemplate('/Modules/Database/Theme/Backend/database-template');
        $view->data['nav'] = $this->app->moduleManager->get('Navigation')->createNavigationMid(1005601001, $request, $response);

        return $view;
    }
}
