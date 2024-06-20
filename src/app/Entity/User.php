<?php

namespace Entity;

class User
{
    // Properties

    /**
     * @var int id Primary Key
     */
    private $id;

    /**
     * @var string email of the User
     */
    private $email;

    /**
     * @var string password of the User
     */
    private $password;

    /**
     * @var string firstName of the User
     */
    private $firstName;

    /**
     * @var string lastName of the User
     */
    private $lastName;

    /**
     * @var string phone of the User
     */
    private $phone;

    /**
     * @var array favoris of the User
     */
    private $favoris;

    /**
     * @var bool if User is Admin or Not
     */
    private $isAdmin;

    // Constructor

    /**
     * User constructor
     *
     * @param int $id User ID
     * @param string $email User email
     * @param string $password User password
     * @param string $firstName User first name
     * @param string $lastName User last name
     * @param string $phone User phone number
     * @param array $favoris User favoris
     * @param bool $isAdmin If User is an admin or not
     * @return void
     */
    public function __construct(int $id, string $email = null, string $password = null, string $firstName = null, string $lastName = null, string $phone = null, array $favoris = [], bool $isAdmin = null)
    {

        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->favoris = $favoris;
        $this->isAdmin = $isAdmin;
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
     * Get email of the User
     *
     * @return  string
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email of the User
     *
     * @param  string  $email  email of the User
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get password of the User
     *
     * @return  string
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set password of the User
     *
     * @param  string  $password  password of the User
     *
     * @return  self
     */ 
    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get firstName of the User
     *
     * @return  string
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set firstName of the User
     *
     * @param  string  $firstName  firstName of the User
     *
     * @return  self
     */ 
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get lastName of the User
     *
     * @return  string
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set lastName of the User
     *
     * @param  string  $lastName  lastName of the User
     *
     * @return  self
     */ 
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get phone of the User
     *
     * @return  string
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set phone of the User
     *
     * @param  string  $phone  phone of the User
     *
     * @return  self
     */ 
    public function setPhone(string $phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get favoris of the User
     *
     * @return  array
     */ 
    public function getFavoris()
    {
        return $this->favoris;
    }

    /**
     * Add the value to favoris
     *
     * @return  self
     */
    public function addFavori($favori)
    {
        array_push($this->favoris, $favori);

        return $this;
    }

    /**
     * Get if User is Admin or Not
     *
     * @return  bool
     */ 
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * Set if User is Admin or Not
     *
     * @param  bool  $isAdmin  if User is Admin or Not
     *
     * @return  self
     */ 
    public function setIsAdmin(bool $isAdmin)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }
}