<?php
/**
 * \TechDivision\Server\Interfaces\ServerConfigurationInterface
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
 * @subpackage Interfaces
 * @author     Johann Zelger <jz@techdivision.com>
 * @copyright  2014 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/techdivision/TechDivision_Server
 */

namespace TechDivision\Server\Interfaces;

/**
 * Interface ServerConfigurationInterface
 *
 * @category   Server
 * @package    TechDivision_Server
 * @subpackage Interfaces
 * @author     Johann Zelger <jz@techdivision.com>
 * @copyright  2014 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/techdivision/TechDivision_Server
 */
interface ServerConfigurationInterface
{
    /**
     * Return's name
     *
     * @return string
     */
    public function getName();

    /**
     * Return's type
     *
     * @return string
     */
    public function getType();

    /**
     * Return's transport
     *
     * @return string
     */
    public function getTransport();

    /**
     * Return's address
     *
     * @return string
     */
    public function getAddress();

    /**
     * Return's port
     *
     * @return int
     */
    public function getPort();

    /**
     * Return's logger name
     *
     * @return string
     */
    public function getLoggerName();

    /**
     * Return's workerNumber
     *
     * @return int
     */
    public function getWorkerNumber();

    /**
     * Return's worker accept min count
     *
     * @return int
     */
    public function getWorkerAcceptMin();

    /**
     * Return's worker accept max count
     *
     * @return int
     */
    public function getWorkerAcceptMax();

    /**
     * Return's software
     *
     * @return string
     */
    public function getSoftware();

    /**
     * Return's admin
     *
     * @return string
     */
    public function getAdmin();

    /**
     * Return's keep-alive max connection
     *
     * @return int
     */
    public function getKeepAliveMax();

    /**
     * Return's keep-alive timeout
     *
     * @return int
     */
    public function getKeepAliveTimeout();

    /**
     * Return's template path for errors page
     *
     * @return string
     */
    public function getErrorsPageTemplatePath();

    /**
     * Return's server context type
     *
     * @return string
     */
    public function getServerContextType();

    /**
     * Return's request context type
     *
     * @return string
     */
    public function getRequestContextType();

    /**
     * Return's socket type
     *
     * @return string
     */
    public function getSocketType();

    /**
     * Return's worker type
     *
     * @return string
     */
    public function getWorkerType();

    /**
     * Return's document root
     *
     * @return string
     */
    public function getDocumentRoot();

    /**
     * Return's directory index definition
     *
     * @return string
     */
    public function getDirectoryIndex();

    /**
     * Return's modules
     *
     * @return array
     */
    public function getModules();

    /**
     * Return's connection handlers
     *
     * @return array
     */
    public function getConnectionHandlers();

    /**
     * Return's the virtual hosts
     *
     * @return array
     */
    public function getVirtualHosts();

    /**
     * Return's the authentications
     *
     * @return array
     */
    public function getAuthentications();

    /**
     * Return's handlers
     *
     * @return array
     */
    public function getHandlers();

    /**
     * Return's certPath
     *
     * @return string
     */
    public function getCertPath();

    /**
     * Return's passphrase
     *
     * @return string
     */
    public function getPassphrase();

    /**
     * Returns the rewrite configuration.
     *
     * @return array
     */
    public function getRewrites();

    /**
     * Returns the access configuration.
     *
     * @return array
     */
    public function getAccesses();

    /**
     * Returns the environment variable configuration
     *
     * @return array
     */
    public function getEnvironmentVariables();

    /**
     * Returns the rewrite maps.
     *
     * @return array
     */
    public function getRewriteMaps();

    /**
     * Returns the locations.
     *
     * @return array
     */
    public function getLocations();
}
