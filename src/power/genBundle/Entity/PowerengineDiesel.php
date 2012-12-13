<?php

namespace power\genBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * power\genBundle\Entity\PowerengineDiesel
 */
class PowerengineDiesel
{
    /**
     * @var integer $dieselId
     */
    private $dieselId;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var power\genBundle\Entity\Powerengine
     */
    private $powerengine_diesel;


    /**
     * Set dieselId
     *
     * @param integer $dieselId
     * @return PowerengineDiesel
     */
    public function setDieselId($dieselId)
    {
        $this->dieselId = $dieselId;
    
        return $this;
    }

    /**
     * Get dieselId
     *
     * @return integer 
     */
    public function getDieselId()
    {
        return $this->dieselId;
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
     * Set powerengine_diesel
     *
     * @param power\genBundle\Entity\Powerengine $powerengineDiesel
     * @return PowerengineDiesel
     */
    public function setPowerengineDiesel(\power\genBundle\Entity\Powerengine $powerengineDiesel = null)
    {
        $this->powerengine_diesel = $powerengineDiesel;
    
        return $this;
    }

    /**
     * Get powerengine_diesel
     *
     * @return power\genBundle\Entity\Powerengine 
     */
    public function getPowerengineDiesel()
    {
        return $this->powerengine_diesel;
    }
    
    public function __toString()
    {
      return (string) $this->name;
    }
}
