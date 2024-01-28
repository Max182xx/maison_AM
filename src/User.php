<?php 

namespace Mgarc\Vetements;

class User{

    public bool $isLogin = false;
    public string $email;
    public string $password;


    public function register($email, $password)
        {
            $this->email = $email;
            $this->password = $password;
        }
        public function login($email, $password)
        {
            if($this->email === $email && $this->password === $password){
                $this->isLogin = true;
                echo "toto";
            } else{}

        }
        public function checkLogin()
        {
            return $this-> isLogin;
        }
    
}