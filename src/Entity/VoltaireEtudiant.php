<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VoltaireEtudiantRepository")
 */
class VoltaireEtudiant
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomEtudiant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomEtudiant;

    /**
     * @ORM\Id()
     * @ORM\Column(type="string", length=255)
     */
    private $login;

    /**
     * @ORM\Column(type="integer")
     */
    private $idBareme;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $groupe;

    public function getNomEtudiant(): ?string
    {
        return $this->nomEtudiant;
    }

    public function setNomEtudiant(string $nomEtudiant): self
    {
        $this->nomEtudiant = $nomEtudiant;

        return $this;
    }

    public function getPrenomEtudiant(): ?string
    {
        return $this->prenomEtudiant;
    }

    public function setPrenomEtudiant(string $prenomEtudiant): self
    {
        $this->prenomEtudiant = $prenomEtudiant;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getIdBareme(): ?int
    {
        return $this->idBareme;
    }

    public function setIdBareme(int $idBareme): self
    {
        $this->idBareme = $idBareme;

        return $this;
    }

    public function getScoreEvaluationInitiale(): ?int
    {
        return $this->scoreEvaluationInitiale;
    }

    public function setScoreEvaluationInitiale(int $scoreEvaluationInitiale): self
    {
        $this->scoreEvaluationInitiale = $scoreEvaluationInitiale;

        return $this;
    }

      public function getGroupe(): ?string
    {
        return $this->groupe;
    }

    public function setGroupe(string $groupe): self
    {
        $this->groupe = $groupe;

        return $this;
    }
}
