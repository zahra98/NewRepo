<?php
class User {
  private $name;
  private $email;
  private $phone;
  private $address;
  private $image;
  // Methods
  function set_user($name,$email,$phone,$address,$image) {
    $this->name = $name;
    $this->email = $email;
    $this->phone = $phone;
    $this->address = $address;
    $this->image = $image;
  }
  function get_user() {
    return $this->name;
  }
}
?>