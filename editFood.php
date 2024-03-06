<!DOCTYPE html>
<html lang="eng">
    <body>  
    <?php include('components/protect.php'); ?>
    <?php include('components/head.php'); ?>
    <?php include_once('lib/menu.php'); ?>
        <?php
            $foodId = filter_input(INPUT_GET, 'id');
            $food = fetch_food($foodId);
        ?>
                 <div class="col-12 text-center px-5 mt-3">
                    <h2> Edit </h2>

                        <form method="POST" action="processEditFood.php">
                            <input type="hidden" id="foodId" name="foodId" value="<?php echo $food['id']; ?>" />
                                
                            <div class="form-group">
                                    <label for="foodName">Food Name</label>
                                    <input type="text" class="form-control" id="foodName" name="foodName" value="<?php echo $food['name']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="foodDescription">Food Description</label>
                                    <textarea class="form-control" id="foodDescription" name="foodDescription" placeholder="Enter Food Description"><?php echo $food['description']; ?></textarea>
                                </div>

                            
                                <div class="form-group">
                                    <label for="foodAllergy_Info">Allergy Info</label>
                                    <textarea class="form-control" id="foodAllergy_Info" name="foodAllergy_Info" placeholder="Enter food Allergy Info"><?php echo $food['allergy_info']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="foodPrice">Price</label>
                                    <input type="text" class="form-control" id="foodPrice" name="foodPrice" value="<?php echo $food['price']; ?>">
                                </div>

                                <button type="submit" class="btn btn-secondary">Save</button>
                        </form>
                
                    <?php include('components/footer.php'); ?>
                </div>
         </div>  
     </body>
 </html>

