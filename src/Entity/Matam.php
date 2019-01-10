<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\MatamRepository")
 */
class Matam
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
     * @ORM\Column(name="Departement", type="string", length=13, nullable=true)
     */
    private $departement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Collectivite", type="string", length=24, nullable=true)
     */
    private $collectivite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Lieudevote", type="string", length=30, nullable=true)
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
     * @ORM\Column(name="Nombre electeur", type="integer", nullable=true)
     */
    private $nombreElecteur;

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

    public function getNombreElecteur(): ?int
    {
        return $this->nombreElecteur;
    }

    public function setNombreElecteur(?int $nombreElecteur): self
    {
        $this->nombreElecteur = $nombreElecteur;

        return $this;
    }


}
