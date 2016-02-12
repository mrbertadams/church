<?php

namespace Corncakes\MemberBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Cell
 *
 * @ORM\Table(name="cells")
 * @ORM\Entity(repositoryClass="Corncakes\MemberBundle\Repository\CellRepository")
 */
class Cell
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
     * @ORM\OneToMany(targetEntity="CellControl", mappedBy="cell")
     */
    private $cellControls;

    /**
     * @ORM\ManyToMany(targetEntity="Person", mappedBy="cells")
     */
    private $persons;

    /**
     * Cell constructor.
     */
    public function __construct()
    {
        $this->cellControls = new ArrayCollection();
        $this->persons      = new ArrayCollection();
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
     * @return Cell
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
     * @return Cell
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
     * Add cellControls
     *
     * @param \Corncakes\MemberBundle\Entity\CellControl $cellControls
     * @return Cell
     */
    public function addCellControl(\Corncakes\MemberBundle\Entity\CellControl $cellControls)
    {
        $this->cellControls[] = $cellControls;

        return $this;
    }

    /**
     * Remove cellControls
     *
     * @param \Corncakes\MemberBundle\Entity\CellControl $cellControls
     */
    public function removeCellControl(\Corncakes\MemberBundle\Entity\CellControl $cellControls)
    {
        $this->cellControls->removeElement($cellControls);
    }

    /**
     * Get cellControls
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCellControls()
    {
        return $this->cellControls;
    }

    /**
     * Add persons
     *
     * @param \Corncakes\MemberBundle\Entity\Person $persons
     * @return Cell
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

    /**
     * Get persons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersons()
    {
        return $this->persons;
    }
}
