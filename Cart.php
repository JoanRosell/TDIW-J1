<?php
declare(strict_types = 1);

class Cart
{
    private $_userID;
    private $_products;

    public function __construct($id)
    {
        $this->_userID = $id;
        $this->_products = array();
    }

    public function getProducts() : array
    {
        return $this->_products;
    }

    public function getUserID() : int
    {
        return $this->_userID;
    }

    public function addProduct($productID) : void
    {
        if (array_key_exists($productID, $this->_products))
        {
            $this->_products[$productID]['units']++;
        }
        else
        {
            $this->_products[$productID] = [
                'units' => 1,
            ];
        }
    }

    public function removeProduct($productID) : void
    {
        if (array_key_exists($productID, $this->_products))
        {
            if ($this->_products[$productID]['units'] > 1)
                $this->_products[$productID]['units']--;
            else
                unset($this->_products[$productID]);
        }
    }

    public function isEmpty() : bool
    {
        return empty($this->_products);
    }

    public function clear() : void
    {
        $this->_products = [];
    }
}