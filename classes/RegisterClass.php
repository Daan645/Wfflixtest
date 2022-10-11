<?php

class RegisterClass extends Connection {

    protected function setUser($uid, $pwd, $email) {
        $stmt = $this->make()->prepare('INSERT INTO users (users_uid, users_pwd, users_email) VALUES (?, ?, ?);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($uid, $hashedPwd, $email))) {
            $stmt = null;
            header("location = ../views/register.view.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

//    Check if email and/or username already exists in the database
    protected function checkUser($uid, $email) {
        $stmt = $this->make()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;');

        if(!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location = ../views/register.view.php?error=stmtfailed");
            exit();
        }

//        $resultCheck = null;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }
        return $resultCheck;
    }
}