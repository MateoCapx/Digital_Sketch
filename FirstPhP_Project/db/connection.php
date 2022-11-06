<!-- Creating the database connection  -->

<?php
    $host = 'localhost';
    $db = 'sonopath';
    $user = 'root';
    $password = 'Mateo123';
   

    $dsn = "mysql:host:=$host; dbname=$db"; 


// Error Handling 
// PDO (PHP Data Objects)

    try{
        $pdo = new PDO($dsn, $user, $password );
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";

    } catch(PDOException $e ){
        echo $e -> getMessage();
        throw new PDOException($e -> getMessage());
    };
?>



<!-- Procedural Way of creating the database -->
<?php
//     $serverName = 'localhost';
//     $dBUserName = 'root';
//     $dBPasswordName = 'Mateo123';
//     $dBName = 'sonopath';
        

        //Conecting to the database 
// $conn = mysqli_connect( $serverName, $dBUserName ,$dBPasswordName, $$dBName = 'sonopath' );

        // Checking the connection
// if(!$conn ){
//     die("Connection Failed:" . mysqli_connect_error());
// }
// else{
//     echo " Not Working";
// }


?>