<?php include('components/protect.php'); ?>
    <?php 
        require_once('lib/menu.php');
        require_once('lib/utils.php');

        $foodId = filter_input(INPUT_GET, 'id');
        delete_food($foodId);

        redirect('admin.php');
    ?>