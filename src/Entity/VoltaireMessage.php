<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VoltaireBaremeRepository")
 */
class VoltaireMessage
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $loginEtudiant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $loginEnseignant;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $message;

    public function getLoginEtudiant(): ?string
    {
        return $this->LoginEtudiant;
    }

    public function setLoginEtudiant(string $loginEtudiant): self
    {
        $this->loginEtudiant = $loginEtudiant;

        return $this;
    }

    public function getLoginEnseignant(): ?string
    {
        return $this->loginEnseignant;
    }

    public function setLoginEnseignant(string $loginEnseignant): self
    {
        $this->loginEnseignant = $loginEnseignant;

        return $this;
    }
    
    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
