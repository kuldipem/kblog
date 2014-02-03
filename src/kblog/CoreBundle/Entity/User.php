<?php

namespace kblog\CoreBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Serializable;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
		

/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="kblog\CoreBundle\Entity\Repository\UserRepository")
 * 
 */
class User extends BaseUser {

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", name="id")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected  $id;

    /**
     * @ORM\OneToMany(targetEntity="Blog", mappedBy="user")
     * 
     */
    protected $blogs;
    
    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="user")
     */
    protected $comments;
    
    /**
     * @ORM\OneToMany(targetEntity="Likes", mappedBy="user")
     */
    protected $likes;
    
    
    /** 
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated_at;

    /** 
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created_at;

    public function __construct() {
    	parent::__construct();
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
     * @return User
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
     * @return User
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
     * Add blogs
     *
     * @param \kblog\CoreBundle\Entity\Blog $blogs
     * @return User
     */
    public function addBlog(\kblog\CoreBundle\Entity\Blog $blogs)
    {
        $this->blogs[] = $blogs;

        return $this;
    }

    /**
     * Remove blogs
     *
     * @param \kblog\CoreBundle\Entity\Blog $blogs
     */
    public function removeBlog(\kblog\CoreBundle\Entity\Blog $blogs)
    {
        $this->blogs->removeElement($blogs);
    }

    /**
     * Get blogs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBlogs()
    {
        return $this->blogs;
    }

    /**
     * Add comments
     *
     * @param \kblog\CoreBundle\Entity\Comment $comments
     * @return User
     */
    public function addComment(\kblog\CoreBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \kblog\CoreBundle\Entity\Comment $comments
     */
    public function removeComment(\kblog\CoreBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Add likes
     *
     * @param \kblog\CoreBundle\Entity\Likes $likes
     * @return User
     */
    public function addLike(\kblog\CoreBundle\Entity\Likes $likes)
    {
        $this->likes[] = $likes;

        return $this;
    }

    /**
     * Remove likes
     *
     * @param \kblog\CoreBundle\Entity\Likes $likes
     */
    public function removeLike(\kblog\CoreBundle\Entity\Likes $likes)
    {
        $this->likes->removeElement($likes);
    }

    /**
     * Get likes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLikes()
    {
        return $this->likes;
    }
}
