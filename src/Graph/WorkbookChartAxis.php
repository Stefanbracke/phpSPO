<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:05:50+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class WorkbookChartAxis extends ClientObject
{
    /**
     * @return Json
     */
    public function getMajorUnit()
    {
        if (!$this->isPropertyAvailable("MajorUnit")) {
            return null;
        }
        return $this->getProperty("MajorUnit");
    }
    /**
     * @var Json
     */
    public function setMajorUnit($value)
    {
        $this->setProperty("MajorUnit", $value, true);
    }
    /**
     * @return Json
     */
    public function getMaximum()
    {
        if (!$this->isPropertyAvailable("Maximum")) {
            return null;
        }
        return $this->getProperty("Maximum");
    }
    /**
     * @var Json
     */
    public function setMaximum($value)
    {
        $this->setProperty("Maximum", $value, true);
    }
    /**
     * @return Json
     */
    public function getMinimum()
    {
        if (!$this->isPropertyAvailable("Minimum")) {
            return null;
        }
        return $this->getProperty("Minimum");
    }
    /**
     * @var Json
     */
    public function setMinimum($value)
    {
        $this->setProperty("Minimum", $value, true);
    }
    /**
     * @return Json
     */
    public function getMinorUnit()
    {
        if (!$this->isPropertyAvailable("MinorUnit")) {
            return null;
        }
        return $this->getProperty("MinorUnit");
    }
    /**
     * @var Json
     */
    public function setMinorUnit($value)
    {
        $this->setProperty("MinorUnit", $value, true);
    }
    /**
     * @return WorkbookChartAxisFormat
     */
    public function getFormat()
    {
        if (!$this->isPropertyAvailable("Format")) {
            $this->setProperty("Format", new WorkbookChartAxisFormat($this->getContext(), new ResourcePath("Format", $this->getResourcePath())));
        }
        return $this->getProperty("Format");
    }
    /**
     * @return WorkbookChartGridlines
     */
    public function getMajorGridlines()
    {
        if (!$this->isPropertyAvailable("MajorGridlines")) {
            $this->setProperty("MajorGridlines", new WorkbookChartGridlines($this->getContext(), new ResourcePath("MajorGridlines", $this->getResourcePath())));
        }
        return $this->getProperty("MajorGridlines");
    }
    /**
     * @return WorkbookChartGridlines
     */
    public function getMinorGridlines()
    {
        if (!$this->isPropertyAvailable("MinorGridlines")) {
            $this->setProperty("MinorGridlines", new WorkbookChartGridlines($this->getContext(), new ResourcePath("MinorGridlines", $this->getResourcePath())));
        }
        return $this->getProperty("MinorGridlines");
    }
    /**
     * @return WorkbookChartAxisTitle
     */
    public function getTitle()
    {
        if (!$this->isPropertyAvailable("Title")) {
            $this->setProperty("Title", new WorkbookChartAxisTitle($this->getContext(), new ResourcePath("Title", $this->getResourcePath())));
        }
        return $this->getProperty("Title");
    }
}