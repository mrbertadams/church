<?php

namespace Corncakes\MemberBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DepartmentPerson
 *
 * @ORM\Table(name="department_persons")
 * @ORM\Entity(repositoryClass="Corncakes\MemberBundle\Repository\DepartmentPersonRepository")
 */
class DepartmentPerson
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
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="departmentPersons")
     */
    private $person;

    /**
     * @ORM\ManyToOne(targetEntity="Department", inversedBy="departmentPersons")
     */
    private $department;

    /**
     * @ORM\ManyToOne(targetEntity="PersonType", inversedBy="departmentPersons")
     */
    private $personType;

    /**
     * @ORM\ManyToOne(targetEntity="Church", inversedBy="departmentPersons")
     */
    private $church;

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
     * @return DepartmentPerson
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
     * Set department
     *
     * @param \Corncakes\MemberBundle\Entity\Department $department
     * @return DepartmentPerson
     */
    public function setDepartment(\Corncakes\MemberBundle\Entity\Department $department = null)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return \Corncakes\MemberBundle\Entity\Department 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set personType
     *
     * @param \Corncakes\MemberBundle\Entity\PersonType $personType
     * @return DepartmentPerson
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

    /**
     * Set church
     *
     * @param \Corncakes\MemberBundle\Entity\Church $church
     * @return DepartmentPerson
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
}
