<?php

namespace App\Entity;

use App\Repository\CompteBancaireRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;

/**
 * @ORM\Entity(repositoryClass=CompteBancaireRepository::class)
 * @ApiResource
 */
class CompteBancaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=27)
     */
    private $IBAN;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $BIC;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $refIdPartenaire;

    /**
     * @ORM\Column(type="float")
     */
    private $balance;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateSuppr;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="compteBancaires")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    /**
     * @ORM\OneToOne(targetEntity=CarteBancaire::class, inversedBy="compteBancaire", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @ApiSubresource
     */
    private $carteBancaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIBAN(): ?string
    {
        return $this->IBAN;
    }

    public function setIBAN(string $IBAN): self
    {
        $this->IBAN = $IBAN;

        return $this;
    }

    public function getBIC(): ?string
    {
        return $this->BIC;
    }

    public function setBIC(string $BIC): self
    {
        $this->BIC = $BIC;

        return $this;
    }

    public function getRefIdPartenaire(): ?string
    {
        return $this->refIdPartenaire;
    }

    public function setRefIdPartenaire(string $refIdPartenaire): self
    {
        $this->refIdPartenaire = $refIdPartenaire;

        return $this;
    }

    public function getBalance(): ?float
    {
        return $this->balance;
    }

    public function setBalance(float $balance): self
    {
        $this->balance = $balance;

        return $this;
    }

    public function getDateSuppr(): ?\DateTimeInterface
    {
        return $this->dateSuppr;
    }

    public function setDateSuppr(\DateTimeInterface $dateSuppr): self
    {
        $this->dateSuppr = $dateSuppr;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getCarteBancaire(): ?CarteBancaire
    {
        return $this->carteBancaire;
    }

    public function setCarteBancaire(CarteBancaire $carteBancaire): self
    {
        // set the owning side of the relation if necessary
        if ($carteBancaire->getCompteBancaire() !== $this) {
            $carteBancaire->setCompteBancaire($this);
        }

        $this->carteBancaire = $carteBancaire;

        return $this;
    }
}
