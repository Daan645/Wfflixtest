<?php

class LoginClass extends Connection {
    protected function getUser($uid, $pwd) {
        $stmt = $this->make()->prepare('SELECT users_pwd FROM users WHERE users_uid = ? OR users_email = ?;');

        //stmt query failed, exit.
        if(!$stmt->execute(array($uid, $pwd))) {
            $stmt = null;
            header("location = ../views/login.view.php?error=stmtfailed");
            exit();
        }

        //Incorrect username, error pop up
        if($stmt->rowCount() == 0) {
            $stmt = null;
            echo "<script> alert ('Gebruikersnaam is incorrect:');window.location='../views/login.view.php' </script>";
            exit();
        }
        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["users_pwd"]);

        //Incorrect password, error pop up
        if($checkPwd == false) {
            $stmt = null;
            echo "<script> alert ('Wachtwoord is incorrect:');window.location='../views/login.view.php' </script>";

            exit();
        } elseif($checkPwd == true) {
            $stmt = $this->make()->prepare('SELECT * FROM users WHERE users_uid = ? OR users_email = ? AND users_pwd = ?;');

            //stmt query failed, exit
            if(!$stmt->execute(array($uid, $uid, $pwd))) {
                $stmt = null;
                header("location = ../views/login.view.php?error=stmtfailed");
                exit();
            }

            //Username not found in database
            if($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../views/login.view.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["users_id"];
            $_SESSION["userid"] = $user[0]["users_uid"];
            $_SESSION["isAdmin"] = $user[0]["users_isAdmin"];
            $stmt = null;
        }

        $stmt = null;
    }
}