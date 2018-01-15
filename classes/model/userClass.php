<?php
//Bart
class User {

    private $id;
    private $username;
	private $password;    
    
    public function User($id, $username, $password){
    
        $this->id = $id;
        $this->username = $username;
		$this->password = $password;
          
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
}
?>