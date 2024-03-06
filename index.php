<!DOCTYPE html>
<html lang="eng">
    <body>  
    <?php include('components/head.php'); ?>
    <?php include_once('lib/menu.php'); ?>
                <div class="col-12 text-center px-5 mt-3">
                
                    <div class="row justify-content-center">
                      <h2> The Lucky Lemon </h2>
                          <div class="col-2"> </div>

                            <div class="col-8">
                                <p>
                                Opened during the peak of the Renaissance, The Lucky Lemon is a cafe dedicated to all things lemon. 
                                Operated and run by twin brothers Flynn and Quinn Citrus, the cafe has been open for over a century 
                                now, entertaining visitors of all backgrounds with its live music and lemon-centric offerings. Located 
                                on the corner of Cobbler and Westover in The Abaddon Village, the shop is open from 8 AM to 8 PM every 
                                day of the week, excluding Saturdays, which are reserved for cleaning and sourcing more lemons. If you 
                                find yourself to be an enjoyer of lemon drinks, pastries, or a mixture of both, make sure to drop in and 
                                pay the twins a visit! 
                                
                                <br> <br> <b>Alcohol exclusively served on Friday's.</b> </p>
                            </div>

                          <div class="col-2"> </div>
                      </div>
                      
                      <div class="row justify-content-center">
                        <?php 
                            $foods = fetch_foods(); 
                              foreach($foods as $food){
                                include('components/fooddisplay.php');
                              }

                            $drinks = fetch_drinks();
                              foreach($drinks as $drink){
                                include('components/drinkdisplay.php');
                              }
                        ?>
                    </div>                 
                  <?php include('components/footer.php'); ?>
                </div>
         </div>  
     </body>
 </html>

