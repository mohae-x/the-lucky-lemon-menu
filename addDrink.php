<!DOCTYPE html>
<html lang="eng">
    <body>  
    <?php include('components/protect.php'); ?>
    <?php include('components/head.php'); ?>

                 <div class="col-12 text-center px-5 mt-3">
                    <h2> Add New Drink </h2>

                      <form method="POST" action="processAddDrink.php">
                        <div class="form-group">
                                <label for="drinkName">Drink Name</label>
                                <input type="text" class="form-control" id="drinkName" name="drinkName" placeholder="Enter drink name">
                            </div>

                            <div class="form-group">
                                <label for="drinkDescription">Drink Description</label>
                                <textarea class="form-control" id="drinkDescription" name="drinkDescription" placeholder="Enter a description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="drinkAllergy_Info">Allergy Info</label>
                                <textarea class="form-control" id="drinkAllergy_Info" name="drinkAllergy_Info" placeholder="Enter allergy info, if any"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="drinkPrice">Price</label>
                                <textarea class="form-control" id="drinkPrice" name="drinkPrice" placeholder="Enter a price"></textarea>
                            </div>
                            <br>

                            <button type="submit">Save</button>
                      </form>
                
                    <?php include('components/footer.php'); ?>
                </div>
         </div>  
     </body>
 </html>

