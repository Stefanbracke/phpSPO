<?php


namespace Office365\OutlookServices;


use Office365\Runtime\ClientValueObject;


/**
 * Represents information about a user in the sending or receiving end of an event or message.
 */
class Recipient extends ClientValueObject
{

    function __construct(EmailAddress $emailAddress)
    {
        $this->EmailAddress = $emailAddress;
        parent::__construct();
    }

    /**
     * The recipient's email address.
     * @var EmailAddress
     */
    public $EmailAddress;

}