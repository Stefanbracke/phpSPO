<?php

/**
 * Updated By PHP Office365 Generator 2020-04-25T20:53:05+00:00 16.0.20008.12009
 */
namespace Office365\OutlookServices;

use Office365\Runtime\ResourcePath;
/**
 * An event in a calendar.
 */
class Event extends Item
{
    /**
     * @var string
     */
    public $Subject;
    /**
     * The body of the message associated with the event.
     * @var ItemBody
     */
    public $Body;
    /**
     * The collection of attendees for the event.
     * @var array
     */
    public $Attendees;
    /**
     * The location of the event.
     * @var Location
     */
    public $Location;
    /**
     * The status to show: Free = 0, Tentative = 1, Busy = 2, Oof = 3, WorkingElsewhere = 4, Unknown = -1.
     * @var int
     */
    public $ShowAs;
    /**
     * The start time of the event.
     * @var DateTimeTimeZone
     */
    public $Start;
    /**
     * The end time of the event.
     * @var DateTimeTimeZone
     */
    public $End;
    /**
     * The event type: SingleInstance = 0, Occurrence = 1, Exception = 2, SeriesMaster = 3.
     * @var int
     */
    public $Type;
    /**
     * The URL to open the event in Outlook Web App.
     * @var string
     */
    public $WebLink;
    /**
     * @var string
     */
    public $StartTimeZone;
    /**
     * @var string
     */
    public $EndTimeZone;
    /**
     * @return ResponseStatus
     */
    public function getResponseStatus()
    {
        if (!$this->isPropertyAvailable("ResponseStatus")) {
            return null;
        }
        return $this->getProperty("ResponseStatus");
    }
    /**
     * @var ResponseStatus
     */
    public function setResponseStatus($value)
    {
        $this->setProperty("ResponseStatus", $value, true);
    }
    /**
     * @var string
     */
    public $iCalUId;
    /**
     * @var integer
     */
    public $Reminder;
    /**
     * @var bool
     */
    public $HasAttachments;
    /**
     * @return ItemBody
     */
    public function getBody()
    {
        if (!$this->isPropertyAvailable("Body")) {
            return null;
        }
        return $this->getProperty("Body");
    }
    /**
     * @var ItemBody
     */
    public function setBody($value)
    {
        $this->setProperty("Body", $value, true);
    }
    /**
     * @var string
     */
    public $BodyPreview;
    /**
     * @return Location
     */
    public function getLocation()
    {
        if (!$this->isPropertyAvailable("Location")) {
            return null;
        }
        return $this->getProperty("Location");
    }
    /**
     * @var Location
     */
    public function setLocation($value)
    {
        $this->setProperty("Location", $value, true);
    }
    /**
     * @var bool
     */
    public $IsAllDay;
    /**
     * @var bool
     */
    public $IsCancelled;
    /**
     * @var bool
     */
    public $IsOrganizer;
    /**
     * @var bool
     */
    public $ResponseRequested;
    /**
     * @var string
     */
    public $SeriesMasterId;
    /**
     * @return Recipient
     */
    public function getOrganizer()
    {
        if (!$this->isPropertyAvailable("Organizer")) {
            return null;
        }
        return $this->getProperty("Organizer");
    }
    /**
     * @var Recipient
     */
    public function setOrganizer($value)
    {
        $this->setProperty("Organizer", $value, true);
    }
    /**
     * @return AttachmentCollection
     */
    public function getAttachments()
    {
        if (!$this->isPropertyAvailable("Attachments")) {
            $this->setProperty("Attachments", new AttachmentCollection($this->getContext(), new ResourcePath("Attachments", $this->getResourcePath())));
        }
        return $this->getProperty("Attachments");
    }
    /**
     * @return Calendar
     */
    public function getCalendar()
    {
        if (!$this->isPropertyAvailable("Calendar")) {
            $this->setProperty("Calendar", new Calendar($this->getContext(), new ResourcePath("Calendar", $this->getResourcePath())));
        }
        return $this->getProperty("Calendar");
    }
    /**
     * @return EventCollection
     */
    public function getInstances()
    {
        if (!$this->isPropertyAvailable("Instances")) {
            $this->setProperty("Instances", new EventCollection($this->getContext(), new ResourcePath("Instances", $this->getResourcePath())));
        }
        return $this->getProperty("Instances");
    }
    /**
     * @return PatternedRecurrence
     */
    public function getRecurrence()
    {
        if (!$this->isPropertyAvailable("Recurrence")) {
            return null;
        }
        return $this->getProperty("Recurrence");
    }
    /**
     * @var PatternedRecurrence
     */
    public function setRecurrence($value)
    {
        $this->setProperty("Recurrence", $value, true);
    }
}