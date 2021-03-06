<?php

/**
 * Updated By PHP Office365 Generator 2019-11-17T18:22:48+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;

/**
 * Specifies 
 * the tenant properties.
 */
class TenantSettings extends ClientObject
{
    /**
     * @return string
     */
    public function getCorporateCatalogUrl()
    {
        if (!$this->isPropertyAvailable("CorporateCatalogUrl")) {
            return null;
        }
        return $this->getProperty("CorporateCatalogUrl");
    }
    /**
     * @var string
     */
    public function setCorporateCatalogUrl($value)
    {
        $this->setProperty("CorporateCatalogUrl", $value, true);
    }
    /**
     * @return TenantSettings
     */
    public function getCurrent()
    {
        if (!$this->isPropertyAvailable("Current")) {
            $this->setProperty("Current", new TenantSettings($this->getContext(), new ResourcePath("Current", $this->getResourcePath())));
        }
        return $this->getProperty("Current");
    }
}