
<?php 
    
    define('HOST', 'localhost');
    define('DB_NAME', 'u508042746_Quai_Antique');
    define('USER', 'u508042746_root');
    define('PASS', 'Root1891');


    $isSuccess = false;

    try 
    {
        $conn = new PDO ("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS,);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } 


    catch (PDOException $e) 
    {
        echo $e;
    }
    
    
    

?>