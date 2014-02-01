<?php

/**
 * Description of User
 *
 * @author KULDIP PIPALIYA <kuldipem@gmail.com>
 */

namespace kblog\CoreBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="kblog\CoreBundle\Entity\Repository\BlogRepository")
 * @ORM\Table(name="users")
 * 
 */
class Users extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Blogs", mappedBy="user")
     */
    protected $blogs;

    /**
     * @ORM\OneToMany(targetEntity="Comments", mappedBy="user")
     */
    protected $comments;

    /**
     * @ORM\OneToMany(targetEntity="Likes", mappedBy="user")
     */
    protected $likes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $updatedAt;

    
    public function __construct() {
        parent::__construct();
    }

}
