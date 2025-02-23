<?php

    class Hash {
        public function md5Hash($str) {
            return md5($str)." HashClass";
        }

        public function sha1Hash($str) {
            return sha1($str);
        }
    }

    class User extends Hash {
        public $username;
        public $password;

        public function __construct($username, $password) {
            $this->username = $username;
         // $this->password = $this->md5Hash($password); // Bu sınıftaki metod kullanılır.
            $this->password = parent::md5Hash($password);   // Miras alınan sınıftaki metod kullanılır. 
        }

        public function showUser() {
            echo $this->username." ".$this->password;
        }

        public function md5Hash($str) {
            return md5($str)." UserClass";
        }
    }

    $User = new User('ismailbalci','123');
    $User->showUser();

?>