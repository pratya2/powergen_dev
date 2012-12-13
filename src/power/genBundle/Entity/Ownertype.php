<?php

namespace power\genBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * power\genBundle\Entity\Ownertype
 */
class Ownertype
{
    /**
     * @var string $name
     */
    private $name;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $owners;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->owners = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return Ownertype
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
     * Add owners
     *
     * @param power\genBundle\Entity\Owner $owners
     * @return Ownertype
     */
    public function addOwner(\power\genBundle\Entity\Owner $owners)
    {
        $this->owners[] = $owners;
    
        return $this;
    }

    /**
     * Remove owners
     *
     * @param power\genBundle\Entity\Owner $owners
     */
    public function removeOwner(\power\genBundle\Entity\Owner $owners)
    {
        $this->owners->removeElement($owners);
    }

    /**
     * Get owners
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getOwners()
    {
        return $this->owners;
    }
    
    public function __toString()
    {
      return (string) $this->name;
    }
}
