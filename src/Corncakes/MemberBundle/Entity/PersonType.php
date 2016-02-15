<?php

namespace Corncakes\MemberBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * PersonType
 *
 * @ORM\Table(name="person_types")
 * @ORM\Entity(repositoryClass="Corncakes\MemberBundle\Repository\PersonTypeRepository")
 */
class PersonType
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
     * @ORM\OneToMany(targetEntity="cellPerson", mappedBy="personType")
     */
    private $cellPersons;

    /**
     * @ORM\OneToMany(targetEntity="ChurchPerson", mappedBy="personType")
     */
    private $churchPersons;

    /**
     * @ORM\OneToMany(targetEntity="DepartmentPerson", mappedBy="personType")
     */
    private $departmentPersons;

    /**
     * PersonType constructor.
     */
    public function __construct()
    {
        $this->cellPersons          = new ArrayCollection();
        $this->churchPersons        = new ArrayCollection();
        $this->departmentPersons    = new ArrayCollection();
    }

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, unique=true)
     */
    private $name;


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
     * @return PersonType
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
     * Add cellPersons
     *
     * @param \Corncakes\MemberBundle\Entity\cellPerson $cellPersons
     * @return PersonType
     */
    public function addCellPerson(\Corncakes\MemberBundle\Entity\cellPerson $cellPersons)
    {
        $this->cellPersons[] = $cellPersons;

        return $this;
    }

    /**
     * Remove cellPersons
     *
     * @param \Corncakes\MemberBundle\Entity\cellPerson $cellPersons
     */
    public function removeCellPerson(\Corncakes\MemberBundle\Entity\cellPerson $cellPersons)
    {
        $this->cellPersons->removeElement($cellPersons);
    }

    /**
     * Get cellPersons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCellPersons()
    {
        return $this->cellPersons;
    }

    /**
     * Add churchPersons
     *
     * @param \Corncakes\MemberBundle\Entity\ChurchPerson $churchPersons
     * @return PersonType
     */
    public function addChurchPerson(\Corncakes\MemberBundle\Entity\ChurchPerson $churchPersons)
    {
        $this->churchPersons[] = $churchPersons;

        return $this;
    }

    /**
     * Remove churchPersons
     *
     * @param \Corncakes\MemberBundle\Entity\ChurchPerson $churchPersons
     */
    public function removeChurchPerson(\Corncakes\MemberBundle\Entity\ChurchPerson $churchPersons)
    {
        $this->churchPersons->removeElement($churchPersons);
    }

    /**
     * Get churchPersons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChurchPersons()
    {
        return $this->churchPersons;
    }

    /**
     * Add departmentPersons
     *
     * @param \Corncakes\MemberBundle\Entity\DepartmentPerson $departmentPersons
     * @return PersonType
     */
    public function addDepartmentPerson(\Corncakes\MemberBundle\Entity\DepartmentPerson $departmentPersons)
    {
        $this->departmentPersons[] = $departmentPersons;

        return $this;
    }

    /**
     * Remove departmentPersons
     *
     * @param \Corncakes\MemberBundle\Entity\DepartmentPerson $departmentPersons
     */
    public function removeDepartmentPerson(\Corncakes\MemberBundle\Entity\DepartmentPerson $departmentPersons)
    {
        $this->departmentPersons->removeElement($departmentPersons);
    }

    /**
     * Get departmentPersons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepartmentPersons()
    {
        return $this->departmentPersons;
    }
}
