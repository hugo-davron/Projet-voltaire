<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VoltaireModulesRepository")
 */
class VoltaireModules
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $idModule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomModule;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbReglesModule;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdModule(): ?int
    {
        return $this->idModule;
    }

    public function setIdModule(int $idModule): self
    {
        $this->idModule = $idModule;

        return $this;
    }

    public function getNomModule(): ?string
    {
        return $this->nomModule;
    }

    public function setNomModule(string $nomModule): self
    {
        $this->nomModule = $nomModule;

        return $this;
    }

    public function getNbReglesModule(): ?int
    {
        return $this->nbReglesModule;
    }

    public function setNbReglesModule(int $nbReglesModule): self
    {
        $this->nbReglesModule = $nbReglesModule;

        return $this;
    }
}
