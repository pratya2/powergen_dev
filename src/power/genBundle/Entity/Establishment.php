<?php

namespace power\genBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * power\genBundle\Entity\Establishment
 */
class Establishment
{
    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $address
     */
    private $address;

    /**
     * @var string $lane
     */
    private $lane;

    /**
     * @var string $street
     */
    private $street;

    /**
     * @var integer $village
     */
    private $village;

    /**
     * @var integer $subdistrict
     */
    private $subdistrict;

    /**
     * @var integer $district
     */
    private $district;

    /**
     * @var integer $province
     */
    private $province;

    /**
     * @var integer $region
     */
    private $region;

    /**
     * @var string $poscode
     */
    private $poscode;

    /**
     * @var string $telNumber
     */
    private $telNumber;

    /**
     * @var string $faxNumber
     */
    private $faxNumber;

    /**
     * @var float $lat
     */
    private $lat;

    /**
     * @var float $lng
     */
    private $lng;

    /**
     * @var integer $location
     */
    private $location;

    /**
     * @var string $idnumber
     */
    private $idnumber;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $transactions;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $powerengines;

    /**
     * @var power\genBundle\Entity\Owner
     */
    private $owner;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->transactions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->powerengines = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return Establishment
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
     * Set address
     *
     * @param string $address
     * @return Establishment
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set lane
     *
     * @param string $lane
     * @return Establishment
     */
    public function setLane($lane)
    {
        $this->lane = $lane;
    
        return $this;
    }

    /**
     * Get lane
     *
     * @return string 
     */
    public function getLane()
    {
        return $this->lane;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Establishment
     */
    public function setStreet($street)
    {
        $this->street = $street;
    
        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set village
     *
     * @param integer $village
     * @return Establishment
     */
    public function setVillage($village)
    {
        $this->village = $village;
    
        return $this;
    }

    /**
     * Get village
     *
     * @return integer 
     */
    public function getVillage()
    {
        return $this->village;
    }

    /**
     * Set subdistrict
     *
     * @param integer $subdistrict
     * @return Establishment
     */
    public function setSubdistrict($subdistrict)
    {
        $this->subdistrict = $subdistrict;
    
        return $this;
    }

    /**
     * Get subdistrict
     *
     * @return integer 
     */
    public function getSubdistrict()
    {
        return $this->subdistrict;
    }

    /**
     * Set district
     *
     * @param integer $district
     * @return Establishment
     */
    public function setDistrict($district)
    {
        $this->district = $district;
    
        return $this;
    }

    /**
     * Get district
     *
     * @return integer 
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set province
     *
     * @param integer $province
     * @return Establishment
     */
    public function setProvince($province)
    {
        $this->province = $province;
    
        return $this;
    }

    /**
     * Get province
     *
     * @return integer 
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set region
     *
     * @param integer $region
     * @return Establishment
     */
    public function setRegion($region)
    {
        $this->region = $region;
    
        return $this;
    }

    /**
     * Get region
     *
     * @return integer 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set poscode
     *
     * @param string $poscode
     * @return Establishment
     */
    public function setPoscode($poscode)
    {
        $this->poscode = $poscode;
    
        return $this;
    }

    /**
     * Get poscode
     *
     * @return string 
     */
    public function getPoscode()
    {
        return $this->poscode;
    }

    /**
     * Set telNumber
     *
     * @param string $telNumber
     * @return Establishment
     */
    public function setTelNumber($telNumber)
    {
        $this->telNumber = $telNumber;
    
        return $this;
    }

    /**
     * Get telNumber
     *
     * @return string 
     */
    public function getTelNumber()
    {
        return $this->telNumber;
    }

    /**
     * Set faxNumber
     *
     * @param string $faxNumber
     * @return Establishment
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
    
        return $this;
    }

    /**
     * Get faxNumber
     *
     * @return string 
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * Set lat
     *
     * @param float $lat
     * @return Establishment
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    
        return $this;
    }

    /**
     * Get lat
     *
     * @return float 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param float $lng
     * @return Establishment
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
    
        return $this;
    }

    /**
     * Get lng
     *
     * @return float 
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Set location
     *
     * @param integer $location
     * @return Establishment
     */
    public function setLocation($location)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return integer 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set idnumber
     *
     * @param string $idnumber
     * @return Establishment
     */
    public function setIdnumber($idnumber)
    {
        $this->idnumber = $idnumber;
    
        return $this;
    }

    /**
     * Get idnumber
     *
     * @return string 
     */
    public function getIdnumber()
    {
        return $this->idnumber;
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
     * Add transactions
     *
     * @param power\genBundle\Entity\Transaction $transactions
     * @return Establishment
     */
    public function addTransaction(\power\genBundle\Entity\Transaction $transactions)
    {
        $this->transactions[] = $transactions;
    
        return $this;
    }

    /**
     * Remove transactions
     *
     * @param power\genBundle\Entity\Transaction $transactions
     */
    public function removeTransaction(\power\genBundle\Entity\Transaction $transactions)
    {
        $this->transactions->removeElement($transactions);
    }

    /**
     * Get transactions
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * Add powerengines
     *
     * @param power\genBundle\Entity\Powerengine $powerengines
     * @return Establishment
     */
    public function addPowerengine(\power\genBundle\Entity\Powerengine $powerengines)
    {
        $this->powerengines[] = $powerengines;
    
        return $this;
    }

    /**
     * Remove powerengines
     *
     * @param power\genBundle\Entity\Powerengine $powerengines
     */
    public function removePowerengine(\power\genBundle\Entity\Powerengine $powerengines)
    {
        $this->powerengines->removeElement($powerengines);
    }

    /**
     * Get powerengines
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPowerengines()
    {
        return $this->powerengines;
    }

    /**
     * Set owner
     *
     * @param power\genBundle\Entity\Owner $owner
     * @return Establishment
     */
    public function setOwner(\power\genBundle\Entity\Owner $owner = null)
    {
        $this->owner = $owner;
    
        return $this;
    }

    /**
     * Get owner
     *
     * @return power\genBundle\Entity\Owner 
     */
    public function getOwner()
    {
        return $this->owner;
    }
    
    public function __toString()
    {
      return (string) $this->name;
    }
}
