<?php
    class User{
        
        private $username; //bien de private thi khi unserialize length se += 2.
        private $email;
        private $yearOfBirth;
        private $sex;
        // private $file;

        public function setUsername($username): void {
            $this->username = $username;
        }

        public function getUsername() {
            return $this->username;
        }

        public function setEmail($email): void {
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setYearOfBirth($yearOfBirth): void {
            $this->yearOfBirth = $yearOfBirth;
        }

        public function getYearOfBirth(){
            return $this->yearOfBirth;
        }

        public function setSex($sex): void {
            $this->sex = $sex;
        }

        public function getSex(){
            return $this->sex;
        }

        public function __toString()
        {
            return "Your info: ".$this->username." ".$this->email." ".$this->yearOfBirth." ".$this->sex;
        }

        //duoc goi khi unserialize, gia su khi deserialize thi thong tin se duoc luu vao file info.php.
        public function __wakeup()
        {
            //code loi doan nay.
            file_put_contents("about.php", "Your info: ".$this->username." ".$this->email." ".$this->yearOfBirth." ".$this->sex);
        }

        // public function __sleep()
        // {
        //     echo "sleep is calling";
        //     return ['username', 'email', 'yearOfBirth', 'sex'];
        // }

        // public function __destruct()
        // {
        //     // echo "destruct is calling";
        // }
    }
