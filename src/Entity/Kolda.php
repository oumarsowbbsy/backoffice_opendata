<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\KoldaRepository")
 */
class Kolda
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Departement", type="string", length=18, nullable=true)
     */
    private $departement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Collectivite", type="string", length=19, nullable=true)
     */
    private $collectivite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Lieudevote", type="string", length=36, nullable=true)
     */
    private $lieudevote;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Bureau de votes", type="integer", nullable=true)
     */
    private $bureauDeVotes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nombreelecteur", type="integer", nullable=true)
     */
    private $nombreelecteur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(?string $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

    public function getCollectivite(): ?string
    {
        return $this->collectivite;
    }

    public function setCollectivite(?string $collectivite): self
    {
        $this->collectivite = $collectivite;

        return $this;
    }

    public function getLieudevote(): ?string
    {
        return $this->lieudevote;
    }

    public function setLieudevote(?string $lieudevote): self
    {
        $this->lieudevote = $lieudevote;

        return $this;
    }

    public function getBureauDeVotes(): ?int
    {
        return $this->bureauDeVotes;
    }

    public function setBureauDeVotes(?int $bureauDeVotes): self
    {
        $this->bureauDeVotes = $bureauDeVotes;

        return $this;
    }

    public function getNombreelecteur(): ?int
    {
        return $this->nombreelecteur;
    }

    public function setNombreelecteur(?int $nombreelecteur): self
    {
        $this->nombreelecteur = $nombreelecteur;

        return $this;
    }


}
