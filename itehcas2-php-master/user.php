<?php 
class User{
    public $id;
    public $username;
    public $password;
    //php manual - constructors and destructors
    public function __construct($id = null, $username = null, $password = null)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }
    public static function logIn( $usr, mysqli $conn){
        $query="SELECT * FROM user WHERE username='$usr->username' and password='$usr->password' ";
        return $conn->query($query);

        
    }
}
?>