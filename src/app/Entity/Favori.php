<?php

namespace Entity;

class Favori
{
    // Propriétés

    /**
     * @var int id Primary Key
     */
    private $id;

    /**
     * @var User User of the Favori
     */
    private $user;

    /**
     * @var Item Item of the Favori
     */
    private $item;

    // Constructor

    /**
     * Favori constructor
     *
     * @param  int  $id  id Primary Key
     * @param  User  $user  User of the Favori
     * @param  Item  $item  Car of the Favori
     *
     * @return  void
     */
    public function __construct(int $id, user $user = null, Item $item = null)
    {
        $this->id = $id;
        $this->user = $user;
        $this->item = $item;
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
     * Get User of the Favori
     *
     * @return  User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set User of the Favori
     *
     * @param  User  $user  User of the Favori
     *
     * @return  self
     */
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get Item of the Favori
     *
     * @return  Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set Car of the Favori
     *
     * @param  Car  $car  Car of the Favori
     *
     * @return  self
     */
    public function setCar(Item $item)
    {
        $this->item = $item;

        return $this;
    }
}
