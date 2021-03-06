<?php


namespace Office365\SharePoint\Portal;


use Office365\Runtime\ClientValueObject;

class GroupSiteInfo extends ClientValueObject
{

    /**
     * @var string $DocumentsUrl
     */
    public $DocumentsUrl;


    /**
     * @var string $ErrorMessage
     */
    public $ErrorMessage;


    /**
     * @var string $GroupId
     */
    public $GroupId;


    /**
     * @var string $SiteStatus
     */
    public $SiteStatus;


    /**
     * @var string $SiteUrl
     */
    public $SiteUrl;

}