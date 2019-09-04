<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bien
 *
 * @ORM\Table(name="bien", indexes={@ORM\Index(name="idProprietaire", columns={"idProprietaire"}), @ORM\Index(name="idTypeBien", columns={"idTypeBien"})})
 * @ORM\Entity(repositoryClass="App\Repository\BienRepository")
 */
class Bien
{
    /**
     * @var int
     *
     * @ORM\Column(name="idBien", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbien;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prix", type="float", precision=8, scale=2, nullable=true)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=150, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="surface", type="string", length=5, nullable=false)
     */
    private $surface;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nombrePiece", type="integer", nullable=true)
     */
    private $nombrepiece;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nombreChambre", type="integer", nullable=true)
     */
    private $nombrechambre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="etage", type="integer", nullable=true)
     */
    private $etage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse", type="string", length=25, nullable=true)
     */
    private $adresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieu", type="string", length=25, nullable=true)
     */
    private $lieu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dateConstruction", type="string", length=5, nullable=true)
     */
    private $dateconstruction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=25, nullable=true)
     */
    private $image;

    /**
     * @var \Typebien
     *
     * @ORM\ManyToOne(targetEntity="Typebien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTypeBien", referencedColumnName="idTypeBien")
     * })
     */
    private $idtypebien;

    /**
     * @var \Proprietaire
     *
     * @ORM\ManyToOne(targetEntity="Proprietaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProprietaire", referencedColumnName="idProprietaire")
     * })
     */
    private $idproprietaire;

    public function getIdbien(): ?int
    {
        return $this->idbien;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSurface(): ?string
    {
        return $this->surface;
    }

    public function setSurface(string $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getNombrepiece(): ?int
    {
        return $this->nombrepiece;
    }

    public function setNombrepiece(?int $nombrepiece): self
    {
        $this->nombrepiece = $nombrepiece;

        return $this;
    }

    public function getNombrechambre(): ?int
    {
        return $this->nombrechambre;
    }

    public function setNombrechambre(?int $nombrechambre): self
    {
        $this->nombrechambre = $nombrechambre;

        return $this;
    }

    public function getEtage(): ?int
    {
        return $this->etage;
    }

    public function setEtage(?int $etage): self
    {
        $this->etage = $etage;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getDateconstruction(): ?string
    {
        return $this->dateconstruction;
    }

    public function setDateconstruction(?string $dateconstruction): self
    {
        $this->dateconstruction = $dateconstruction;

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

    public function getIdtypebien(): ?Typebien
    {
        return $this->idtypebien;
    }

    public function setIdtypebien(?Typebien $idtypebien): self
    {
        $this->idtypebien = $idtypebien;

        return $this;
    }

    public function getIdproprietaire(): ?Proprietaire
    {
        return $this->idproprietaire;
    }

    public function setIdproprietaire(?Proprietaire $idproprietaire): self
    {
        $this->idproprietaire = $idproprietaire;

        return $this;
    }


}
