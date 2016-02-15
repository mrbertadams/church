<?php

namespace Corncakes\MemberBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Department
 *
 * @ORM\Table(name="departments")
 * @ORM\Entity(repositoryClass="Corncakes\MemberBundle\Repository\DepartmentRepository")
 */
class Department
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
     * @ORM\Column(name="name", type="string", length=45, unique=true)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="DepartmentPerson", mappedBy="department")
     */
    private $departmentPersons;

    /**
     * Department constructor.
     */
    public function __construct()
    {
        $this->departmentPersons = new ArrayCollection();
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
     * @return Department
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
     * Add departmentPersons
     *
     * @param \Corncakes\MemberBundle\Entity\DepartmentPerson $departmentPersons
     * @return Department
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
