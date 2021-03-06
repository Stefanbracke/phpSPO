<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:12:31+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class OnenoteOperation extends ClientObject
{
    /**
     * @return string
     */
    public function getResourceLocation()
    {
        if (!$this->isPropertyAvailable("ResourceLocation")) {
            return null;
        }
        return $this->getProperty("ResourceLocation");
    }
    /**
     * @var string
     */
    public function setResourceLocation($value)
    {
        $this->setProperty("ResourceLocation", $value, true);
    }
    /**
     * @return string
     */
    public function getResourceId()
    {
        if (!$this->isPropertyAvailable("ResourceId")) {
            return null;
        }
        return $this->getProperty("ResourceId");
    }
    /**
     * @var string
     */
    public function setResourceId($value)
    {
        $this->setProperty("ResourceId", $value, true);
    }
    /**
     * @return string
     */
    public function getPercentComplete()
    {
        if (!$this->isPropertyAvailable("PercentComplete")) {
            return null;
        }
        return $this->getProperty("PercentComplete");
    }
    /**
     * @var string
     */
    public function setPercentComplete($value)
    {
        $this->setProperty("PercentComplete", $value, true);
    }
    /**
     * @return OnenoteOperationError
     */
    public function getError()
    {
        if (!$this->isPropertyAvailable("Error")) {
            return null;
        }
        return $this->getProperty("Error");
    }
    /**
     * @var OnenoteOperationError
     */
    public function setError($value)
    {
        $this->setProperty("Error", $value, true);
    }
}