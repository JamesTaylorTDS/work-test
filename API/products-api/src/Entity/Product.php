<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * A product 
 * @ORM\Entity
 */
#[ApiResource]
class Product
{
    /** 
     * The id of product.
     * 
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * Manufactur part number
     * 
     * @ORM\Column
     */
    #[Assert\NotNull]
    private ?string $mpn = null;

    /**
     * The name of product
     * 
     * @ORM\Column
     */
    #[Assert\NotBlank]
    private string $name = '';

    /**
     * The description of product
     * 
     * @ORM\Column(type="text")
     */
    #[Assert\NotBlank]
    private string $description = '';

    /**
     * the date of issue of the product
     * 
     * @ORM\Column(type="datetime")
     */
    #[Assert\NotNull]
    private ?\DateTimeInterface $issueDate = null;

    /**
     * The product manufactor
     * 
     * @ORM\ManyToOne(targetEntity="Manufacturer", inversedBy="products")
     */
    private ?Manufacturer $manufacturer = null;

    /**
     * Get the id of product.
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get manufactur part number
     */ 
    public function getMpn()
    {
        return $this->mpn;
    }

    /**
     * Set manufactur part number
     *
     * @return  self
     */ 
    public function setMpn($mpn)
    {
        $this->mpn = $mpn;

        return $this;
    }

    /**
     * Get the name of product
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the name of product
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the description of product
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the description of product
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the date of issue of the product
     */ 
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Set the date of issue of the product
     *
     * @return  self
     */ 
    public function setIssueDate($issueDate)
    {
        $this->issueDate = $issueDate;

        return $this;
    }

    /**
     * Get the product manufactor
     */ 
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set the product manufactor
     *
     * @return  self
     */ 
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }
}