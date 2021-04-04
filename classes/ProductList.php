<?php

Class ProductList {
    private $_list = array();
    private $productCount = 0;
 
  public function __construct(array $products )
  /* [["name" => anyName, "count" => AnyCount],] */
  {
    if (!empty($products))
    {
      foreach($products as $product)
      {
        $this->_list[] = $product;
      }
    }
  }
 
  public function add($product)
  {
    $this->_list[] = $product;
  }
 
  public function find($filter)
  {
    $recs = array();
    foreach($this->_list as $product)
    {
      if ($filter->filter($product))
        $recs[] = $product;
    }
    return $recs;
  }
}