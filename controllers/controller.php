<?php
require('authentication.php');

class LoginController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $authModel = new AuthenticationModel();

            if ($authModel->authenticate($username, $password)) {
                // Redirect to a success page or perform any other action.
                header('Location: success.php');
            } else {
                // Display an error message.
                echo "Invalid username or password. Please try again.";
            }
        }
        if ($authModel->authenticate($username, $password)) {
            $_SESSION['user_id'] = $authenticated_user_id;
            header('Location: success.php');
        } else {
            echo "Invalid username or password. Please try again.";
        }
    }
    
}