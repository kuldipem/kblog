<?php

namespace kblog\CoreBundle\Entity;


use Doctrine\ORM\Mapping AS ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="kblog\CoreBundle\Repository\BlogRepository")
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
     * @Assert\NotBlank(message="Title should not blank.")
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Gedom\Slug(fields={"title"})
     */
    private $slug;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Assert\NotBlank(message="Description should not blank.")
     */
    private $description;

     /**
     * @ORM\ManyToMany(targetEntity="Tag")
     * @ORM\JoinTable(name="blog_to_tags",
     *      joinColumns={@ORM\JoinColumn(name="tag_id", referencedColumnName="id", onDelete="CASCADE")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="tag_id", referencedColumnName="id", onDelete="CASCADE")}
     *      )
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
     * @Gedmo\Timestampable(on="create")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Gedom\Timestampable(on="update")
     */
    private $updated_at;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="blogs")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id", nullable=false)
     */
    private $category;

    public function __construct() {
        $this->comments=new ArrayCollection();
        $this->likes =new ArrayCollection();
        $this->images=new ArrayCollection();
    }

    
}
