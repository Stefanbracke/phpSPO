<?php

/**
 * Generated by phpSPO model generator 2020-05-24T21:39:44+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientValueObject;
class SignInStatus extends ClientValueObject
{
    /**
     * @var integer
     */
    public $ErrorCode;
    /**
     * @var string
     */
    public $FailureReason;
    /**
     * @var string
     */
    public $AdditionalDetails;
}