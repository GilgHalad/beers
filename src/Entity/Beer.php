<?php

namespace App\Entity;

use App\Repository\BeerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BeerRepository::class)
 */
class Beer
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
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $first_brewed;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tagline;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_url;
 
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getFirstBrewed(): ?string
    {
        return $this->first_brewed;
    }

    public function setFirstBrewed(string $first_brewed): self
    {
        $this->first_brewed = $first_brewed;

        return $this;
    }

    public function getTagline(): ?string
    {
        return $this->tagline;
    }

    public function setTagline(string $tagline): self
    {
        $this->tagline = $tagline;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->image_url;
    }

    public function setImageUrl(string $taimage_urlgline): self
    {
        $this->image_url = $image_url;

        return $this;
    }

    public function __construct($beer){
        $this->id = $beer['id'];
        $this->name =$beer['name'];
        $this->description =$beer['description'];
        $this->first_brewed =$beer['first_brewed'];
        $this->image_url =$beer['image_url'];
        $this->tagline =$beer['tagline'];
    }
    
}
