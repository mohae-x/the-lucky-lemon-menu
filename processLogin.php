    <?php
        require_once('lib/users.php');
        require_once('lib/utils.php');

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');

        if(authenticateUser($email, $password)) {
            session_start(); //Start a session with the default cookie parameters. Ref: Book page 365
            $_SESSION['username'] = $email;
                redirect('admin.php'); //redirect to admin page
        }

        else {
                if($email) //remember the username/email via a cookie
                    { createCookie("email", $email);  }
                redirect('login.php?error=true'); //redirect to login page w/ error 
        }
    ?>