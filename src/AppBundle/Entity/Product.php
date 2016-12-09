<?php

namespace AppBundle\Entity;

class Product
{
	private $id;
	private $name;
	private $category;
	private $sku;
	private $price;
	private $quantity;

	public function __construct($name, $price)
	{
		$this->setName($name);
		$this->setPrice($price);
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getCategory()
	{
		return $this->category;
	}

	public function setCategory($category)
	{
		$this->category = $category;
	}

	public function getSku()
	{
		return $this->sku;
	}

	public function setSku($sku)
	{
		$this->sku = $sku;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setPrice($price)
	{
		$this->price = $price;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
	}	
}