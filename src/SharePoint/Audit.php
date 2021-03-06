<?php

/**
 * Updated By PHP Office365 Generator 2019-12-28T23:46:27+00:00 16.0.19520.12054
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;
class Audit extends ClientObject
{
    /**
     * Gets or 
     * sets a value indicating what kinds of events and actions are audited 
     * specifically for this object.
     * @return integer
     */
    public function getAuditFlags()
    {
        if (!$this->isPropertyAvailable("AuditFlags")) {
            return null;
        }
        return $this->getProperty("AuditFlags");
    }
    /**
     * Gets or 
     * sets a value indicating what kinds of events and actions are audited 
     * specifically for this object.
     * @var integer
     */
    public function setAuditFlags($value)
    {
        $this->setProperty("AuditFlags", $value, true);
    }
}
