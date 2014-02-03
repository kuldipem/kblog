<?php

namespace kblog\CoreBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;


/** 
 * @ORM\Entity(repositoryClass="kblog\CoreBundle\Entity\Repository\CategoriesRepository")
 * @ORM\Table(name="categories")
 * @ORM\HasLifecycleCallbacks
 * 
 */
class Category
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** 
     * @ORM\Column(type="string", nullable=false)
     */
    private $title;

    /** 
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $is_parent;

    /** 
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created_at;

    /** 
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated_at;

    /** 
     * @ORM\OneToMany(targetEntity="Blog", mappedBy="category")
     */
    private $blogs;

    /** 
     * @ORM\OneToMany(targetEntity="VideoTutorial", mappedBy="category")
     */
    private $video_tutorials;

    /** 
     * @ORM\ManyToOne(targetEntity="Page", inversedBy="categories")
     * @ORM\JoinColumn(name="page_id", referencedColumnName="id", nullable=false)
     */
    private $page;
    
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
     * Set title
     *
     * @param string $title
     * @return Category
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set is_parent
     *
     * @param boolean $isParent
     * @return Category
     */
    public function setIsParent($isParent)
    {
        $this->is_parent = $isParent;

        return $this;
    }

    /**
     * Get is_parent
     *
     * @return boolean 
     */
    public function getIsParent()
    {
        return $this->is_parent;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Category
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
     * @return Category
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
     * Add blogs
     *
     * @param \kblog\CoreBundle\Entity\Blog $blogs
     * @return Category
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
     * Add video_tutorials
     *
     * @param \kblog\CoreBundle\Entity\VideoTutorial $videoTutorials
     * @return Category
     */
    public function addVideoTutorial(\kblog\CoreBundle\Entity\VideoTutorial $videoTutorials)
    {
        $this->video_tutorials[] = $videoTutorials;

        return $this;
    }

    /**
     * Remove video_tutorials
     *
     * @param \kblog\CoreBundle\Entity\VideoTutorial $videoTutorials
     */
    public function removeVideoTutorial(\kblog\CoreBundle\Entity\VideoTutorial $videoTutorials)
    {
        $this->video_tutorials->removeElement($videoTutorials);
    }

    /**
     * Get video_tutorials
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVideoTutorials()
    {
        return $this->video_tutorials;
    }

    /**
     * Set page
     *
     * @param \kblog\CoreBundle\Entity\Page $page
     * @return Category
     */
    public function setPage(\kblog\CoreBundle\Entity\Page $page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return \kblog\CoreBundle\Entity\Page 
     */
    public function getPage()
    {
        return $this->page;
    }
}
