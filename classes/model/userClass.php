<?php
//Bart
class User {

    private $id;
    private $username;
	private $password;    
    private $city;

    public function User($id, $username, $password, $city){
    
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->city = $city;
          
    }    
	public function getId() {
        return $this->id;
    }	
    public function getUsername() {
        return $this->username;
    }    
    public function getPassword() {
        return $this->password;
    }    
    public function getCity() {
        return $this->city;
    }
}
?>