<?php

namespace Corncakes\MemberBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Church
 *
 * @ORM\Table(name="churches")
 * @ORM\Entity(repositoryClass="Corncakes\MemberBundle\Repository\ChurchRepository")
 */
class Church
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
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=16, nullable=true)
     */
    private $phone;

    /**
     * @ORM\OneToMany(targetEntity="CellPerson", mappedBy="church")
     */
    private $cellPersons;

    /**
     * @ORM\OneToMany(targetEntity="ChurchPerson", mappedBy="church")
     */
    private $churchPersons;

    /**
     * @ORM\OneToMany(targetEntity="DepartmentPerson", mappedBy="church")
     */
    private $departmentPersons;

    /**
     * Church constructor.
     */
    public function __construct()
    {
        $this->cellPersons          = new ArrayCollection();
        $this->churchPersons        = new ArrayCollection();
        $this->departmentPersons    = new ArrayCollection();
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
     * @return Church
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
     * Set address
     *
     * @param string $address
     * @return Church
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Church
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Add cellPersons
     *
     * @param \Corncakes\MemberBundle\Entity\CellPerson $cellPersons
     * @return Church
     */
    public function addCellPerson(\Corncakes\MemberBundle\Entity\CellPerson $cellPersons)
    {
        $this->cellPersons[] = $cellPersons;

        return $this;
    }

    /**
     * Remove cellPersons
     *
     * @param \Corncakes\MemberBundle\Entity\CellPerson $cellPersons
     */
    public function removeCellPerson(\Corncakes\MemberBundle\Entity\CellPerson $cellPersons)
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
     * @return Church
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
     * @return Church
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
