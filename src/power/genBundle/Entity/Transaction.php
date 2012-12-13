<?php

namespace power\genBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * power\genBundle\Entity\Transaction
 */
class Transaction
{
    /**
     * @var integer $powerhouseId
     */
    private $powerhouseId;

    /**
     * @var \DateTime $transactionDate
     */
    private $transactionDate;

    /**
     * @var string $businessType
     */
    private $businessType;

    /**
     * @var \DateTime $transactionCompleteDate
     */
    private $transactionCompleteDate;

    /**
     * @var \DateTime $transactionVerifyDate
     */
    private $transactionVerifyDate;

    /**
     * @var boolean $iscertificate
     */
    private $iscertificate;

    /**
     * @var boolean $isproxy
     */
    private $isproxy;

    /**
     * @var boolean $isidcard
     */
    private $isidcard;

    /**
     * @var boolean $ismap
     */
    private $ismap;

    /**
     * @var boolean $ischartlocation
     */
    private $ischartlocation;

    /**
     * @var boolean $ischartcapacity
     */
    private $ischartcapacity;

    /**
     * @var boolean $ispower
     */
    private $ispower;

    /**
     * @var boolean $islatlong
     */
    private $islatlong;

    /**
     * @var boolean $islicense
     */
    private $islicense;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var power\genBundle\Entity\Establishment
     */
    private $establishment;


    /**
     * Set powerhouseId
     *
     * @param integer $powerhouseId
     * @return Transaction
     */
    public function setPowerhouseId($powerhouseId)
    {
        $this->powerhouseId = $powerhouseId;
    
        return $this;
    }

    /**
     * Get powerhouseId
     *
     * @return integer 
     */
    public function getPowerhouseId()
    {
        return $this->powerhouseId;
    }

    /**
     * Set transactionDate
     *
     * @param \DateTime $transactionDate
     * @return Transaction
     */
    public function setTransactionDate($transactionDate)
    {
        $this->transactionDate = $transactionDate;
    
        return $this;
    }

    /**
     * Get transactionDate
     *
     * @return \DateTime 
     */
    public function getTransactionDate()
    {
        return $this->transactionDate;
    }

    /**
     * Set businessType
     *
     * @param string $businessType
     * @return Transaction
     */
    public function setBusinessType($businessType)
    {
        $this->businessType = $businessType;
    
        return $this;
    }

    /**
     * Get businessType
     *
     * @return string 
     */
    public function getBusinessType()
    {
        return $this->businessType;
    }

    /**
     * Set transactionCompleteDate
     *
     * @param \DateTime $transactionCompleteDate
     * @return Transaction
     */
    public function setTransactionCompleteDate($transactionCompleteDate)
    {
        $this->transactionCompleteDate = $transactionCompleteDate;
    
        return $this;
    }

    /**
     * Get transactionCompleteDate
     *
     * @return \DateTime 
     */
    public function getTransactionCompleteDate()
    {
        return $this->transactionCompleteDate;
    }

    /**
     * Set transactionVerifyDate
     *
     * @param \DateTime $transactionVerifyDate
     * @return Transaction
     */
    public function setTransactionVerifyDate($transactionVerifyDate)
    {
        $this->transactionVerifyDate = $transactionVerifyDate;
    
        return $this;
    }

    /**
     * Get transactionVerifyDate
     *
     * @return \DateTime 
     */
    public function getTransactionVerifyDate()
    {
        return $this->transactionVerifyDate;
    }

    /**
     * Set iscertificate
     *
     * @param boolean $iscertificate
     * @return Transaction
     */
    public function setIscertificate($iscertificate)
    {
        $this->iscertificate = $iscertificate;
    
        return $this;
    }

    /**
     * Get iscertificate
     *
     * @return boolean 
     */
    public function getIscertificate()
    {
        return $this->iscertificate;
    }

    /**
     * Set isproxy
     *
     * @param boolean $isproxy
     * @return Transaction
     */
    public function setIsproxy($isproxy)
    {
        $this->isproxy = $isproxy;
    
        return $this;
    }

    /**
     * Get isproxy
     *
     * @return boolean 
     */
    public function getIsproxy()
    {
        return $this->isproxy;
    }

    /**
     * Set isidcard
     *
     * @param boolean $isidcard
     * @return Transaction
     */
    public function setIsidcard($isidcard)
    {
        $this->isidcard = $isidcard;
    
        return $this;
    }

    /**
     * Get isidcard
     *
     * @return boolean 
     */
    public function getIsidcard()
    {
        return $this->isidcard;
    }

    /**
     * Set ismap
     *
     * @param boolean $ismap
     * @return Transaction
     */
    public function setIsmap($ismap)
    {
        $this->ismap = $ismap;
    
        return $this;
    }

    /**
     * Get ismap
     *
     * @return boolean 
     */
    public function getIsmap()
    {
        return $this->ismap;
    }

    /**
     * Set ischartlocation
     *
     * @param boolean $ischartlocation
     * @return Transaction
     */
    public function setIschartlocation($ischartlocation)
    {
        $this->ischartlocation = $ischartlocation;
    
        return $this;
    }

    /**
     * Get ischartlocation
     *
     * @return boolean 
     */
    public function getIschartlocation()
    {
        return $this->ischartlocation;
    }

    /**
     * Set ischartcapacity
     *
     * @param boolean $ischartcapacity
     * @return Transaction
     */
    public function setIschartcapacity($ischartcapacity)
    {
        $this->ischartcapacity = $ischartcapacity;
    
        return $this;
    }

    /**
     * Get ischartcapacity
     *
     * @return boolean 
     */
    public function getIschartcapacity()
    {
        return $this->ischartcapacity;
    }

    /**
     * Set ispower
     *
     * @param boolean $ispower
     * @return Transaction
     */
    public function setIspower($ispower)
    {
        $this->ispower = $ispower;
    
        return $this;
    }

    /**
     * Get ispower
     *
     * @return boolean 
     */
    public function getIspower()
    {
        return $this->ispower;
    }

    /**
     * Set islatlong
     *
     * @param boolean $islatlong
     * @return Transaction
     */
    public function setIslatlong($islatlong)
    {
        $this->islatlong = $islatlong;
    
        return $this;
    }

    /**
     * Get islatlong
     *
     * @return boolean 
     */
    public function getIslatlong()
    {
        return $this->islatlong;
    }

    /**
     * Set islicense
     *
     * @param boolean $islicense
     * @return Transaction
     */
    public function setIslicense($islicense)
    {
        $this->islicense = $islicense;
    
        return $this;
    }

    /**
     * Get islicense
     *
     * @return boolean 
     */
    public function getIslicense()
    {
        return $this->islicense;
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
     * Set establishment
     *
     * @param power\genBundle\Entity\Establishment $establishment
     * @return Transaction
     */
    public function setEstablishment(\power\genBundle\Entity\Establishment $establishment = null)
    {
        $this->establishment = $establishment;
    
        return $this;
    }

    /**
     * Get establishment
     *
     * @return power\genBundle\Entity\Establishment 
     */
    public function getEstablishment()
    {
        return $this->establishment;
    }
    
    public function __toString()
    {
      return (string) $this->name;
    }
}
