<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class DeviceEnrollmentLimitConfiguration extends ClientObject
{
    /**
     * @return integer
     */
    public function getLimit()
    {
        if (!$this->isPropertyAvailable("Limit")) {
            return null;
        }
        return $this->getProperty("Limit");
    }
    /**
     * @var integer
     */
    public function setLimit($value)
    {
        $this->setProperty("Limit", $value, true);
    }
}