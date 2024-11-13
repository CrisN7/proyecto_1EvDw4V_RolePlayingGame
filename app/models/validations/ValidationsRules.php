<?php

class ValidationsRules {

    public static function test_input($data) {
        echo "desde el test input de validation rules";
        //Removes whitespace and other predefined characters from both sides of a string. CRIS: BUSCAR ESTO-------
        $data = trim($data);
        //This PHP function returns a string with backslashes in front of each character that needs to be quoted in a database query. CRIS: BUSCAR ESTO-------
        $data = addslashes($data);
        //The htmlspecialchars() function converts some predefined characters to HTML entities. CRIS: BUSCAR ESTO-------
        $data = htmlspecialchars($data);
        return $data;
    }
    

}

?>
