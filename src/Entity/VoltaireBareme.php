<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VoltaireBaremeRepository")
 */
class VoltaireBareme
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomBareme;

    /**
     * @ORM\Column(type="integer")
     */
    private $favoriBareme;

    /**
     * @ORM\Column(type="integer")
     */
    private $idCritere;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomBareme(): ?string
    {
        return $this->nomBareme;
    }

    public function setNomBareme(string $nomBareme): self
    {
        $this->nomBareme = $nomBareme;

        return $this;
    }

    public function getFavoriBareme(): ?int
    {
        return $this->favoriBareme;
    }

    public function setFavoriBareme(int $favoriBareme): self
    {
        $this->favoriBareme = $favoriBareme;

        return $this;
    }
    
    public function getIdCritere(): ?int
    {
        return $this->idCritere;
    }

    public function setIdCritere(int $idCritere): self
    {
        $this->idCritere = $idCritere;

        return $this;
    }
}
