<?php

namespace kblog\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * BlogImages
 * @ORM\Entity(repositoryClass="kblog\CoreBundle\Repository\BlogImagesRepository")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="blog_images")
 */
class BlogImages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="priority", type="integer")
     */
    private $priority;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;
  
    /** 
     * @ORM\ManyToOne(targetEntity="Blog", inversedBy="images")
     * @ORM\JoinColumn(name="blog_id", referencedColumnName="id", nullable=false)
     */
    private $blog;

    
    /** 
     * @ORM\Column(type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="create")
     */
    private $created_at;

    /** 
     * @ORM\Column(type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="update")
     */
    private $updated_at;

  

    public function __construct() {
    	    
    }

}
