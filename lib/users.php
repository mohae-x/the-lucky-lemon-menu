    <?php
        function authenticateUser($username, $password)
        {
                if($username == 'theluckylemon@gmail.com' && $password == 'lemon')
                    {return true;}
            return false;
        }
    ?>