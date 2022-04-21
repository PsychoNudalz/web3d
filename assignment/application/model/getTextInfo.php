<?php
include '../debug/ChromePhp.php';
ChromePhp::log('getTextInfo.php: Activate 2');
//ChromePhp::log($_SERVER);

$assetName = $_GET['assetName'];

$result =null;
try {
    $getTextInfo =  new getTextInfo();
    $result = $getTextInfo->dbGetData_Asset($assetName);

//    $getMesh =  new getMesh();
//    $result["Texture"] = $getMesh->dbGetData_Texture($meshName,$brandName);
} catch (PDOEXception $e) {
    ChromePhp::warn('getTextInfo.php: Code error on server?');
    print new Exception($e->getMessage());
}
$getTextInfo->dbhandle = null;
$result =json_encode($result);
ChromePhp::warn($result);
echo $result;

class getTextInfo
{
    // Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
    public $dbhandle;

    // Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
    public function __construct()
    {
        // Set up the database source name (DSN)
        // Path based on location of index.php

        // Then create a connection to a database with the PDO() function
        try {
            $dsn = 'sqlite:../../db/Model.db';

            $user = 'user';
            $pass = 'password';
//            ChromePhp::warn($dsn, $user, $pass);
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
                PDO::ATTR_EMULATE_PREPARES => false, // turn off emulation mode for "real" prepared statements
            ];

            // Make a connection to the drinks database
            $this->dbhandle = new PDO($dsn, $user, $pass, $options);
            // Change connection string for different databases, currently using SQLite

            // $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'Database connection created</br></br>';
        } catch (PDOEXception $e) {
            ChromePhp::error(" can't connect to the database ");
            ChromePhp::error($e->getMessage());
            // Generate an error message if the connection fails
        }
    }

    public function dbGetData_Asset($textName)
    {
        ChromePhp::log("getTextInfo.php: Getting Asset: " . $textName);

        try {
            // Prepare a statement to get all records from the Model_3D table
            $sql = 'SELECT * FROM TextInformation WHERE TextName = "' . $textName . '";';
//            $sql = 'SELECT * FROM Model_Mesh WHERE MeshName = "can";';
//            $sql = 'SELECT * FROM Model_Mesh ;';
            // Use PDO query() to query the database with the prepared SQL statement
            ChromePhp::log("Return SQL: ".$sql);

            $stmt = $this->dbhandle->query($sql);
            // Set up an array to return the results to the view
            $result = null;
            // Set up a variable to index each row of the array
            // Use PDO fetch() to retrieve the results from the database using a while loop
            // Use a while loop to loop through the rows	
            while ($data = $stmt->fetch()) {
                ChromePhp::log('Found ' . $data['Title']);
                $result["Title"] = ($data['Title']);
                $result["Subtitle"] = ($data['Subtitle']);
                $result["Content"] = ($data['Content']);
                $result["URL"] = ($data['URL']);
                $result["Img_Path"] = ($data['Img_Path']);
//                ChromePhp::log($unPackedJSON);

                //increment the row index
            }
        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        // Close the database connection
        $this->dbhandle = NULL;

        // Send the response back to the view
//        ChromePhp::log($result);

        return $result;
    }


}

