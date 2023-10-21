<?php
class AuthenticationModel {
    public function authenticate($username, $password) {
        $_SESSION['user_id'] = $authenticated_user_id;
        $valid_username = "your_username";
        $valid_password = "your_password";

        if ($username === $valid_username && $password === $valid_password) {
            return true;
        } else {
            return false;
        }
    }
}