<?php
    class User {
        protected $id;
        protected $username;
        protected $password;
        protected $role;

        public function __construct($i, $u, $p, $r) {
            $this->id = $i;
            $this->username = $u;
            $this->password = $p;
            $this->role = $r;
        }
    }
?>