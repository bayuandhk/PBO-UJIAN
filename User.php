<?php
class User {
    private $username;
    private $password;

   
    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

   
    public function validate() {
      
        $valid_username = 'bayu';
        $valid_password = '1234';

        return $this->username === $valid_username && $this->password === $valid_password;
    }

    
    public function login() {
        if ($this->validate()) {
            $_SESSION['loggedin'] = true;
            header('Location: beranda.php');
            exit();
        } else {
            header('Location: login.php?error=true');
            exit();
        }
    }
}
?>
