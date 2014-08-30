<?php

namespace Project\CompositionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Line
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Line
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var array
     *
     * @ORM\Column(name="derivation", type="array")
     */
    private $derivation;

    /**
     * @var string
     *
     * @ORM\Column(name="meaning", type="string", length=255)
     */
    private $meaning;

    /**
     * @var integer
     *
     * @ORM\Column(name="stanzaId", type="integer")
     */
    private $stanzaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sectionId", type="integer")
     */
    private $sectionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="compositionId", type="integer")
     */
    private $compositionId;


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
     * Set derivation
     *
     * @param array $derivation
     * @return Line
     */
    public function setDerivation($derivation)
    {
        $this->derivation = $derivation;

        return $this;
    }

    /**
     * Get derivation
     *
     * @return array 
     */
    public function getDerivation()
    {
        return $this->derivation;
    }

    /**
     * Set meaning
     *
     * @param string $meaning
     * @return Line
     */
    public function setMeaning($meaning)
    {
        $this->meaning = $meaning;

        return $this;
    }

    /**
     * Get meaning
     *
     * @return string 
     */
    public function getMeaning()
    {
        return $this->meaning;
    }

    /**
     * Set stanzaId
     *
     * @param integer $stanzaId
     * @return Line
     */
    public function setStanzaId($stanzaId)
    {
        $this->stanzaId = $stanzaId;

        return $this;
    }

    /**
     * Get stanzaId
     *
     * @return integer 
     */
    public function getStanzaId()
    {
        return $this->stanzaId;
    }

    /**
     * Set sectionId
     *
     * @param integer $sectionId
     * @return Line
     */
    public function setSectionId($sectionId)
    {
        $this->sectionId = $sectionId;

        return $this;
    }

    /**
     * Get sectionId
     *
     * @return integer 
     */
    public function getSectionId()
    {
        return $this->sectionId;
    }

    /**
     * Set compositionId
     *
     * @param integer $compositionId
     * @return Line
     */
    public function setCompositionId($compositionId)
    {
        $this->compositionId = $compositionId;

        return $this;
    }

    /**
     * Get compositionId
     *
     * @return integer 
     */
    public function getCompositionId()
    {
        return $this->compositionId;
    }
}
