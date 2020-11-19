<?php

namespace Proximify\ReferenceManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

abstract class Collection
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
     * @ORM\ManyToMany(targetEntity=Reference::class, inversedBy="user")
     */
    protected $references;

    public function __construct()
    {
        $this->references = new ArrayCollection();
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getReferences(): ?Reference
    {
        return $this->references;
    }

    public function setReferences(?Reference $references): self
    {
        $this->references = $references;

        return $this;
    }
}