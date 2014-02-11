<?php
namespace kblog\CoreBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;


/** 
 * @ORM\Entity(repositoryClass="kblog\CoreBundle\Repository\CommentsRepository")
 * @ORM\Table(name="comments")
 * @ORM\HasLifecycleCallbacks
 */
class Comment
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** 
     * @ORM\Column(type="text", nullable=true)
     */
    private $comment;

    /** 
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $approved;

    /** 
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated_at;

    /** 
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created_at;

  

    /** 
     * @ORM\ManyToOne(targetEntity="Blog")
     * @ORM\JoinColumn(name="blog_id", referencedColumnName="id", nullable=false)
     */
    private $blog;

    /** 
     * @ORM\ManyToOne(targetEntity="User", inversedBy="comments")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
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
     * Set comment
     *
     * @param string $comment
     * @return Comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set approved
     *
     * @param boolean $approved
     * @return Comment
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * Get approved
     *
     * @return boolean 
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Comment
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
     * @return Comment
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
     * @param \kblog\CoreBundle\Entity\Blog $blog
     * @return Comment
     */
    public function setBlog(\kblog\CoreBundle\Entity\Blog $blog)
    {
        $this->blog = $blog;

        return $this;
    }

    /**
     * Get blog
     *
     * @return \kblog\CoreBundle\Entity\Blog 
     */
    public function getBlog()
    {
        return $this->blog;
    }

    /**
     * Set user
     *
     * @param \kblog\CoreBundle\Entity\User $user
     * @return Comment
     */
    public function setUser(\kblog\CoreBundle\Entity\User $user = null)
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
