<?php

class LoginContr extends LoginClass{

    private $uid;
    private $pwd;

    public function __construct($uid, $pwd) {
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    public function loginUser() {
        if($this->emptyInput() == false) {
            //echo "empty input!";
            header("location: ../views/login.view.php?error=emptyinput");
            exit();
        }
        $this->getUser($this->uid, $this->pwd);
    }

//    Check if a field is left empty
    private function emptyInput(): bool {
        if (empty($this->uid) || empty($this->pwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}