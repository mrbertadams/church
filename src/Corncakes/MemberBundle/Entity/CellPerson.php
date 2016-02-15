<?php

namespace Corncakes\MemberBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CellPerson
 *
 * @ORM\Table(name="cell_persons")
 * @ORM\Entity(repositoryClass="Corncakes\MemberBundle\Repository\CellPersonRepository")
 */
class CellPerson
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
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="cellPersons")
     */
    private $person;

    /**
     * @ORM\ManyToOne(targetEntity="Cell", inversedBy="cellPersons")
     */
    private $cell;

    /**
     * @ORM\ManyToOne(targetEntity="Church", inversedBy="cellPersons")
     */
    private $church;

    /**
     * @ORM\ManyToOne(targetEntity="PersonType", inversedBy="cellPersons")
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
     * @return CellPerson
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
     * Set cell
     *
     * @param \Corncakes\MemberBundle\Entity\Cell $cell
     * @return CellPerson
     */
    public function setCell(\Corncakes\MemberBundle\Entity\Cell $cell = null)
    {
        $this->cell = $cell;

        return $this;
    }

    /**
     * Get cell
     *
     * @return \Corncakes\MemberBundle\Entity\Cell 
     */
    public function getCell()
    {
        return $this->cell;
    }

    /**
     * Set church
     *
     * @param \Corncakes\MemberBundle\Entity\Church $church
     * @return CellPerson
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
     * @return CellPerson
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
