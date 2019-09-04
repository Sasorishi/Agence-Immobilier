<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="idClient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclient;

    /**
     * @var string
     *
     * @ORM\Column(name="nomClient", type="string", length=25, nullable=false)
     */
    private $nomclient;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomClient", type="string", length=25, nullable=false)
     */
    private $prenomclient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telClient", type="string", length=20, nullable=true)
     */
    private $telclient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailClient", type="string", length=40, nullable=true)
     */
    private $emailclient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mdpClient", type="string", length=25, nullable=true)
     */
    private $mdpclient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=25, nullable=true)
     */
    private $image;

    public function getIdclient(): ?int
    {
        return $this->idclient;
    }

    public function getNomclient(): ?string
    {
        return $this->nomclient;
    }

    public function setNomclient(string $nomclient): self
    {
        $this->nomclient = $nomclient;

        return $this;
    }

    public function getPrenomclient(): ?string
    {
        return $this->prenomclient;
    }

    public function setPrenomclient(string $prenomclient): self
    {
        $this->prenomclient = $prenomclient;

        return $this;
    }

    public function getTelclient(): ?string
    {
        return $this->telclient;
    }

    public function setTelclient(?string $telclient): self
    {
        $this->telclient = $telclient;

        return $this;
    }

    public function getEmailclient(): ?string
    {
        return $this->emailclient;
    }

    public function setEmailclient(?string $emailclient): self
    {
        $this->emailclient = $emailclient;

        return $this;
    }

    public function getMdpclient(): ?string
    {
        return $this->mdpclient;
    }

    public function setMdpclient(?string $mdpclient): self
    {
        $this->mdpclient = $mdpclient;

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
