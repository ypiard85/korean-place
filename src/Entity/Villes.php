<?php

namespace App\Entity;

use App\Repository\VillesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VillesRepository::class)
 */
class Villes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=Lieux::class, mappedBy="villes")
     */
    private $citys;

    public function __construct()
    {
        $this->citys = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Lieux[]
     */
    public function getCitys(): Collection
    {
        return $this->citys;
    }

    public function addCity(Lieux $city): self
    {
        if (!$this->citys->contains($city)) {
            $this->citys[] = $city;
            $city->setVilles($this);
        }

        return $this;
    }

    public function removeCity(Lieux $city): self
    {
        if ($this->citys->removeElement($city)) {
            // set the owning side to null (unless already changed)
            if ($city->getVilles() === $this) {
                $city->setVilles(null);
            }
        }

        return $this;
    }
}
