
<?php
//<!--MODEL TO CONTROL THE OPERATIONS OF THE DATABASES-->
include 'application/debug/ChromePhp.php';

ChromePhp::log('Model.php: Hellow World');
ChromePhp::log($_SERVER);

class Model
{
    // Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
    public $dbhandle;

    // Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
    public function __construct()
    {
        // Set up the database source name (DSN)
        // Path based on location of index.php
        $dsn = 'sqlite:db/Model.db';

        // Then create a connection to a database with the PDO() function
        try {
            // Change connection string for different databases, currently using SQLite
            $this->dbhandle = new PDO($dsn, 'user', 'password', array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
                PDO::ATTR_EMULATE_PREPARES => false, // turn off emulation mode for "real" prepared statements
            ));
            // $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'Database connection created</br></br>';
        } catch (PDOEXception $e) {
            ChromePhp::error(" can't connect to the database ");
            ChromePhp::error($e->getMessage());
            // Generate an error message if the connection fails
        }
    }


    public function TestPrint()
    {
        ChromePhp::log("Test Print");

    }

    public function dbCreateTable_ModelTable()
    {
        return "CREATE TABLE Model_Mesh (MeshName TEXT PRIMARY KEY, PathName TEXT );";
    }

    public function dbCreateTable_TextureTable()
    {
        return "CREATE TABLE Model_Texture (MeshName TEXT NOT NULL,Brand TEXT NOT NULL  , PathName TEXT ,DiffuseColor TEXT, Shininess TEXT, SpecularColor TEXT,CONSTRAINT COMP_NAME PRIMARY KEY (MeshName, Brand)); ";
    }

    public function dbCreateTable_AssetTable()
    {
        return "CREATE TABLE AssetTable (AssetName TEXT PRIMARY KEY,PathName TEXT NOT NULL  ); ";
    }

    public function dbCreateTable_CardTable()
    {
        return "CREATE TABLE CardTable (AssetName TEXT PRIMARY KEY,PathName TEXT NOT NULL  ); ";
    }


    public function dbCreateTable()
    {
        $returnText = "";

        $execText = $this->dbCreateTable_ModelTable() .
            $this->dbCreateTable_TextureTable() .
            $this->dbCreateTable_AssetTable();


        try {
            $this->dbhandle->exec($execText);
            return "TABLE CREATION CLEAR";
        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    public function dbResetTable()
    {
        $returnText = "";
        try {
            $this->dbhandle->exec("DROP TABLE IF EXISTS Model_Mesh;DROP TABLE IF EXISTS Model_Texture ;DROP TABLE IF EXISTS AssetTable ;");
            $this->dbCreateTable();
            return "TABLE RESET CLEAR";


        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    public function dbInsertData_Mesh()
    {
        $insertCommand = "INSERT INTO Model_Mesh(MeshName,PathName)VALUES (";
        $insertCommand_end = ");";
        try {
            $this->dbhandle->exec($insertCommand . "'TestBox','assets/Model/TestBox/TestBox.x3d'" . $insertCommand_end);
            $this->dbhandle->exec($insertCommand . "'Can','assets/Model/CokeCan/Can_New.x3d'" . $insertCommand_end);
            $this->dbhandle->exec($insertCommand . "'Bottle','assets/Model/Bottle/Bottle_New.x3d'" . $insertCommand_end);
            $this->dbhandle->exec($insertCommand . "'Glass','assets/Model/Glass/Glass_New.x3d'" . $insertCommand_end);
            $this->dbhandle->exec($insertCommand . "'TestScene','assets/Model/TestScene/TestScene.x3d'" . $insertCommand_end);
            return "X3D model data inserted successfully inside test1.db";
        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    public function dbInsertData_Texture()
    {
//        return "CREATE TABLE Model_Texture (MeshName TEXT NOT NULL,Brand TEXT NOT NULL  , PathName TEXT ,DiffuseColor TEXT, Shininess TEXT, SpecularColor TEXT,CONSTRAINT COMP_NAME PRIMARY KEY (MeshName, Brand)); ";

        $insertCommand = "INSERT INTO Model_Texture(MeshName,Brand,PathName,DiffuseColor,Shininess,SpecularColor)VALUES (";
        $insertCommand_end = ");";
        try {
            $this->dbhandle->exec($insertCommand . "'TestBox','TestBox','../TestBox/CubeNormal.png','0.5 0.5 0.5','0.025','0.025 0.025 0.025'" . $insertCommand_end);
        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        try {
            $this->dbhandle->exec($insertCommand . "'TestBox','Coke','../CokeCan/Can_Coke_2.png','0.5 0.5 0.5','0.025','0.025 0.025 0.025'" . $insertCommand_end);

        } catch (PD0EXception $e) {

            print new Exception($e->getMessage());
        }
        try {
            $this->dbhandle->exec($insertCommand . "'TestBox','Sprite','../Bottle/Just_Bottle.1Surface_Color.png','0.5 0.5 0.5','0.025','0.025 0.025 0.025'" . $insertCommand_end);

        } catch (PD0EXception $e) {

            print new Exception($e->getMessage());
        }

        //Can
        try {
            $this->dbhandle->exec($insertCommand . "'Can','TestBox','../TestBox/CubeNormal.png','0.5 0.5 0.5','0.025','0.025 0.025 0.025'" . $insertCommand_end);

        } catch (PD0EXception $e) {

            print new Exception($e->getMessage());
        }
        try {
            $this->dbhandle->exec($insertCommand . "'Can','Coke','../CokeCan/Can_Coke_2.png','0.5 0.5 0.5','0.025','0.025 0.025 0.025'" . $insertCommand_end);

        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        try {
            $this->dbhandle->exec($insertCommand . "'Can','Sprite','../CokeCan/Can_Sprite.png','0.5 0.5 0.5','0.025','0.025 0.025 0.025'" . $insertCommand_end);

        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        try {
            $this->dbhandle->exec($insertCommand . "'Can','Fanta','../CokeCan/Can_Fanta.png','0.5 0.5 0.5','0.025','0.025 0.025 0.025'" . $insertCommand_end);

        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }

        //Bottle
        try {
            $this->dbhandle->exec($insertCommand . "'Bottle','Sprite','../Bottle/Bottle_Sprite.png','0.5 0.5 0.5','0.025','0.025 0.025 0.025'" . $insertCommand_end);

        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        try {
            $this->dbhandle->exec($insertCommand . "'Bottle','Coke','../Bottle/Bottle_Coke.png','0.5 0.5 0.5','0.025','0.025 0.025 0.025'" . $insertCommand_end);

        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        try {
            $this->dbhandle->exec($insertCommand . "'Bottle','Fanta','../Bottle/Bottle_Fanta.png','0.5 0.5 0.5','0.025','0.025 0.025 0.025'" . $insertCommand_end);

        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }

        //Glass
        try {
            $this->dbhandle->exec($insertCommand . "'Glass','Coke','../Glass/Glass_Coke.png','0.5 0.5 0.5','0.025','0.025 0.025 0.025'" . $insertCommand_end);

        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        try {
            $this->dbhandle->exec($insertCommand . "'Glass','Sprite','../Glass/Glass_Sprite.png','0.5 0.5 0.5','0.025','0.025 0.025 0.025'" . $insertCommand_end);

        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        try {
            $this->dbhandle->exec($insertCommand . "'Glass','Fanta','../Glass/Glass_Fanta.png','0.5 0.5 0.5','0.025','0.025 0.025 0.025'" . $insertCommand_end);

        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        //TestScene
        try {
            $this->dbhandle->exec($insertCommand . "'TestScene','Coke','../Glass/Glass_Coke.png','0.5 0.5 0.5','0.025','0.025 0.025 0.025'" . $insertCommand_end);

        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        try {
            $this->dbhandle->exec($insertCommand . "'TestScene','Sprite','../Glass/Glass_Sprite.png','0.5 0.5 0.5','0.025','0.025 0.025 0.025'" . $insertCommand_end);

        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        try {
            $this->dbhandle->exec($insertCommand . "'TestScene','Fanta','../Glass/Glass_Fanta.png','0.5 0.5 0.5','0.025','0.025 0.025 0.025'" . $insertCommand_end);

        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        return "X3D model data inserted successfully inside test1.db";
        $this->dbhandle = NULL;
    }

    public function dbInsertData_AssetTable()
    {
        $insertCommand = 'INSERT INTO AssetTable(AssetName,PathName) VALUES (';
        $insertCommand_end = ");";
        try {
            $this->dbhandle->exec($insertCommand . "'CokeTruck','assets/img/ColaTruck.png'" . $insertCommand_end);
            $this->dbhandle->exec($insertCommand . "'CokeBottles','assets/img/CokeBottles.png'" . $insertCommand_end);
            $this->dbhandle->exec($insertCommand . "'HomepageBackground','assets/img/background.jpg'" . $insertCommand_end);
            $this->dbhandle->exec($insertCommand . "'PinkCoke','assets/img/PinkCoke.jpg'" . $insertCommand_end);
            return "X3D model data inserted successfully inside test1.db";
        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    public function dbInsertData()
    {
        try {
            $this->dbInsertData_Mesh();
            $this->dbInsertData_Texture();
            $this->dbInsertData_AssetTable();
            return "X3D model data inserted successfully inside test1.db";
        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    public function UnpackX3DToJSON($filPath)
    {
        $xml = simplexml_load_file($filPath);
//        ChromePhp::log($xml->IndexedFaceSet['texCoordIndex']);

        if ($xml == null) {
            return "failed to load X3D from Path";
        }
        $result = null;
        if ($xml->X3D == null) {
            return "XML null";

        }
        $result["texCoordIndex"] = $xml->Scene->Transform->Shape->IndexedFaceSet['texCoordIndex'];
        $result["coordIndex"] = $xml->Scene->Transform->Shape->IndexedFaceSet['coordIndex'];
        $result["coordinate"] = $xml->Scene->Transform->Shape->IndexedFaceSet->Coordinate['point'];
        $result["textureCoordinate"] = $xml->Scene->Transform->Shape->IndexedFaceSet->TextureCoordinate['point'];
        return $result;

    }

    public function UnpackTextureToJSON($data)
    {
        $result = null;
        $result["name"] = $data["MeshName"] . "_" . $data["Brand"];
        $result["diffuseColor"] = $data["DiffuseColor"];
        $result["shininess"] = $data["Shininess"];
        $result["specularColor"] = $data["SpecularColor"];
        $result["textureURL"] = $data["PathName"];
        return $result;

    }

    public function dbGetData_ModelAll()
    {
        ChromePhp::log("Calling dbGetData_ModelNew");

        $meshName = $_GET['meshName'];
        $brandName = $_GET['brandName'];
        $data['Mesh'] = $this->dbGetData_Model($meshName);
        $data['Texture'] = $this->dbGetData_Texture($meshName, $brandName);

        return $data;

    }

    public function dbGetData_ModelAll_Test()
    {
        ChromePhp::log("Calling dbGetData_ModelAll_Test");

        $data = null;
        $data = $this->dbGetData_Model("Can");
        //$data['Texture'] = $this->dbGetData_Texture("Can", "Coke");

        return $data;

    }


    public function dbGetData_Model($meshName)
    {
        ChromePhp::log("Getting Mesh: " . $meshName);

        try {
            // Prepare a statement to get all records from the Model_3D table
            $sql = 'SELECT * FROM Model_Mesh WHERE MeshName = "' . $meshName . '";';
//            $sql = 'SELECT * FROM Model_Mesh WHERE MeshName = "can";';
//            $sql = 'SELECT * FROM Model_Mesh ;';
            // Use PDO query() to query the database with the prepared SQL statement
            $stmt = $this->dbhandle->query($sql);
            // Set up an array to return the results to the view
            $result = null;
            // Set up a variable to index each row of the array
            // Use PDO fetch() to retrieve the results from the database using a while loop
            // Use a while loop to loop through the rows	
            while ($data = $stmt->fetch()) {
                ChromePhp::log('Unpacking' . $data['PathName']);
                $unPackedJSON = $this->UnpackX3DToJSON($data['PathName']);
                ChromePhp::log($unPackedJSON);

                //increment the row index
            }
            $result = $unPackedJSON;
        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        // Close the database connection
        $this->dbhandle = NULL;
        // Send the response back to the view
        ChromePhp::log($result);

        return $result;
    }

    public function dbGetData_Texture($meshName, $brandName)
    {
        try {
            // Prepare a statement to get all records from the Model_3D table
            $sql = 'SELECT * FROM Model_Texture WHERE MeshName = "' . $meshName . '"AND Brand = "' . $brandName . '";';
//            $sql = 'SELECT * FROM Model_Mesh WHERE MeshName = "can";';
//            $sql = 'SELECT * FROM Model_Mesh ;';
            // Use PDO query() to query the database with the prepared SQL statement
            $stmt = $this->dbhandle->query($sql);
            // Set up an array to return the results to the view
            $result = null;
            // Set up a variable to index each row of the array
            // Use PDO fetch() to retrieve the results from the database using a while loop
            // Use a while loop to loop through the rows	
            while ($data = $stmt->fetch()) {
                ChromePhp::log('Unpacking' . $data);
                $unPackedJSON = $this->UnpackTextureToJSON($data);
                ChromePhp::log($unPackedJSON);

                //increment the row index
            }
            $result = $unPackedJSON;
        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        // Close the database connection
        $this->dbhandle = NULL;
        // Send the response back to the view
        return $result;
    }


    //Method to simulate the model data
    public function model3D_info()
    {
        // Simulate the model's data
        return array(
            'model_1' => 'Coke Can 3D Image 1',
            'image3D_1' => 'coke_1',

            'model_2' => 'Coke Can 3D Image 2',
            'image3D_2' => 'coke_2',

            'model_3' => 'Sprite Bottle 3D Image 1',
            'image3D_3' => 'sprite_1',

            'model_4' => 'Sprite Bottle 3D Image 2',
            'image3D_4' => 'sprite_2',

            'model_5' => 'Dr Pepper Cup 3D Image 1',
            'image3D_5' => 'pepper_1',

            'model_6' => 'Dr Pepper Cup 3D Image 2',
            'image3D_6' => 'pepper_2'
        );
    }
}

?>