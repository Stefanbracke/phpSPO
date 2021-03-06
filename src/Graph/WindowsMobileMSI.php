<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class WindowsMobileMSI extends ClientObject
{
    /**
     * @return string
     */
    public function getCommandLine()
    {
        if (!$this->isPropertyAvailable("CommandLine")) {
            return null;
        }
        return $this->getProperty("CommandLine");
    }
    /**
     * @var string
     */
    public function setCommandLine($value)
    {
        $this->setProperty("CommandLine", $value, true);
    }
    /**
     * @return string
     */
    public function getProductCode()
    {
        if (!$this->isPropertyAvailable("ProductCode")) {
            return null;
        }
        return $this->getProperty("ProductCode");
    }
    /**
     * @var string
     */
    public function setProductCode($value)
    {
        $this->setProperty("ProductCode", $value, true);
    }
    /**
     * @return string
     */
    public function getProductVersion()
    {
        if (!$this->isPropertyAvailable("ProductVersion")) {
            return null;
        }
        return $this->getProperty("ProductVersion");
    }
    /**
     * @var string
     */
    public function setProductVersion($value)
    {
        $this->setProperty("ProductVersion", $value, true);
    }
    /**
     * @return bool
     */
    public function getIgnoreVersionDetection()
    {
        if (!$this->isPropertyAvailable("IgnoreVersionDetection")) {
            return null;
        }
        return $this->getProperty("IgnoreVersionDetection");
    }
    /**
     * @var bool
     */
    public function setIgnoreVersionDetection($value)
    {
        $this->setProperty("IgnoreVersionDetection", $value, true);
    }
}