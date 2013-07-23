<?php

/**
 * TechDivision\Example\Utilities\Template
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 */

namespace TechDivision\Example\Utilities;

use TechDivision\Example\Utilities\AbstractTemplate;

/**
 * @package     TechDivision\Example
 * @copyright   Copyright (c) 2013 <info@techdivision.com> - TechDivision GmbH
 * @license     http://opensource.org/licenses/osl-3.0.php
 *              Open Software License (OSL 3.0)
 * @author      Johann Zelger <j.zelger@techdivision.com>
 */

class DemoTemplate extends AbstractTemplate
{

    /**
     * Some properties for template
     *
     * @var string
     */
    protected $webappName;
    protected $requestUri;
    protected $userAgent;

    /**
     * @param mixed $requestUri
     */
    public function setRequestUri($requestUri)
    {
        $this->requestUri = $requestUri;
    }

    /**
     * @return mixed
     */
    public function getRequestUri()
    {
        return $this->requestUri;
    }

    /**
     * @param mixed $userAgent
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    }

    /**
     * @return mixed
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @param string $webappName
     */
    public function setWebappName($webappName)
    {
        $this->webappName = $webappName;
    }

    /**
     * @return string
     */
    public function getWebappName()
    {
        return $this->webappName;
    }

}