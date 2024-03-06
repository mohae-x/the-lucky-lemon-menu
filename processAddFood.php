<?php include('components/protect.php'); ?>
    <?php 
        require_once('lib/utils.php');
        require_once('lib/menu.php');

        $name = filter_input(INPUT_POST, 'foodName');
        $description = filter_input(INPUT_POST, 'foodDescription');
        $allergy_info = filter_input(INPUT_POST, 'foodAllergy_Info');
        $price = filter_input(INPUT_POST, 'foodPrice');

        save_food($id, $name, $description, $allergy_info, $price);
        redirect('admin.php');

    ?>