<?php

namespace kblog\CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="kblog\CoreBundle\Repository\UserRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class User extends BaseUser {

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", name="id")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

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
     * @Gedmo\Timestampable(on="update")
     */
    private $updated_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @@Gedmo\Timestampable(on="create")
     */
    private $created_at;

    public function __construct() {
        parent::__construct();
        $this->created_at = new \DateTime();
        $this->updated_at = new \DateTime();
        $this->blogs = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->likes=new ArrayCollection();
    }

}
