<?php

namespace kblog\CoreBundle\Entity;


use Doctrine\ORM\Mapping AS ORM;


/**
 * @ORM\Entity(repositoryClass="kblog\CoreBundle\Entity\Repository\BlogRepository")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="blogs")
 */
class Blog {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $slug;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $tags;

   
    /**
     * @ORM\OneToMany(targetEntity="BlogImages", mappedBy="blog")
     */
    private $images;

    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="blog")
     */
    protected $comments;

    /**
     * @ORM\OneToMany(targetEntity="Likes", mappedBy="blog")
     */
    protected $likes;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="blogs" )
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated_at;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="blogs")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id", nullable=false)
     */
    private $category;

    public function __construct() {
        $this->created_at = new \DateTime();
        $this->updated_at = new \DateTime();
        $this->slug = Utils::slugify($this->title);
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedDateTime() {
        $this->created_at = new \DateTime();
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedDateTime() {
        $this->updated_at = new \DateTime();
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
     * @return Blog
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
     * Set slug
     *
     * @param string $slug
     * @return Blog
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Blog
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
     * @return Blog
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
     * @return Blog
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
     * @return Blog
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
     * Add images
     *
     * @param \kblog\CoreBundle\Entity\BlogImages $images
     * @return Blog
     */
    public function addImage(\kblog\CoreBundle\Entity\BlogImages $images)
    {
        $this->images[] = $images;

        return $this;
    }

    /**
     * Remove images
     *
     * @param \kblog\CoreBundle\Entity\BlogImages $images
     */
    public function removeImage(\kblog\CoreBundle\Entity\BlogImages $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Add comments
     *
     * @param \kblog\CoreBundle\Entity\Comment $comments
     * @return Blog
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
     * @return Blog
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

    /**
     * Set user
     *
     * @param \kblog\CoreBundle\Entity\User $user
     * @return Blog
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

    /**
     * Set category
     *
     * @param \kblog\CoreBundle\Entity\Category $category
     * @return Blog
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
