<?php

/**
 * Generated by phpSPO model generator 2020-05-25T06:42:59+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
/**
 * Represents a class within a school. The **educationClass** resource corresponds to the Office 365 group and shares the same ID. Students are regular members of the class, and teachers are owners and have appropriate rights. For Office experiences to work correctly, teachers must be members of both the teachers and members collections.  
 */
class EducationClass extends ClientObject
{
    /**
     *  Name of the class.
     * @return string
     */
    public function getDisplayName()
    {
        if (!$this->isPropertyAvailable("DisplayName")) {
            return null;
        }
        return $this->getProperty("DisplayName");
    }
    /**
     *  Name of the class.
     * @var string
     */
    public function setDisplayName($value)
    {
        $this->setProperty("DisplayName", $value, true);
    }
    /**
     *  Mail name for sending email to all members, if this is enabled. 
     * @return string
     */
    public function getMailNickname()
    {
        if (!$this->isPropertyAvailable("MailNickname")) {
            return null;
        }
        return $this->getProperty("MailNickname");
    }
    /**
     *  Mail name for sending email to all members, if this is enabled. 
     * @var string
     */
    public function setMailNickname($value)
    {
        $this->setProperty("MailNickname", $value, true);
    }
    /**
     *  Description of the class.
     * @return string
     */
    public function getDescription()
    {
        if (!$this->isPropertyAvailable("Description")) {
            return null;
        }
        return $this->getProperty("Description");
    }
    /**
     *  Description of the class.
     * @var string
     */
    public function setDescription($value)
    {
        $this->setProperty("Description", $value, true);
    }
    /**
     *  Class code used by the school to identify the class.
     * @return string
     */
    public function getClassCode()
    {
        if (!$this->isPropertyAvailable("ClassCode")) {
            return null;
        }
        return $this->getProperty("ClassCode");
    }
    /**
     *  Class code used by the school to identify the class.
     * @var string
     */
    public function setClassCode($value)
    {
        $this->setProperty("ClassCode", $value, true);
    }
    /**
     * Name of the class in the syncing system.
     * @return string
     */
    public function getExternalName()
    {
        if (!$this->isPropertyAvailable("ExternalName")) {
            return null;
        }
        return $this->getProperty("ExternalName");
    }
    /**
     * Name of the class in the syncing system.
     * @var string
     */
    public function setExternalName($value)
    {
        $this->setProperty("ExternalName", $value, true);
    }
    /**
     *  ID of the class from the syncing system. 
     * @return string
     */
    public function getExternalId()
    {
        if (!$this->isPropertyAvailable("ExternalId")) {
            return null;
        }
        return $this->getProperty("ExternalId");
    }
    /**
     *  ID of the class from the syncing system. 
     * @var string
     */
    public function setExternalId($value)
    {
        $this->setProperty("ExternalId", $value, true);
    }
    /**
     *  The directory group corresponding to this class.
     * @return Group
     */
    public function getGroup()
    {
        if (!$this->isPropertyAvailable("Group")) {
            $this->setProperty("Group", new Group($this->getContext(), new ResourcePath("Group", $this->getResourcePath())));
        }
        return $this->getProperty("Group");
    }
    /**
     *  Entity who created the class 
     * @return IdentitySet
     */
    public function getCreatedBy()
    {
        if (!$this->isPropertyAvailable("CreatedBy")) {
            return null;
        }
        return $this->getProperty("CreatedBy");
    }
    /**
     *  Entity who created the class 
     * @var IdentitySet
     */
    public function setCreatedBy($value)
    {
        $this->setProperty("CreatedBy", $value, true);
    }
    /**
     * Term for this class.
     * @return EducationTerm
     */
    public function getTerm()
    {
        if (!$this->isPropertyAvailable("Term")) {
            return null;
        }
        return $this->getProperty("Term");
    }
    /**
     * Term for this class.
     * @var EducationTerm
     */
    public function setTerm($value)
    {
        $this->setProperty("Term", $value, true);
    }
}