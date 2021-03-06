<?php   

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use phpDocumentor\Reflection\DocBlock\Tags\Param;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/** 
 * A manufacturer
 * 
 * @ORM\Entity
 */
#[ApiResource]
class Manufacturer
{
    /** 
     * The id of the manufacturer 
     * 
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /** 
     * The name of the manufacturer 
     * 
     * @ORM\Column    
     */
    private string $name = '';

    /** 
     * The description of the manufacturer
     * 
     * @ORM\Column(type="text")
     */
    private string $description = '';

    /** 
     * The country code of the manufacturer
     * 
     * @ORM\Column(length = 3)
     */
    private string $countryCode = '';

    /** 
     * The date that the manufacturer was listed
     * 
     * @ORM\column(type="datetime")
     * 
     * 
     */
    #[Assert\NotNull]
    private ?\DateTimeInterface $listedDate = null;    

    /**
     * @var Product[] Available products from this manufacturer
     * 
     * @ORM\OneToMany(
     * targetEntity="Product", 
     * mappedBy="manufacturer",
     * cascade={"persist", "remove"})
     */
    private iterable $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of countryCode
     */ 
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set the value of countryCode
     *
     * @return  self
     */ 
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get the value of listedDate
     */ 
    public function getListedDate()
    {
        return $this->listedDate;
    }

    /**
     * Set the value of listedDate
     *
     * @return  self
     */ 
    public function setListedDate($listedDate)
    {
        $this->listedDate = $listedDate;

        return $this;
    }

    /**
     * Get available products from this manufacturer
     *
     * @return  Product[]
     */ 
    public function getProducts(): iterable|ArrayCollection
    {
        return $this->products;
    }
}