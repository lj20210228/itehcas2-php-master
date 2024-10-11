<?php
class User{
   public $id;
   public $username;
   public $password;
   public function __consturct($id=null,$username=null,$password=null)
   {
    $this->id=$id;
    $this->username=$username;
    $this->password=$password;
   }
   public static function logInUser($username,$password,mysqli $conn)
   {
    $query="SELECT *FROM user WHERE username->$uname=$username and password->$upass=$password";


   }

}
?>