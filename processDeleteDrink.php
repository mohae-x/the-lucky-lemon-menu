<?php include('components/protect.php'); ?>
    <?php 
        require_once('lib/menu.php');
        require_once('lib/utils.php');

        $drinkId = filter_input(INPUT_GET, 'id');
        delete_drink($drinkId);

        redirect('admin.php');
    ?>