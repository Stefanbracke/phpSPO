<?php

/**
 * Updated By PHP Office365 Generator 2019-10-12T20:10:10+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint\Sharing;

use Office365\Runtime\ClientValueObject;
use Office365\SharePoint\SharingLinkInfo;

class SharingLinkDefaultTemplate extends ClientValueObject
{
    /**
     * @var SharingLinkInfo
     */
    public $linkDetails;
    /**
     * @var bool
     */
    public $passwordProtected;
    /**
     * @var integer
     */
    public $role;
    /**
     * @var integer
     */
    public $scope;
    /**
     * @var integer
     */
    public $shareKind;
}
