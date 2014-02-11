<?php

namespace kblog\CoreBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="kblog\CoreBundle\Repository\CategoriesRepository")
 * @ORM\Table(name="categories")
 * @ORM\HasLifecycleCallbacks
 * 
 */
class Category {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=false)
     * @Assert\NotBlank(message="Title should not be ")
     */
    private $title;
    
    /**
     * @ORM\Column(type="string", nullable=false)
     * @Gedmo\Slug(fields={"title"})
     */
    private $slug;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $is_parent;

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

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated_at;

    public function __construct() {
        $this->created_at = new \DateTime();
        $this->updated_at = new \DateTime();
    }

 }
