<?php

namespace Entity;

class Item
{
    // Properties

    /**
     * @var int id Primary Key
     */
    private $id;

    /**
     * @var string name of the Item
     */
    private $name;

    /**
     * @var string description of the Item
     */
    private $description;

    /**
     * @var float price of the Item
     */
    private $price;

    /**
     * @var string url of picture of the Item
     */
    private $image;

    /**
     * @var Brand brand of the Item
     */
    private $brand;

    /**
     * @var Size size of the Item
     */
    private $size;

    /**
     * @var Categorie categorie of the Item
     */
    private $categorie;

    /**
     * @var State state of the Item
     */
    private $state;

    /**
     * @var Color color of the Item
     */
    private $color;

    // Constructor

    /**
     * Car constructor
     *
     * @param  int  $id  id Primary Key
     * @param  string  $name  name of the Item
     * @param  string  $description  description of the Item
     * @param  float  $price  price of the Item
     * @param  string  $image  url of picture of the Item
     * @param  Brand  $brand  brand of the Item
     * @param  Size  $size  size of the Item
     * @param  Categorie  $categorie  categorie of the Item
     * @param  State  $state  state of the Item
     * @param  Color  $color  color of the Item
     *
     * @return  void
     */
    public function __construct(int $id, string $name = null, string $description = null, float $price = null, string $image = null, Brand $brand = null, Size $size = null, Categorie $categorie = null, State $state = null, Color $color = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->brand = $brand;
        $this->size = $size;
        $this->categorie = $categorie;
        $this->state = $state;
        $this->color = $color;
    }

    /**
     * Get id Primary Key
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id Primary Key
     *
     * @param  int  $id  id Primary Key
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get name of the Item
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name of the Item
     *
     * @param  string  $name  name of the Item
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get description of the Item
     *
     * @return  string
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description of the Item
     *
     * @param  string  $description  description of the Item
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get price of the Item
     *
     * @return  float
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set price of the Item
     *
     * @param  float  $price  price of the Item
     *
     * @return  self
     */ 
    public function setPrice(float $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get url of picture of the Item
     *
     * @return  string
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set url of picture of the Item
     *
     * @param  string  $image  url of picture of the Item
     *
     * @return  self
     */ 
    public function setImage(string $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get brand of the Item
     *
     * @return  Brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set brand of the Item
     *
     * @param  Brand  $brand  brand of the Item
     *
     * @return  self
     */ 
    public function setBrand(Brand $brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get size of the Item
     *
     * @return  Size
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set size of the Item
     *
     * @param  Size  $size  size of the Item
     *
     * @return  self
     */ 
    public function setSize(Size $size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get categorie of the Item
     *
     * @return  Categorie
     */ 
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set categorie of the Item
     *
     * @param  Categorie  $categorie  categorie of the Item
     *
     * @return  self
     */ 
    public function setCategorie(Categorie $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get state of the Item
     *
     * @return  State
     */ 
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set state of the Item
     *
     * @param  State  $state  state of the Item
     *
     * @return  self
     */ 
    public function setState(State $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get color of the Item
     *
     * @return  Color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set color of the Item
     *
     * @param  Color  $color  color of the Item
     *
     * @return  self
     */ 
    public function setColor(Color $color)
    {
        $this->color = $color;

        return $this;
    }
}