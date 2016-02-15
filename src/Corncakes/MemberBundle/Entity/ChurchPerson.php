<?php

namespace Corncakes\MemberBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChurchPerson
 *
 * @ORM\Table(name="church_persons")
 * @ORM\Entity(repositoryClass="Corncakes\MemberBundle\Repository\ChurchPersonRepository")
 */
class ChurchPerson
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
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="churchPersons")
     */
    private $person;

    /**
     * @ORM\ManyToOne(targetEntity="Church", inversedBy="churchPersons")
     */
    private $church;

    /**
     * @ORM\ManyToOne(targetEntity="PersonType", inversedBy="churchPersons")
     */
    private $personType;

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
     * Set person
     *
     * @param \Corncakes\MemberBundle\Entity\Person $person
     * @return ChurchPerson
     */
    public function setPerson(\Corncakes\MemberBundle\Entity\Person $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \Corncakes\MemberBundle\Entity\Person 
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Set church
     *
     * @param \Corncakes\MemberBundle\Entity\Church $church
     * @return ChurchPerson
     */
    public function setChurch(\Corncakes\MemberBundle\Entity\Church $church = null)
    {
        $this->church = $church;

        return $this;
    }

    /**
     * Get church
     *
     * @return \Corncakes\MemberBundle\Entity\Church 
     */
    public function getChurch()
    {
        return $this->church;
    }

    /**
     * Set personType
     *
     * @param \Corncakes\MemberBundle\Entity\PersonType $personType
     * @return ChurchPerson
     */
    public function setPersonType(\Corncakes\MemberBundle\Entity\PersonType $personType = null)
    {
        $this->personType = $personType;

        return $this;
    }

    /**
     * Get personType
     *
     * @return \Corncakes\MemberBundle\Entity\PersonType 
     */
    public function getPersonType()
    {
        return $this->personType;
    }
}
