<?php

namespace Corncakes\MemberBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * AssistType
 *
 * @ORM\Table(name="assist_types")
 * @ORM\Entity(repositoryClass="Corncakes\MemberBundle\Repository\AssistTypeRepository")
 */
class AssistType
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
     * @ORM\OneToMany(targetEntity="Assist", mappedBy="assistType")
     */
    private $assists;

    /**
     * AssistType constructor.
     */
    public function __construct()
    {
        $this->assists = new ArrayCollection();
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
     * @return AssistType
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
     * Add assists
     *
     * @param \Corncakes\MemberBundle\Entity\Assist $assists
     * @return AssistType
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
}
