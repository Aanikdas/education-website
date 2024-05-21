<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    // Open the Excel file for writing
    $file = 'blood donors.xlsx'; // Specify the path to your Excel file
    $fp = fopen($file, 'a');
    
    // Write data to Excel file
    fwrite($fp, "$name,$email\n");
    
    // Close the file
    fclose($fp);
    
    echo "Data submitted successfully!";
} else {
    echo "Error: Method not allowed.";
}
?>
