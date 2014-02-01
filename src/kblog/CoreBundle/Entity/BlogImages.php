<?php

namespace kblog\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * BlogImages
 *
 * @ORM\Table(name="blog_images")
 * @ORM\Entity(repositoryClass="kblog\CoreBundle\Entity\Repository\BlogImagesRepository")
 */
class BlogImages {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * */
    private $id;

    /**
     * @ORM\Column(name="image_path", type="string")
     */
    private $imagePath;

    /**
     * @ORM\ManyToOne(targetEntity="Blogs", inversedBy="images" )
     *
     */
    protected $blog;
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="priority", type="integer")
     * */
    private $priority;

    
    

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


}
