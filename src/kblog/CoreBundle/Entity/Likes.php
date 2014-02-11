<?php

namespace kblog\CoreBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/** 
 * @ORM\Entity(repositoryClass="kblog\CoreBundle\Repository\LikesRepository")
 * @ORM\Table(name="likes")
 * @ORM\HasLifecycleCallbacks
 */
class Likes
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer", name="id")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** 
     * @ORM\Column(type="datetime", nullable=true, name="updated_at")
     */
    private $updated_at;

    /** 
     * @ORM\Column(type="datetime", nullable=true, name="created_at")
     */
    private $created_at;

   
    /** 
     * @ORM\ManyToOne(targetEntity="blog")
     * @ORM\JoinColumn(name="blog_id", referencedColumnName="id", nullable=false)
     */
    private $blog;

    /** 
     * @ORM\ManyToOne(targetEntity="User", inversedBy="likes")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     */
    private $user;

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
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Likes
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

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Likes
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
     * Set blog
     *
     * @param \kblog\CoreBundle\Entity\blog $blog
     * @return Likes
     */
    public function setBlog(\kblog\CoreBundle\Entity\blog $blog)
    {
        $this->blog = $blog;

        return $this;
    }

    /**
     * Get blog
     *
     * @return \kblog\CoreBundle\Entity\blog 
     */
    public function getBlog()
    {
        return $this->blog;
    }

    /**
     * Set user
     *
     * @param \kblog\CoreBundle\Entity\User $user
     * @return Likes
     */
    public function setUser(\kblog\CoreBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \kblog\CoreBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
