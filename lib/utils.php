    <?php 
                //If you set the $expire parameter to 0, the cookie only exists until the user closes the browser. This is called a session cookie. Ref: Book Page 358
                function createCookie($name, $value) {
                    $expire = 0;
                    $path = '/';
                    setcookie($name, $value, $expire, $path);
                }

                function redirect($location) 
                { header("Location: $location"); }
        ?>