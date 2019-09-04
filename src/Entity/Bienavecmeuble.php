<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bienavecmeuble
 *
 * @ORM\Table(name="bienavecmeuble", indexes={@ORM\Index(name="idBien", columns={"idBien"}), @ORM\Index(name="idMeuble", columns={"idMeuble"})})
 * @ORM\Entity(repositoryClass="App\Repository\BienavecmeubleRepository")
 */
class Bienavecmeuble
{
    /**
     * @var int
     *
     * @ORM\Column(name="idbienAvecMeuble", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbienavecmeuble;

    /**
     * @var \Meuble
     *
     * @ORM\ManyToOne(targetEntity="Meuble")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMeuble", referencedColumnName="idMeuble")
     * })
     */
    private $idmeuble;

    /**
     * @var \Bien
     *
     * @ORM\ManyToOne(targetEntity="Bien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idBien", referencedColumnName="idBien")
     * })
     */
    private $idbien;

    public function getIdbienavecmeuble(): ?int
    {
        return $this->idbienavecmeuble;
    }

    public function getIdmeuble(): ?Meuble
    {
        return $this->idmeuble;
    }

    public function setIdmeuble(?Meuble $idmeuble): self
    {
        $this->idmeuble = $idmeuble;

        return $this;
    }

    public function getIdbien(): ?Bien
    {
        return $this->idbien;
    }

    public function setIdbien(?Bien $idbien): self
    {
        $this->idbien = $idbien;

        return $this;
    }


}
