<!DOCTYPE html>
<html lang="eng">
    <body>  
    <?php include('components/protect.php'); ?>
    <?php include('components/head.php'); ?>
    <?php include_once('lib/menu.php'); ?>
        <?php
            $drinkId = filter_input(INPUT_GET, 'id');
            $drink = fetch_drink($drinkId);
        ?>
                 <div class="col-12 text-center px-5 mt-3">
                    <h2> Edit </h2>
                
                        <form method="POST" action="processEditDrink.php">
                            <input type="hidden" id="drinkId" name="drinkId" value="<?php echo $drink['id']; ?>" />
                                
                            <div class="form-group">
                                    <label for="drinkName">Drink Name</label>
                                    <input type="text" class="form-control" id="drinkName" name="drinkName" value="<?php echo $drink['name']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="drinkDescription">Drink Description</label>
                                    <textarea class="form-control" id="drinkDescription" name="drinkDescription" placeholder="Enter drink Description"><?php echo $drink['description']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="drinkAllergy_Info">Allergy Info</label>
                                    <textarea class="form-control" id="drinkAllergy_Info" name="drinkAllergy_Info" placeholder="Enter drink Allergy Info"><?php echo $drink['allergy_info']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="drinkPrice">Price</label>
                                    <input type="text" class="form-control" id="drinkPrice" name="drinkPrice" value="<?php echo $drink['price']; ?>">
                                </div>

                                <button type="submit" class="btn btn-secondary">Save</button>
                        </form>

                    <?php include('components/footer.php'); ?>
                </div>
         </div>  
     </body>
 </html>

