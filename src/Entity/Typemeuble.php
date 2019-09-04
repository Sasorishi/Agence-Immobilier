<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typemeuble
 *
 * @ORM\Table(name="typemeuble")
 * @ORM\Entity(repositoryClass="App\Repository\TypemeubleRepository")
 */
class Typemeuble
{
    /**
     * @var int
     *
     * @ORM\Column(name="idTypeMeuble", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypemeuble;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelleTypeMeuble", type="string", length=0, nullable=true)
     */
    private $libelletypemeuble;

    public function getIdtypemeuble(): ?int
    {
        return $this->idtypemeuble;
    }

    public function getLibelletypemeuble(): ?string
    {
        return $this->libelletypemeuble;
    }

    public function setLibelletypemeuble(?string $libelletypemeuble): self
    {
        $this->libelletypemeuble = $libelletypemeuble;

        return $this;
    }


}
