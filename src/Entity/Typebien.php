<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typebien
 *
 * @ORM\Table(name="typebien")
 * @ORM\Entity(repositoryClass="App\Repository\TypebienRepository")
 */
class Typebien
{
    /**
     * @var int
     *
     * @ORM\Column(name="idTypeBien", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypebien;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelleTypeBien", type="string", length=0, nullable=true)
     */
    private $libelletypebien;

    public function getIdtypebien(): ?int
    {
        return $this->idtypebien;
    }

    public function getLibelletypebien(): ?string
    {
        return $this->libelletypebien;
    }

    public function setLibelletypebien(?string $libelletypebien): self
    {
        $this->libelletypebien = $libelletypebien;

        return $this;
    }


}
