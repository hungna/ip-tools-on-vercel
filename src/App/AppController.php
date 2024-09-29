<?php
/**
 * Project testSlim.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/20/18
 * Time: 16:05
 */

namespace App;

use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\PhpRenderer;

/**
 * Class AppController
 *
 * @package   App
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 *
 * @property PhpRenderer renderer
 */
class AppController
{
    /** @var object \Psr\Container\ContainerInterface */
    protected $container;

    /**
     * ApiController constructor.
     *
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function only_ip(Request $request, Response $response)
    {
        $currentIP = getIpAddress();
        $data = array(
            'ip' => $currentIP
        );
        return $response->withJson($data, 200, JSON_PRETTY_PRINT);
    }

    public function only_ip_txt(Request $request, Response $response)
    {
        $currentIP = getIpAddress();
        return $response->write($currentIP)->withStatus(200);
    }

    public function ip_address(Request $request, Response $response)
    {
        $params = $request->getQueryParams();
        if (isset($params['ip'])) {
            $currentIP = $params['ip'];
        } else {
            $currentIP = getIpAddress();
        }
        $ipInfo = getIpInformation($currentIP);
        $ipInfo = json_decode($ipInfo, true);
        $data = array(
            'data' => $ipInfo
        );
        return $response->withJson($data, 200, JSON_PRETTY_PRINT);
    }

    public function ip_address_without_data(Request $request, Response $response)
    {
        $params = $request->getQueryParams();
        if (isset($params['ip'])) {
            $currentIP = $params['ip'];
        } else {
            $currentIP = getIpAddress();
        }
        $ipInfo = getIpInformation($currentIP);
        $ipInfo = json_decode($ipInfo, true);
        return $response->withJson($ipInfo, 200, JSON_PRETTY_PRINT);
    }

    public function view_ip_address(Request $request, Response $response)
    {
        // Render index view
        $params = $request->getQueryParams();
        if (isset($params['ip'])) {
            $currentIP = $params['ip'];
        } else {
            $currentIP = getIpAddress();
        }
        $ipInfo = getIpInformation($currentIP);
        $ipData = json_decode($ipInfo, true);
        $data = array(
            'ip' => $currentIP,
            'data' => $ipData,
        );
        return $this->container->renderer->render($response, 'ip.phtml', $data);
    }

    public function php(Request $request, Response $response)
    {
        phpinfo();
    }
}
