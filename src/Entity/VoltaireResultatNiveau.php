<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VoltaireResultatNiveauRepository")
 */
class VoltaireResultatNiveau
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="string", length=255)
     */
    private $idEtudiant;

    /**
     * @ORM\Id()
     * @ORM\Column(type="string", length=255)
     */
    private $idNiveau;

    /**
     * @ORM\Id()
     * @ORM\Column(type="string", length=255)
     */
    private $dateExport;

    /**
     * @ORM\Column(type="date")
     */
    private $derniereUtilisation;

    /**
     * @ORM\Column(type="time")
     */
    private $tpsTotal;

    /**
     * @ORM\Column(type="integer")
     */
    private $niveauAtteint;

    /**
     * @ORM\Column(type="integer")
     */
    private $scoreEvaluation;

    /**
     * @ORM\Column(type="integer")
     */
    private $note;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEtudiant(): ?string
    {
        return $this->idEtudiant;
    }

    public function setIdEtudiant(string $idEtudiant): self
    {
        $this->idEtudiant = $idEtudiant;

        return $this;
    }

    public function getIdNiveau(): ?string
    {
        return $this->idNiveau;
    }

    public function setIdNiveau(string $idNiveau): self
    {
        $this->idNiveau = $idNiveau;

        return $this;
    }


    public function getDateExport(): ?string
    {
        return $this->dateExport;
    }

    public function setDateExport(string $dateExport): self
    {
        $this->dateExport = $dateExport;

        return $this;
    }

    public function getDerniereUtilisation(): ?\DateTimeInterface
    {
        return $this->derniereUtilisation;
    }

    public function setDerniereUtilisation(\DateTimeInterface $derniereUtilisation): self
    {
        $this->derniereUtilisation = $derniereUtilisation;

        return $this;
    }

    public function getTpsTotal(): ?\DateTimeInterface
    {
        return $this->tpsTotal;
    }

    public function setTpsTotal(\DateTimeInterface $tpsTotal): self
    {
        $this->tpsTotal = $tpsTotal;

        return $this;
    }

    public function getNiveauAtteint(): ?int
    {
        return $this->niveauAtteint;
    }

    public function setNiveauAtteint(int $niveauAtteint): self
    {
        $this->niveauAtteint = $niveauAtteint;

        return $this;
    }

    public function getScoreEvaluation(): ?int
    {
        return $this->scoreEvaluation;
    }

    public function setScoreEvaluation(int $scoreEvaluation): self
    {
        $this->scoreEvaluation = $scoreEvaluation;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): self
    {
        $this->note = $note;

        return $this;
    }
}
