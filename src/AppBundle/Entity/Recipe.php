<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="recipes")
 */
class Recipe
{
    /**
     * @Assert\NotBlank()
     */

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
<<<<<<< HEAD
    protected $title;
=======
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;

<<<<<<< HEAD
=======
    /**
     *@ORM\Column(name="ingredients", type="array", nullable=true)
     */
    private $ingredients;


>>>>>>> 367b5f93330b76668bd5a8e8c26975576cd794c8
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
     * Set description
     *
     * @param string $description
     *
     * @return Recipe
     */
    public function setDescription($description)
    {
        $this->description = $description;
>>>>>>> c4b98c181754197369d1372a59db078ac293a88a

    protected $ingredients;

    public function __construct()
    {
        $this->ingredients = new ArrayCollection();
    }

    public function getTitle()
    {
        return $this->title;
    }
<<<<<<< HEAD
=======

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }
<<<<<<< HEAD
=======

>>>>>>> 367b5f93330b76668bd5a8e8c26975576cd794c8
>>>>>>> c4b98c181754197369d1372a59db078ac293a88a
}
