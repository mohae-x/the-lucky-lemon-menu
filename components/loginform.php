    <?php
            $hasErrors = filter_input(INPUT_GET, 'error');
            $savedEmail = filter_input(INPUT_COOKIE, 'email');

            if ($hasErrors) {
                $error_message = "Your username or password is incorrect.";
                include('alerts/error.php');
            }      
    ?>

    <form action="processLogin.php" method="POST">
            <div class="mt-2 mb-2">
                <label for="email" class="form-label">Email Address: </label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $savedEmail;?>" />
            </div>

            <div class="mt-2 mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" />
            </div>
            
        <button type="submit" class="button">Submit</button>
    </form>