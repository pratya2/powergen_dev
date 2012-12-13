<?php

namespace power\genBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * power\genBundle\Entity\Powerengine
 */
class Powerengine
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $powerenginediesels;

    /**
     * @var power\genBundle\Entity\Establishment
     */
    private $establishment_powerengine;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->powerenginediesels = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Add powerenginediesels
     *
     * @param power\genBundle\Entity\PowerengineDiesel $powerenginediesels
     * @return Powerengine
     */
    public function addPowerenginediesel(\power\genBundle\Entity\PowerengineDiesel $powerenginediesels)
    {
        $this->powerenginediesels[] = $powerenginediesels;
    
        return $this;
    }

    /**
     * Remove powerenginediesels
     *
     * @param power\genBundle\Entity\PowerengineDiesel $powerenginediesels
     */
    public function removePowerenginediesel(\power\genBundle\Entity\PowerengineDiesel $powerenginediesels)
    {
        $this->powerenginediesels->removeElement($powerenginediesels);
    }

    /**
     * Get powerenginediesels
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPowerenginediesels()
    {
        return $this->powerenginediesels;
    }

    /**
     * Set establishment_powerengine
     *
     * @param power\genBundle\Entity\Establishment $establishmentPowerengine
     * @return Powerengine
     */
    public function setEstablishmentPowerengine(\power\genBundle\Entity\Establishment $establishmentPowerengine = null)
    {
        $this->establishment_powerengine = $establishmentPowerengine;
    
        return $this;
    }

    /**
     * Get establishment_powerengine
     *
     * @return power\genBundle\Entity\Establishment 
     */
    public function getEstablishmentPowerengine()
    {
        return $this->establishment_powerengine;
    }
    
    public function __toString()
    {
      return (string) $this->name;
    }
}
