<?php

namespace App\Entity;

use App\Repository\CarteBancaireRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * @ORM\Entity(repositoryClass=CarteBancaireRepository::class)
 * @ApiResource
 */
class CarteBancaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=19)
     */
    private $numero;

    /**
     * @ORM\Column(type="string", length=6)
     */
    private $statut;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateExpiration;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateSuppr;

    /**
     * @ORM\OneToOne(targetEntity=CompteBancaire::class, mappedBy="carteBancaire", cascade={"persist", "remove"})
     */
    private $compteBancaire;

    const STATUT_ACTIVEE = 'activé';
    const STATUT_FERMEE = 'fermée';
    const STATUT_VOLEE = 'volée';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        if(!in_array($statut, array(self::STATUT_ACTIVEE,self::STATUT_FERMEE,self::STATUT_VOLEE))){
            throw new \InvalidArgumentException("Statut invalide");
        }
        $this->statut = $statut;

        return $this;
    }

    public function getDateExpiration(): ?\DateTimeInterface
    {
        return $this->dateExpiration;
    }

    public function setDateExpiration(\DateTimeInterface $dateExpiration): self
    {
        $this->dateExpiration = $dateExpiration;

        return $this;
    }

    public function getDateSuppr(): ?\DateTimeInterface
    {
        return $this->dateSuppr;
    }

    public function setDateSuppr(?\DateTimeInterface $dateSuppr): self
    {
        $this->dateSuppr = $dateSuppr;

        return $this;
    }

    public function getCompteBancaire(): ?CompteBancaire
    {
        return $this->compteBancaire;
    }

    public function setCompteBancaire(CompteBancaire $compteBancaire): self
    {
        $this->compteBancaire = $compteBancaire;

        return $this;
    }
}
