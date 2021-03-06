<?php

namespace Corncakes\MemberBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="persons")
 * @ORM\Entity(repositoryClass="Corncakes\MemberBundle\Repository\PersonRepository")
 */
class Person
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
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=16, nullable=true, unique=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=16, nullable=true)
     */
    private $phone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="datetime", nullable=true)
     */
    private $birthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="blob", nullable=true)
     */
    private $picture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

   /**
    * @ORM\ManyToOne(targetEntity="Gender", inversedBy="persons")
    */
    private $gender;

    /**
     * @ORM\ManyToOne(targetEntity="Status", inversedBy="persons")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Sector", inversedBy="persons")
     */
    private $sector;

    /**
     * @ORM\OneToMany(targetEntity="Assist", mappedBy="person")
     */
    private $assists;

    /**
     * @ORM\OneToMany(targetEntity="CellPerson", mappedBy="person")
     */
    private $cellPersons;

    /**
     * @ORM\OneToMany(targetEntity="ChurchPerson", mappedBy="person")
     */
    private $churchPersons;

    /**
     * @ORM\OneToMany(targetEntity="DepartmentPerson", mappedBy="person")
     */
    private $departmentPersons;

    /**
     * Person constructor.
     */
    public function __construct()
    {
        $this->assists              = new ArrayCollection();
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
     * Set firstName
     *
     * @param string $firstName
     * @return Person
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Person
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Person
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Person
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
     * Set mobile
     *
     * @param string $mobile
     * @return Person
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Person
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
     * Set birthdate
     *
     * @param \DateTime $birthdate
     * @return Person
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Person
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Person
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Person
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Get gender
     *
     * @return integer 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set gender
     *
     * @param \Corncakes\MemberBundle\Entity\Gender $gender
     * @return Person
     */
    public function setGender(\Corncakes\MemberBundle\Entity\Gender $gender = null)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Set status
     *
     * @param \Corncakes\MemberBundle\Entity\Status $status
     * @return Person
     */
    public function setStatus(\Corncakes\MemberBundle\Entity\Status $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \Corncakes\MemberBundle\Entity\Status 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set sector
     *
     * @param \Corncakes\MemberBundle\Entity\Sector $sector
     * @return Person
     */
    public function setSector(\Corncakes\MemberBundle\Entity\Sector $sector = null)
    {
        $this->sector = $sector;

        return $this;
    }

    /**
     * Get sector
     *
     * @return \Corncakes\MemberBundle\Entity\Sector 
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Add assists
     *
     * @param \Corncakes\MemberBundle\Entity\Assist $assists
     * @return Person
     */
    public function addAssist(\Corncakes\MemberBundle\Entity\Assist $assists)
    {
        $this->assists[] = $assists;

        return $this;
    }

    /**
     * Remove assists
     *
     * @param \Corncakes\MemberBundle\Entity\Assist $assists
     */
    public function removeAssist(\Corncakes\MemberBundle\Entity\Assist $assists)
    {
        $this->assists->removeElement($assists);
    }

    /**
     * Get assists
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssists()
    {
        return $this->assists;
    }

    /**
     * Add cellPersons
     *
     * @param \Corncakes\MemberBundle\Entity\CellPerson $cellPersons
     * @return Person
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
     * @return Person
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
     * @return Person
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
