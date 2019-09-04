<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Meuble
 *
 * @ORM\Table(name="meuble", indexes={@ORM\Index(name="idTypeMeuble", columns={"idTypeMeuble"})})
 * @ORM\Entity(repositoryClass="App\Repository\MeubleRepository")
 */
class Meuble
{
    /**
     * @var int
     *
     * @ORM\Column(name="idMeuble", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmeuble;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelleMeuble", type="string", length=25, nullable=true)
     */
    private $libellemeuble;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matiere", type="string", length=0, nullable=true)
     */
    private $matiere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="couleur", type="string", length=25, nullable=true)
     */
    private $couleur;

    /**
     * @var \Typemeuble
     *
     * @ORM\ManyToOne(targetEntity="Typemeuble")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTypeMeuble", referencedColumnName="idTypeMeuble")
     * })
     */
    private $idtypemeuble;

    public function getIdmeuble(): ?int
    {
        return $this->idmeuble;
    }

    public function getLibellemeuble(): ?string
    {
        return $this->libellemeuble;
    }

    public function setLibellemeuble(?string $libellemeuble): self
    {
        $this->libellemeuble = $libellemeuble;

        return $this;
    }

    public function getMatiere(): ?string
    {
        return $this->matiere;
    }

    public function setMatiere(?string $matiere): self
    {
        $this->matiere = $matiere;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(?string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getIdtypemeuble(): ?Typemeuble
    {
        return $this->idtypemeuble;
    }

    public function setIdtypemeuble(?Typemeuble $idtypemeuble): self
    {
        $this->idtypemeuble = $idtypemeuble;

        return $this;
    }


}
