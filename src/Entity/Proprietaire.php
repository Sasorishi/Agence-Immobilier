<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proprietaire
 *
 * @ORM\Table(name="proprietaire")
 * @ORM\Entity(repositoryClass="App\Repository\ProprietaireRepository")
 */
class Proprietaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="idProprietaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproprietaire;

    /**
     * @var string
     *
     * @ORM\Column(name="nomProprietaire", type="string", length=25, nullable=false)
     */
    private $nomproprietaire;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomProprietaire", type="string", length=25, nullable=false)
     */
    private $prenomproprietaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telProprietaire", type="string", length=20, nullable=true)
     */
    private $telproprietaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailProprietaire", type="string", length=40, nullable=true)
     */
    private $emailproprietaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mdpProprietaire", type="string", length=25, nullable=true)
     */
    private $mdpproprietaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=25, nullable=true)
     */
    private $image;

    public function getIdproprietaire(): ?int
    {
        return $this->idproprietaire;
    }

    public function getNomproprietaire(): ?string
    {
        return $this->nomproprietaire;
    }

    public function setNomproprietaire(string $nomproprietaire): self
    {
        $this->nomproprietaire = $nomproprietaire;

        return $this;
    }

    public function getPrenomproprietaire(): ?string
    {
        return $this->prenomproprietaire;
    }

    public function setPrenomproprietaire(string $prenomproprietaire): self
    {
        $this->prenomproprietaire = $prenomproprietaire;

        return $this;
    }

    public function getTelproprietaire(): ?string
    {
        return $this->telproprietaire;
    }

    public function setTelproprietaire(?string $telproprietaire): self
    {
        $this->telproprietaire = $telproprietaire;

        return $this;
    }

    public function getEmailproprietaire(): ?string
    {
        return $this->emailproprietaire;
    }

    public function setEmailproprietaire(?string $emailproprietaire): self
    {
        $this->emailproprietaire = $emailproprietaire;

        return $this;
    }

    public function getMdpproprietaire(): ?string
    {
        return $this->mdpproprietaire;
    }

    public function setMdpproprietaire(?string $mdpproprietaire): self
    {
        $this->mdpproprietaire = $mdpproprietaire;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }


}
