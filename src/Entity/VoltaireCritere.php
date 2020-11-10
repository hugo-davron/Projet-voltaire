<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VoltaireCritereRepository")
 */
class VoltaireCritere
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $progression;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tpsUtilisation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $niveauAtteint;

    /**
     * @ORM\Column(type="integer")
     */
    private $evaluationFinale;

    /**
     * @ORM\GeneratedValue()
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $idCritere;

    public function getProgression(): ?string
    {
        return $this->progression;
    }

    public function setProgression(string $progression): self
    {
        $this->progression = $progression;

        return $this;
    }

    public function getTpsUtilisation(): ?string
    {
        return $this->tpsUtilisation;
    }

    public function setTpsUtilisation(string $tpsUtilisation): self
    {
        $this->tpsUtilisation = $tpsUtilisation;

        return $this;
    }

    public function getNiveauAtteint(): ?string
    {
        return $this->niveauAtteint;
    }

    public function setNiveauAtteint(string $niveauAtteint): self
    {
        $this->niveauAtteint = $niveauAtteint;

        return $this;
    }

    public function getEvaluationFinale(): ?int
    {
        return $this->evaluationFinale;
    }

    public function setEvaluationFinale(int $evaluationFinale): self
    {
        $this->evaluationFinale = $evaluationFinale;

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
