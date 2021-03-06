<?php

/**
 * Generated by phpSPO model generator 2020-05-29T07:19:37+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientValueObject;
class SharingLink extends ClientValueObject
{
    /**
     * @var Identity
     */
    public $Application;
    /**
     * @var string
     */
    public $Scope;
    /**
     * @var string
     */
    public $Type;
    /**
     * @var string
     */
    public $WebUrl;
    /**
     * @var bool
     */
    public $PreventsDownload;
    /**
     * @var string
     */
    public $WebHtml;
}