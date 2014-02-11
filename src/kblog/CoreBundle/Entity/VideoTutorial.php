<?php

namespace kblog\CoreBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/** 
 * @ORM\Entity(repositoryClass="kblog\CoreBundle\Repository\VideoTutorialRepository")
 * @ORM\Table(name="video_tutorials")
 * @ORM\HasLifecycleCallbacks
 * 
 * 
 */
class VideoTutorial
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
    private $title;

    /** 
     * @ORM\Column(type="text", nullable=true)
     */
    private $code;

    /** 
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /** 
     * @ORM\Column(type="string", nullable=true)
     */
    private $tags;

    /** 
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created_at;

    /** 
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated_at;

    /** 
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="video_tutorials")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id", nullable=false)
     */
    private $category;

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
     * @return VideoTutorial
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
     * Set code
     *
     * @param string $code
     * @return VideoTutorial
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return VideoTutorial
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return VideoTutorial
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return VideoTutorial
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
     * @return VideoTutorial
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
     * Set category
     *
     * @param \kblog\CoreBundle\Entity\Category $category
     * @return VideoTutorial
     */
    public function setCategory(\kblog\CoreBundle\Entity\Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \kblog\CoreBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
