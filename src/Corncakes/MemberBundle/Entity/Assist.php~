<?php

namespace Corncakes\MemberBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assist
 *
 * @ORM\Table(name="assists")
 * @ORM\Entity(repositoryClass="Corncakes\MemberBundle\Repository\AssistRepository")
 */
class Assist
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
     * @var \DateTime
     *
     * @ORM\Column(name="arrived_at", type="datetime")
     */
    private $arrivedAt;

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
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="assists")
     */
    private $person;

    /**
     * @ORM\ManyToOne(targetEntity="AssistType", inversedBy="assists")
     */
    private $assistType;

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
     * Set arrivedAt
     *
     * @param \DateTime $arrivedAt
     * @return Assist
     */
    public function setArrivedAt($arrivedAt)
    {
        $this->arrivedAt = $arrivedAt;

        return $this;
    }

    /**
     * Get arrivedAt
     *
     * @return \DateTime 
     */
    public function getArrivedAt()
    {
        return $this->arrivedAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Assist
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
     * @return Assist
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
     * Set person
     *
     * @param \Corncakes\MemberBundle\Entity\Person $person
     * @return Assist
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
     * Set assistType
     *
     * @param \Corncakes\MemberBundle\Entity\AssistType $assistType
     * @return Assist
     */
    public function setAssistType(\Corncakes\MemberBundle\Entity\AssistType $assistType = null)
    {
        $this->assistType = $assistType;

        return $this;
    }

    /**
     * Get assistType
     *
     * @return \Corncakes\MemberBundle\Entity\AssistType 
     */
    public function getAssistType()
    {
        return $this->assistType;
    }
}
