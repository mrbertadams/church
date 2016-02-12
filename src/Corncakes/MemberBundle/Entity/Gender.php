<?php

namespace Corncakes\MemberBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Gender
 *
 * @ORM\Table(name="genders")
 * @ORM\Entity(repositoryClass="Corncakes\MemberBundle\Repository\GenderRepository")
 */
class Gender
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=10, unique=true)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Person", mappedBy="gender")
     */
    private $persons;

    public function __construct()
    {
        $this->persons = new ArrayCollection();
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

    /**
     * Set name
     *
     * @param string $name
     * @return Gender
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get persons
     *
     * @return integer 
     */
    public function getPersons()
    {
        return $this->persons;
    }

    /**
     * Add persons
     *
     * @param \Corncakes\MemberBundle\Entity\Person $persons
     * @return Gender
     */
    public function addPerson(\Corncakes\MemberBundle\Entity\Person $persons)
    {
        $this->persons[] = $persons;

        return $this;
    }

    /**
     * Remove persons
     *
     * @param \Corncakes\MemberBundle\Entity\Person $persons
     */
    public function removePerson(\Corncakes\MemberBundle\Entity\Person $persons)
    {
        $this->persons->removeElement($persons);
    }
}
