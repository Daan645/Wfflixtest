<?php

class RegisterContr extends RegisterClass {

    private $uid;
    private $pwd;
    private $email;

    public function __construct($uid, $pwd, $email) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->email = $email;
    }

    public function registerUser() {
        if($this->emptyInput() == false) {
//          echo "Empty input!";
            echo "<script> alert ('Vul alle velden in');window.location='../views/register.view.php' </script>";
            exit();
        }
        if($this->invalidUname() == false) {
//          echo "Invalid username!";
            echo "<script> alert ('Ongeldige gebruikersnaam');window.location='../views/register.view.php' </script>";
            exit();
        }
        if($this->invalidEmail() == false) {
//          echo "Invalid email!";
            echo "<script> alert ('Ongeldig emailadres');window.location='../views/register.view.php' </script>";
            exit();
        }
        if($this->uidTakenCheck() == false) {
//          echo "Username or email taken!";
            echo "<script> alert ('Gebruikersnaam of email is al in gebruik');window.location='../views/register.view.php' </script>";
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

//    Check if a field is left empty
    private function emptyInput(): bool {

        if(empty($this->uid) || empty($this->pwd) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

//    Check if username doesn't have invalid characters
    private function invalidUname(): bool {
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

//    Check if email address is valid
    private function invalidEmail(): bool {
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

//    Check if password fields match
    /*private function pwdMatch($result) {
        if($this->pwd !== $this->pwdRepeat) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }*/

    private function uidTakenCheck(): bool {
        if(!$this->checkUser($this->uid, $this->pwd, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}