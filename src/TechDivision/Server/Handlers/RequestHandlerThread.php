<?php
/**
 * \TechDivision\Server\Handlers\RequestHandlerThread
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   Server
 * @package    TechDivision_Server
 * @subpackage Handlers
 * @author     Johann Zelger <jz@techdivision.com>
 * @copyright  2014 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/techdivision/TechDivision_Server
 */

namespace TechDivision\Server\Handlers;

use TechDivision\Server\Interfaces\ServerContextInterface;
use TechDivision\Server\Interfaces\WorkerInterface;
use TechDivision\Server\Sockets\StreamSocket;

/**
 * This class is just for testing purpose, so please don't use it for this moment.
 *
 * @category   Server
 * @package    TechDivision_Server
 * @subpackage Handlers
 * @author     Johann Zelger <jz@techdivision.com>
 * @copyright  2014 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/techdivision/TechDivision_Server
 */
class RequestHandlerThread extends \Thread
{
    /**
     * Constructs the request handler thread and start's it
     *
     * @param resource                                               $connectionResource The connection resource
     * @param array                                                  $connectionHandlers An array of connection handlers
     * @param \TechDivision\Server\Interfaces\ServerContextInterface $serverContext      The server's context
     * @param \TechDivision\Server\Interfaces\WorkerInterface        $worker             The worker instance
     */
    public function __construct(
        $connectionResource,
        array $connectionHandlers,
        ServerContextInterface $serverContext,
        WorkerInterface $worker
    ) {
        $this->connectionResource = $connectionResource;
        $this->connectionHandlers = $connectionHandlers;
        $this->serverContext = $serverContext;
        $this->worker = $worker;
        $this->start();
    }

    /**
     * Runs workload
     *
     * @return void
     */
    public function run()
    {
        // setup environment for handler
        require SERVER_AUTOLOADER;

        // set local var refs
        $serverContext = $this->serverContext;
        $connectionHandlers = $this->connectionHandlers;
        $worker = $this->worker;

        // get socket type
        $socketType = $serverContext->getServerConfig()->getSocketType();

        // get connection instance by resource
        $connection = $socketType::getInstance($this->connectionResource);

        // iterate all connection handlers to handle connection right
        foreach ($connectionHandlers as $connectionHandler) {
            // if connectionHandler handled connection than break out of foreach
            if ($connectionHandler->handle($connection, $worker)) {
                break;
            }
        }
    }
}
