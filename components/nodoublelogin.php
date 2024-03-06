    <?php
            include('lib/utils.php');
            $loggedIn = null;

        //Check if session is already started. Ref: Book page 365
            if (session_status() == PHP_SESSION_NONE) 
                { session_start(); } //Start a session with the default cookie parameters
        
                    if (isset($_SESSION['username'])) 
                    {   redirect('admin.php?error=true');  }
    ?>
