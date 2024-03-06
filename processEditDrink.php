<?php include('components/protect.php'); ?>
<?php
    require_once('lib/menu.php');
    require_once('lib/utils.php');
    
    $id = filter_input(INPUT_POST, 'drinkId');
    $name = filter_input(INPUT_POST, 'drinkName');
    $description = filter_input(INPUT_POST, 'drinkDescription');
    $allergy_info = filter_input(INPUT_POST, 'drinkAllergy_Info');
    $price = filter_input(INPUT_POST, 'drinkPrice');
    
    update_drink($id, $name, $description, $allergy_info, $price);
    
    redirect('admin.php');
?>
