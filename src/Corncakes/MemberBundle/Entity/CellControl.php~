<?php

namespace Corncakes\MemberBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CellControl
 *
 * @ORM\Table(name="cell_controls")
 * @ORM\Entity(repositoryClass="Corncakes\MemberBundle\Repository\CellControlRepository")
 */
class CellControl
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
     * @ORM\Column(name="ministration_at", type="datetime")
     */
    private $ministrationAt;

    /**
     * @var float
     *
     * @ORM\Column(name="offering", type="float")
     */
    private $offering;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="evaluation", type="string", length=255, nullable=true)
     */
    private $evaluation;

    /**
     * @var string
     *
     * @ORM\Column(name="projection", type="string", length=255, nullable=true)
     */
    private $projection;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ministrationAt
     *
     * @param \DateTime $ministrationAt
     * @return CellControl
     */
    public function setMinistrationAt($ministrationAt)
    {
        $this->ministrationAt = $ministrationAt;

        return $this;
    }

    /**
     * Get ministrationAt
     *
     * @return \DateTime 
     */
    public function getMinistrationAt()
    {
        return $this->ministrationAt;
    }

    /**
     * Set offering
     *
     * @param float $offering
     * @return CellControl
     */
    public function setOffering($offering)
    {
        $this->offering = $offering;

        return $this;
    }

    /**
     * Get offering
     *
     * @return float 
     */
    public function getOffering()
    {
        return $this->offering;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return CellControl
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set evaluation
     *
     * @param string $evaluation
     * @return CellControl
     */
    public function setEvaluation($evaluation)
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    /**
     * Get evaluation
     *
     * @return string 
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }

    /**
     * Set projection
     *
     * @param string $projection
     * @return CellControl
     */
    public function setProjection($projection)
    {
        $this->projection = $projection;

        return $this;
    }

    /**
     * Get projection
     *
     * @return string 
     */
    public function getProjection()
    {
        return $this->projection;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return CellControl
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
     * @return CellControl
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
}
