<?php

class UserList
{
  private $_list = array();
 
  public function __construct($names)
  {
    if ($names != null)
    {
      foreach($names as $name)
      {
        $this->_list[]= $name;
      }
    }
  }
 
  public function add($name)
  {
    $this->_list[] = $name;
  }
 
  public function find($filter)
  {
    $recs = array();
    foreach($this->_list as $user)
    {
      if ($filter->filter($user))
        $recs[] = $user;
    }
    return $recs;
  }
}