<?php include('components/protect.php'); ?>
    <?php 

        require_once('lib/utils.php');
        require_once('lib/menu.php');
       


        $name = filter_input(INPUT_POST, 'drinkName');
        $description = filter_input(INPUT_POST, 'drinkDescription');
        $allergy_info = filter_input(INPUT_POST, 'drinkAllergy_Info');
        $price = filter_input(INPUT_POST, 'drinkPrice');

        save_drink($id, $name, $description, $allergy_info, $price);
        redirect('admin.php');

    ?>