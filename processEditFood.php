<?php include('components/protect.php'); ?>
<?php
    require_once('lib/menu.php');
    require_once('lib/utils.php');
    
    $id = filter_input(INPUT_POST, 'foodId');
    $name = filter_input(INPUT_POST, 'foodName');
    $description = filter_input(INPUT_POST, 'foodDescription');
    $allergy_info = filter_input(INPUT_POST, 'foodAllergy_Info');
    $price = filter_input(INPUT_POST, 'foodPrice');
    
    update_food($id, $name, $description, $allergy_info, $price);
    
    redirect('admin.php');
?>
