<?php
/**
 * Menu Item class
 */
class MenuItem
{
  private $id;
  private $name;
  private $description;
  private $photo;
  private $category;

  public function id(){
    return $this->id;
  }
  public function name(){
    return $this->name;
  }
  public function decription(){
    return $this->description;
  }
  public function photo(){
    // return $this->$photo;
  }
  public function category(){
    return $this->$category;
  }

  public function set_id($value){
    return $this->id = $value;
  }
  public function set_name($value){
    return $this->name = $value;
  }
  public function set_description($value){
    return $this->description = $value;
  }
  public function set_category($value){
    return $this->category = $value;
  }
  public function set_photo($value){
    return $this->photo = $value;
  }

  function __construct()
  {
    // code...
  }
}


 ?>
