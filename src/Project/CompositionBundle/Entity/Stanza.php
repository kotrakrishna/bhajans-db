<?php

namespace Project\CompositionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stanza
 *
 * @ORM\Table(name="stanzas")
 * @ORM\Entity
 */
class Stanza
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
     * @ORM\Column(type="string")
     */
    protected $meaning;

    /**
     * @var integer
     *
     * @ORM\Column(name="serial", type="integer")
     */
    private $serial;

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
     *
     * @return Stanza
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
     * Set serial
     *
     * @param integer $serial
     *
     * @return Stanza
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * Get serial
     *
     * @return integer
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * Set sectionId
     *
     * @param integer $sectionId
     *
     * @return Stanza
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
     *
     * @return Stanza
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

    /**
     * Set meaning
     *
     * @param string $meaning
     * @return Stanza
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
}
