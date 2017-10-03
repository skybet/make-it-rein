<?php
class users {
  private $id;
  private $email;


  public function __construct($email = null){
    $this->email = $email;

  }

  public function fromArray(array $a){
    $this->id = $a["Id"];
    $this->email = $a["Email"];
  }

  public function setId($id){
    $this->id = $id;
  }

  public function getId(){
    return $this->id;
  }

  public function setEmail($email){
    $this->email = $email;
  }

  public function getEmail(){
    return $this->email;
  }
}
?>
