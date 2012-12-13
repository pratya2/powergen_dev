<?php

namespace power\genBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * power\genBundle\Entity\Owner
 */
class Owner
{
    /**
     * @var string $name
     */
    private $name;

    /**
     * @var \DateTime $registerDate
     */
    private $registerDate;

    /**
     * @var string $registerNumber
     */
    private $registerNumber;

    /**
     * @var \DateTime $birthDay
     */
    private $birthDay;

    /**
     * @var string $nationality
     */
    private $nationality;

    /**
     * @var integer $idCard
     */
    private $idCard;

    /**
     * @var string $districtOfIssue
     */
    private $districtOfIssue;

    /**
     * @var string $proviceOfIssue
     */
    private $proviceOfIssue;

    /**
     * @var string $adressNumber
     */
    private $adressNumber;

    /**
     * @var string $lane
     */
    private $lane;

    /**
     * @var string $street
     */
    private $street;

    /**
     * @var string $villageNumber
     */
    private $villageNumber;

    /**
     * @var integer $subDistrict
     */
    private $subDistrict;

    /**
     * @var integer $district
     */
    private $district;

    /**
     * @var integer $province
     */
    private $province;

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
     * @var boolean $iscorp
     */
    private $iscorp;

    /**
     * @var string $mobilePhone
     */
    private $mobilePhone;

    /**
     * @var string $website
     */
    private $website;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $establishments;

    /**
     * @var power\genBundle\Entity\Ownertype
     */
    private $ownertype;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->establishments = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return Owner
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
     * Set registerDate
     *
     * @param \DateTime $registerDate
     * @return Owner
     */
    public function setRegisterDate($registerDate)
    {
        $this->registerDate = $registerDate;
    
        return $this;
    }

    /**
     * Get registerDate
     *
     * @return \DateTime 
     */
    public function getRegisterDate()
    {
        return $this->registerDate;
    }

    /**
     * Set registerNumber
     *
     * @param string $registerNumber
     * @return Owner
     */
    public function setRegisterNumber($registerNumber)
    {
        $this->registerNumber = $registerNumber;
    
        return $this;
    }

    /**
     * Get registerNumber
     *
     * @return string 
     */
    public function getRegisterNumber()
    {
        return $this->registerNumber;
    }

    /**
     * Set birthDay
     *
     * @param \DateTime $birthDay
     * @return Owner
     */
    public function setBirthDay($birthDay)
    {
        $this->birthDay = $birthDay;
    
        return $this;
    }

    /**
     * Get birthDay
     *
     * @return \DateTime 
     */
    public function getBirthDay()
    {
        return $this->birthDay;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     * @return Owner
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    
        return $this;
    }

    /**
     * Get nationality
     *
     * @return string 
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set idCard
     *
     * @param integer $idCard
     * @return Owner
     */
    public function setIdCard($idCard)
    {
        $this->idCard = $idCard;
    
        return $this;
    }

    /**
     * Get idCard
     *
     * @return integer 
     */
    public function getIdCard()
    {
        return $this->idCard;
    }

    /**
     * Set districtOfIssue
     *
     * @param string $districtOfIssue
     * @return Owner
     */
    public function setDistrictOfIssue($districtOfIssue)
    {
        $this->districtOfIssue = $districtOfIssue;
    
        return $this;
    }

    /**
     * Get districtOfIssue
     *
     * @return string 
     */
    public function getDistrictOfIssue()
    {
        return $this->districtOfIssue;
    }

    /**
     * Set proviceOfIssue
     *
     * @param string $proviceOfIssue
     * @return Owner
     */
    public function setProviceOfIssue($proviceOfIssue)
    {
        $this->proviceOfIssue = $proviceOfIssue;
    
        return $this;
    }

    /**
     * Get proviceOfIssue
     *
     * @return string 
     */
    public function getProviceOfIssue()
    {
        return $this->proviceOfIssue;
    }

    /**
     * Set adressNumber
     *
     * @param string $adressNumber
     * @return Owner
     */
    public function setAdressNumber($adressNumber)
    {
        $this->adressNumber = $adressNumber;
    
        return $this;
    }

    /**
     * Get adressNumber
     *
     * @return string 
     */
    public function getAdressNumber()
    {
        return $this->adressNumber;
    }

    /**
     * Set lane
     *
     * @param string $lane
     * @return Owner
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
     * @return Owner
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
     * Set villageNumber
     *
     * @param string $villageNumber
     * @return Owner
     */
    public function setVillageNumber($villageNumber)
    {
        $this->villageNumber = $villageNumber;
    
        return $this;
    }

    /**
     * Get villageNumber
     *
     * @return string 
     */
    public function getVillageNumber()
    {
        return $this->villageNumber;
    }

    /**
     * Set subDistrict
     *
     * @param integer $subDistrict
     * @return Owner
     */
    public function setSubDistrict($subDistrict)
    {
        $this->subDistrict = $subDistrict;
    
        return $this;
    }

    /**
     * Get subDistrict
     *
     * @return integer 
     */
    public function getSubDistrict()
    {
        return $this->subDistrict;
    }

    /**
     * Set district
     *
     * @param integer $district
     * @return Owner
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
     * @return Owner
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
     * Set poscode
     *
     * @param string $poscode
     * @return Owner
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
     * @return Owner
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
     * @return Owner
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
     * Set iscorp
     *
     * @param boolean $iscorp
     * @return Owner
     */
    public function setIscorp($iscorp)
    {
        $this->iscorp = $iscorp;
    
        return $this;
    }

    /**
     * Get iscorp
     *
     * @return boolean 
     */
    public function getIscorp()
    {
        return $this->iscorp;
    }

    /**
     * Set mobilePhone
     *
     * @param string $mobilePhone
     * @return Owner
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
    
        return $this;
    }

    /**
     * Get mobilePhone
     *
     * @return string 
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return Owner
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    
        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Owner
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
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
     * Add establishments
     *
     * @param power\genBundle\Entity\Establishment $establishments
     * @return Owner
     */
    public function addEstablishment(\power\genBundle\Entity\Establishment $establishments)
    {
        $this->establishments[] = $establishments;
    
        return $this;
    }

    /**
     * Remove establishments
     *
     * @param power\genBundle\Entity\Establishment $establishments
     */
    public function removeEstablishment(\power\genBundle\Entity\Establishment $establishments)
    {
        $this->establishments->removeElement($establishments);
    }

    /**
     * Get establishments
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getEstablishments()
    {
        return $this->establishments;
    }

    /**
     * Set ownertype
     *
     * @param power\genBundle\Entity\Ownertype $ownertype
     * @return Owner
     */
    public function setOwnertype(\power\genBundle\Entity\Ownertype $ownertype = null)
    {
        $this->ownertype = $ownertype;
    
        return $this;
    }

    /**
     * Get ownertype
     *
     * @return power\genBundle\Entity\Ownertype 
     */
    public function getOwnertype()
    {
        return $this->ownertype;
    }
    
    public function __toString()
    {
      return (string) $this->name;
    }
}
