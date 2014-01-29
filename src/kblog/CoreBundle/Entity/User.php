<?php

/**
 * Description of User
 *
 * @author KULDIP PIPALIYA <kuldipem@gmail.com>
 */

namespace kblog\CoreBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="kblog\CoreBundle\Entity\Repository\BlogRepository")
 * @ORM\Table(name="users")
 * 
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    protected $id;
  
 
    public function __construct()
    {
        parent::__construct();
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

 
}
