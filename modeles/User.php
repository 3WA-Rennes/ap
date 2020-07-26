<?php

abstract class  User 
{
	protected $id;
	protected $email;
	protected $createdAt;
	protected $name;
	protected $firstName;
	protected $password;
	protected $role;
	protected $activated;
	public const SITENAME = "metaCreaCo";


	

	/**
	 * Get the value of id
	 */ 
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the value of email
	 */ 
	public function getEmail()
	{
		return $this->email; 
	}

	/**
	 * Set the value of email
	 *
	 * @return  self
	 */ 
	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * Get the value of createdAt
	 */ 
	public function getCreatedAt()
	{
		return $this->createdAt;
	}

	/**
	 * Set the value of createdAt
	 *
	 * @return  self
	 */ 
	public function setCreatedAt($createdAt)
	{
		$this->createdAt = $createdAt;

		return $this;
	}

	/**
	 * Get the value of name
	 */ 
	public function getName()
	{
		// return $this->name; METHODE 1 CLASSIQUE SANS OPERATEUR DE RESOLUTION DE PORTEE
		echo $this->name;
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
	 * Get the value of firstName
	 */ 
	public function getFirstName()
	{
		return $this->firstName;
	}

	/**
	 * Set the value of firstName
	 *
	 * @return  self
	 */ 
	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;

		return $this;
	}

	/**
	 * Get the value of password
	 */ 
	public function getPassword()
	{
		return $this->password;
	}

	/**
	 * Set the value of password
	 *
	 * @return  self
	 */ 
	public function setPassword($password)
	{
		$this->password = $password;
		return $this;
	}

	/**
	 * Get the value of role
	 */ 
	public function getRole()
	{
		return $this->role;
	}

	/**
	 * Set the value of role
	 *
	 * @return  self
	 */ 
	public function setRole($role)
	{
		$this->role = $role;

		return $this;
	}

	/**
	 * Get the value of activated
	 */ 
	public function getActivated()
	{
		return $this->activated;
	}

	/**
	 * Set the value of activated
	 *
	 * @return  self
	 */ 
	public function setActivated($activated)
	{
		$this->activated = $activated;

		return $this;
	}
}

