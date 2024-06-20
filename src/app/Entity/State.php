<?php

namespace Entity;

class State
{
    // Properties

    /**
     * @var int id Primary Key
     */
    private $id;

    /**
     * @var string name of the State
     */
    private $name;

    // Constructor

    /**
     * State constructor
     *
     * @param  int  $id  id Primary Key
     * @param  string  $name  name of the State
     *
     * @return  void
     */
    public function __construct(int $id, string $name = null)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
}
