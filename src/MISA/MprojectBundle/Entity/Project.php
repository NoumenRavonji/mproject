<?php

namespace MISA\MprojectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MISA\MprojectBundle\Entity\ProjectRepository")
 */
class Project
{
    /**
    *@ORM\OneToOne(targetEntity="MISA\MprojectBundle\Entity\Assignation", mappedBy="project", cascade={"persist"} )
    *@ORM\JoinColumn(nullable=true)
    */
    private $assignation;

    /**
    *@ORM\ManyToOne(targetEntity="MISA\MprojectBundle\Entity\Client", cascade={"persist"})
    *@ORM\JoinColumn(nullable=false)
    */
    private $client;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_livraison", type="datetime")
     */
    private $dateLivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="langages", type="string", length=255)
     */
    private $langages;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=100)
     */
    private $etat;


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
     * Set nom
     *
     * @param string $nom
     * @return Project
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set dateLivraison
     *
     * @param \DateTime $dateLivraison
     * @return Project
     */
    public function setDateLivraison($dateLivraison)
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

    /**
     * Get dateLivraison
     *
     * @return \DateTime 
     */
    public function getDateLivraison()
    {
        return $this->dateLivraison;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Project
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set langages
     *
     * @param string $langages
     * @return Project
     */
    public function setLangages($langages)
    {
        $this->langages = $langages;

        return $this;
    }

    /**
     * Get langages
     *
     * @return string 
     */
    public function getLangages()
    {
        return $this->langages;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Project
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }


    /**
     * Set client
     *
     * @param \MISA\MprojectBundle\Entity\Client $client
     * @return Project
     */
    public function setClient(\MISA\MprojectBundle\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \MISA\MprojectBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set assignation
     *
     * @param \MISA\MprojectBundle\Entity\Assignation $assignation
     * @return Project
     */
    public function setAssignation(\MISA\MprojectBundle\Entity\Assignation $assignation = null)
    {
        $this->assignation = $assignation;

        return $this;
    }

    /**
     * Get assignation
     *
     * @return \MISA\MprojectBundle\Entity\Assignation 
     */
    public function getAssignation()
    {
        return $this->assignation;
    }
}
