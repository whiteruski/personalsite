<?php

namespace API\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Language
 *
 * @ORM\Table(name="language")
 * @ORM\Entity
 */
class Language
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="proficiency", type="integer", nullable=false)
     */
    private $proficiency = '100';



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
     *
     * @return Language
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
     * Set proficiency
     *
     * @param integer $proficiency
     *
     * @return Language
     */
    public function setProficiency($proficiency)
    {
        $this->proficiency = $proficiency;

        return $this;
    }

    /**
     * Get proficiency
     *
     * @return integer
     */
    public function getProficiency()
    {
        return $this->proficiency;
    }
}
