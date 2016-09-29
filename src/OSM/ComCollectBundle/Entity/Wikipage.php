<?php

namespace OSM\ComCollectBundle\Entity;

/**
 * Wikipage
 */
class Wikipage
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $content;

    /**
     * @var \DateTime
     */
    private $collectedTime;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Wikipage
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set collectedTime
     *
     * @param \DateTime $collectedTime
     *
     * @return Wikipage
     */
    public function setCollectedTime($collectedTime)
    {
        $this->collectedTime = $collectedTime;

        return $this;
    }

    /**
     * Get collectedTime
     *
     * @return \DateTime
     */
    public function getCollectedTime()
    {
        return $this->collectedTime;
    }
    /**
     * @var string
     */
    private $name;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Wikipage
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
