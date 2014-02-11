<?php

namespace kblog\CoreBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/** 
 * @ORM\Entity(repositoryClass="kblog\CoreBundle\Repository\ContactRepository")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="contacts")
 * 
 */
class Contact
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** 
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $full_name;

    /** 
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /** 
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contact_no;

    /** 
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $subject;

    /** 
     * @ORM\Column(type="text", nullable=true)
     */
    private $message;

    /** 
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created_at;

    /** 
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated_at;

    public function __construct() {
    	$this->created_at=new \DateTime();
    	$this->updated_at=new \DateTime();
    	 
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedDateTime()
    {
    	$this->created_at=new \DateTime();
    }
    
    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedDateTime()
    {
    	$this->updated_at=new \DateTime();
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
     * Set full_name
     *
     * @param string $fullName
     * @return Contact
     */
    public function setFullName($fullName)
    {
        $this->full_name = $fullName;

        return $this;
    }

    /**
     * Get full_name
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->full_name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Contact
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
     * Set contact_no
     *
     * @param string $contactNo
     * @return Contact
     */
    public function setContactNo($contactNo)
    {
        $this->contact_no = $contactNo;

        return $this;
    }

    /**
     * Get contact_no
     *
     * @return string 
     */
    public function getContactNo()
    {
        return $this->contact_no;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return Contact
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Contact
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Contact
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Contact
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}
