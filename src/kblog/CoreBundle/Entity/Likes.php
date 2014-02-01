<?php

namespace kblog\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Likes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="kblog\CoreBundle\Entity\Repository\LikesRepository")
 */
class Likes {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Blogs", inversedBy="likes")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    protected $blog;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;

    /**
     * @var $liker Intance of User
     * @ORM\ManyToOne(targetEntity="Blogger\UserBundle\Entity\User", inversedBy="likes" )
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    protected $user;

}
