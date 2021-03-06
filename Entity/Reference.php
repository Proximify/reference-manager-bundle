<?php

namespace Proximify\ReferenceManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

abstract class Reference
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
    protected $authors;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $year;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $title;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $starred = 0;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $authoredByMe = 0;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuthors(): ?string
    {
        return $this->authors;
    }

    public function setAuthors(string $authors): self
    {
        $this->authors = $authors;

        return $this;
    }

    public function getYear(): ?string
    {
        return $this->year;
    }

    public function setYear(string $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getStarred()
    {
        return $this->starred;
    }

    public function setStarred($starred)
    {
        $this->starred = $starred;
    }

    public function getAuthoredByMe()
    {
        return $this->authoredByMe;
    }

    public function setAuthoredByMe($authoredByMe)
    {
        $this->authoredByMe = $authoredByMe;
    }
}
