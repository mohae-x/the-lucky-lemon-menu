<!DOCTYPE html>
<html lang="eng">
    <body>  
    <?php include('components/protect.php'); ?>
    <?php include('components/head.php'); ?>

                 <div class="col-12 text-center px-5 mt-3">
                    <h2> Add New Food </h2>

                      <form method="POST" action="processAddFood.php">
                        <div class="form-group">
                                <label for="foodName">Food Name</label>
                                <input type="text" class="form-control" id="foodName" name="foodName" placeholder="Enter food name">
                            </div>

                            <div class="form-group">
                                <label for="foodDescription">Food Description</label>
                                <textarea class="form-control" id="foodDescription" name="foodDescription" placeholder="Enter a description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="foodAllergy_Info">Allergy Info</label>
                                <textarea class="form-control" id="foodAllergy_Info" name="foodAllergy_Info" placeholder="Enter allergy info, if any"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="foodPrice">Price</label>
                                <textarea class="form-control" id="foodPrice" name="foodPrice" placeholder="Enter a price"></textarea>
                            </div>

                            <button type="submit" class="btn btn-secondary">Save</button>
                      </form>
                
                    <?php include('components/footer.php'); ?>
                </div>
         </div>  
     </body>
 </html>

