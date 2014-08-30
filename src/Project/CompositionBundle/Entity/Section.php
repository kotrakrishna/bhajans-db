<?php
namespace Project\CompositionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="sections")
 */
class Section
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\ManyToOne(targetEntity="Composition", inversedBy="sections")
     * @ORM\JoinColumn(name="compositionId", referencedColumnName="id", nullable=false)
     **/
    protected $compositionId;

    /**
     * @param mixed $compositionId
     */
    public function setCompositionId($compositionId)
    {
        $this->compositionId = $compositionId;
    }

    /**
     * @return mixed
     */
    public function getCompositionId()
    {
        return $this->compositionId;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

}