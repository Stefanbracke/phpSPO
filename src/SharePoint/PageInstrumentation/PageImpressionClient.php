<?php

/**
 * Updated By PHP Office365 Generator 2019-10-12T19:45:14+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint\PageInstrumentation;

use Office365\Runtime\ClientValueObject;

class PageImpressionClient extends ClientValueObject
{
    /**
     * @var string
     */
    public $BasePageCorrelationId;
    /**
     * @var array
     */
    public $ClientIdToClickInfoMap;
}