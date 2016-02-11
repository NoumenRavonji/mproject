<?php

namespace MISA\MprojectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assignation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MISA\MprojectBundle\Entity\AssignationRepository")
 */
class Assignation
{
    /**
    *@ORM\ManyToOne(targetEntity="MISA\MprojectBundle\Entity\Developer", inversedBy="assignations", cascade={"persist"} )
    *@ORM\JoinColumn(nullable=true)
    */
    private $developer; 

    /**
    *@ORM\OneToOne(targetEntity="MISA\MprojectBundle\Entity\Project", inversedBy="assignation", cascade={"persist"} )
    *@ORM\JoinColumn(nullable=true)
    */
    private $project;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


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
     * Set developer
     *
     * @param \MISA\MprojectBundle\Entity\Developer $developer
     * @return Assignation
     */
    public function setDeveloper(\MISA\MprojectBundle\Entity\Developer $developer = null)
    {
        $this->developer = $developer;

        return $this;
    }

    /**
     * Get developer
     *
     * @return \MISA\MprojectBundle\Entity\Developer 
     */
    public function getDeveloper()
    {
        return $this->developer;
    }

    /**
     * Set project
     *
     * @param \MISA\MprojectBundle\Entity\Project $project
     * @return Assignation
     */
    public function setProject(\MISA\MprojectBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \MISA\MprojectBundle\Entity\Project 
     */
    public function getProject()
    {
        return $this->project;
    }
}
