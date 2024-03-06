<?php 

//                                      fetch
    function fetch_foods() {
        $DBC = mysqli_connect('localhost', 'root', '', 'cis2250'); 
        //localhost because Im running on XAMPP. Username, password, database
        $query = 'select * from food order by name';
        $result_set = mysqli_query($DBC, $query);

        $results = array();
        while ($row = mysqli_fetch_array($result_set)) {
            array_push($results, $row);
        }

        mysqli_close($DBC);
        return $results;
    }

    function fetch_food($id) {
        $DBC = mysqli_connect('localhost', 'root', '', 'cis2250'); 

        $cleanID = mysqli_real_escape_string($DBC, trim(strip_tags($id)));
        $query = "select * from food where id = $cleanID";

        $result_set = mysqli_query($DBC, $query);
        $result = mysqli_fetch_assoc($result_set);

        mysqli_close($DBC);
        return $result;
    }


    function fetch_drinks() {
        $DBC = mysqli_connect('localhost', 'root', '', 'cis2250');
        $query = 'select * from drink order by name';
        $result_set = mysqli_query($DBC, $query);

        $results = array();
        while ($row = mysqli_fetch_array($result_set)) {
            array_push($results, $row);
        }

        mysqli_close($DBC);
        return $results;
    }

    function fetch_drink($id) {
        $DBC = mysqli_connect('localhost', 'root', '', 'cis2250'); 

        $cleanID = mysqli_real_escape_string($DBC, trim(strip_tags($id)));
        $query = "select * from drink where id = $cleanID";

        $result_set = mysqli_query($DBC, $query);
        $result = mysqli_fetch_assoc($result_set);

        mysqli_close($DBC);
        return $result;
    }

    
    //                                      update

    function update_food($id, $name, $description, $allergy_info, $price) {
        $DBC = mysqli_connect('localhost', 'root', '', 'cis2250'); 

        $cleanID = mysqli_real_escape_string($DBC, trim(strip_tags($id)));
        $cleanName = mysqli_real_escape_string($DBC, trim(strip_tags($name)));
        $cleanDescription = mysqli_real_escape_string($DBC, trim(strip_tags($description)));
        $cleanAllergy_Info = mysqli_real_escape_string($DBC, trim(strip_tags($allergy_info)));
        $cleanPrice = mysqli_real_escape_string($DBC, trim(strip_tags($price)));

        $query = "UPDATE food SET name = '$cleanName', description = '$cleanDescription', 
        allergy_info = '$cleanAllergy_Info', price = '$cleanPrice' WHERE id = $cleanID";
     

        mysqli_query($DBC, $query);
        $result = -1;
        if (mysqli_affected_rows($DBC) == 1) 
            { $result = 1; }
        
        mysqli_close($DBC);
        return $result;
    }

    function update_drink($id, $name, $description, $allergy_info, $price) {
        $DBC = mysqli_connect('localhost', 'root', '', 'cis2250'); 

        $cleanID = mysqli_real_escape_string($DBC, trim(strip_tags($id)));
        $cleanName = mysqli_real_escape_string($DBC, trim(strip_tags($name)));
        $cleanDescription = mysqli_real_escape_string($DBC, trim(strip_tags($description)));
        $cleanAllergy_Info = mysqli_real_escape_string($DBC, trim(strip_tags($allergy_info)));
        $cleanPrice = mysqli_real_escape_string($DBC, trim(strip_tags($price)));

        $query = "UPDATE drink SET name = '$cleanName', description = '$cleanDescription', 
        allergy_info = '$cleanAllergy_Info', price = '$cleanPrice' WHERE id = $cleanID";
     

        mysqli_query($DBC, $query);
        $result = -1;
        if (mysqli_affected_rows($DBC) == 1) 
            { $result = 1; }
        
        mysqli_close($DBC);
        return $result;
    }



//                                      delete
    function delete_food($id) {
        $DBC = mysqli_connect('localhost', 'root', '', 'cis2250'); 
        
        $cleanID = mysqli_real_escape_string($DBC, trim(strip_tags($id)));

        $query = "delete from food where id = $cleanID";
        mysqli_query($DBC, $query);

        $result = -1;
        if (mysqli_affected_rows($DBC) == 1) 
        {  $result = 1; }
        

        mysqli_close($DBC);
        return $result;
    }

    function delete_drink($id) {
        $DBC = mysqli_connect('localhost', 'root', '', 'cis2250'); 
        
        $cleanID = mysqli_real_escape_string($DBC, trim(strip_tags($id)));
        
        $query = "delete from drink where id = $cleanID";
        mysqli_query($DBC, $query);

        $result = -1;
        if (mysqli_affected_rows($DBC) == 1) 
        {  $result = 1; }
        

        mysqli_close($DBC);
        return $result;
    }

     //                                      add


     function save_food($id, $name, $description, $allergy_info, $price) {
        $DBC = mysqli_connect('localhost', 'root', '', 'cis2250'); 
        $cleanName = mysqli_real_escape_string($DBC, trim(strip_tags($name)));
        $cleanDescription = mysqli_real_escape_string($DBC, trim(strip_tags($description)));
        $cleanAllergy_Info = mysqli_real_escape_string($DBC, trim(strip_tags($allergy_info)));
        $cleanPrice = mysqli_real_escape_string($DBC, trim(strip_tags($price)));

        $query = "INSERT INTO food (name, description, allergy_info, price) VALUES ('$cleanName', '$cleanDescription', '$cleanAllergy_Info',  '$cleanPrice')";
        mysqli_query($DBC, $query);

        $result = -1;
        if (mysqli_affected_rows($DBC) == 1) 
        {  $result = 1;  }
        
        mysqli_close($DBC);
        return $result;
     }
     
     
     function save_drink($id, $name, $description, $allergy_info, $price) {
        $DBC = mysqli_connect('localhost', 'root', '', 'cis2250'); 
        $cleanName = mysqli_real_escape_string($DBC, trim(strip_tags($name)));
        $cleanDescription = mysqli_real_escape_string($DBC, trim(strip_tags($description)));
        $cleanAllergy_Info = mysqli_real_escape_string($DBC, trim(strip_tags($allergy_info)));
        $cleanPrice = mysqli_real_escape_string($DBC, trim(strip_tags($price)));

        $query = "INSERT INTO drink (name, description, allergy_info, price) VALUES ('$cleanName', '$cleanDescription', '$cleanAllergy_Info',  '$cleanPrice')";
        mysqli_query($DBC, $query);

        $result = -1;
        if (mysqli_affected_rows($DBC) == 1) 
        {  $result = 1;  }
        
        mysqli_close($DBC);
        return $result;
     }



?>
