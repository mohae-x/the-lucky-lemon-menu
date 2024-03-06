<!DOCTYPE html>
<html lang="eng">
    <body>  
    <?php include('components/head.php'); ?>
    <?php include('components/protect.php'); ?>
    <?php include_once('lib/menu.php'); ?>

                 <div class="col-12 text-center px-5 mt-3">
                    <h2> Lucky Lemon Admin </h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Allergy Info</th>
                                    <th>Price</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $hasErrors = filter_input(INPUT_GET, 'error');
                                        if ($hasErrors) 
                                            { $error_message = "You're already logged in!";  
                                                include('components/alerts/error.php'); }          

                                    $foods = fetch_foods();
                                        foreach($foods as $food)
                                        {
                                            $editLink = "<a href='editFood.php?id=" . $food['id'] . "'>Edit</a>";
                                            $deleteLink = "<a href='processDeleteFood.php?id=" . $food['id'] . "'>Delete</a>";
                                            print " <tr> ";
                                            print " <td>${food['name']} </td>";
                                            print " <td>${food['description']} </td>";
                                            print " <td>${food['allergy_info']} </td>";
                                            print " <td>${food['price']} </td>";
                                            print " <td> $editLink </td>";
                                            print " <td> $deleteLink </td>";
                                            print " </tr> ";
                                        }

                                    $drinks = fetch_drinks();
                                        foreach($drinks as $drink)
                                        {
                                            $editLink = "<a href='editDrink.php?id=" . $drink['id'] . "'>Edit</a>";
                                            $deleteLink = "<a href='processDeleteDrink.php?id=" . $drink['id'] . "'>Delete</a>";
                                            print " <tr> ";
                                            print " <td>${drink['name']}</td> ";
                                            print " <td>${drink['description']}</td> ";
                                            print " <td>${drink['allergy_info']}</td> ";
                                            print " <td>${drink['price']}</td> ";
                                            print " <td> $editLink </td>";
                                            print " <td> $deleteLink </td>";
                                            print " </tr> ";
                                        }
                                ?>
                            </tbody>
                        </table>      
                       
                        <a href="addFood.php" class="button">Add New Food</a>
                        <a href="addDrink.php" class="button">Add New Drink</a>
                        <a href="/CIS2250/index.php" class="button">Return to Home</a>
                        <?php include('components/footer.php'); ?>
                    </div>
            </div>  
     </body>
 </html>

