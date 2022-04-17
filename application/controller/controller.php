<?php
// Create the controller class for the MVC design pattern

class Controller
{

    // Declare public variables for the controller class
    public $load;
    public $model;

    // Create functions for the controller class
    function __construct($pageURI = null) // constructor of the class
    {

        echo "<script>console.log('Console: " . $pageURI . "' );</script>";
        $this->load = new Load();
        $this->model = new Model();
        // determine what page you are on
        $this->$pageURI();
    }

    // home page function
    function home()
    {
        $data = $this->model->model3D_info();
        $this->load->view('view', $data);
    }

    function apiCreateTable()
    {
        // echo "Create table function";
        $data = $this->model->dbCreateTable();
        $this->load->view('viewMessage', $data);
    }

    function apiResetTable()
    {
        // echo "Create table function";
        $data = $this->model->dbResetTable();
        $this->load->view('viewMessage', $data);
    }

    function apiInsertData()
    {
        $data = $this->model->dbInsertData();
        $this->load->view('viewMessage', $data);
    }
    
    function apiResetInsertData(){
        $this->apiResetTable();
        $this->apiInsertData();
    }

    function apiGetData_Model()
    {
        $data = $this->model->dbGetData_ModelAll();
        $this->load->view('viewMessage', $data);
    }

    function apiGetData_ModelTest()
    {
        
        $data = $this->model->dbGetData_ModelAll_Test();
        $this->load->view('viewMessapiGetData_ModelTestage', $data);
    }

    function apiGetData_Mesh($MeshName)
    {
        $data = $this->model->dbGetData_Model($MeshName);
        $this->load->view('viewMessage', $data);
    }

    function apiGetData_Test()
    {
        $this->apiGetData_Mesh("TestBox");
    }

    function apiGetData()
    {
        $data = $this->model->dbGetData();
        $this->load->view('view3DAppData', $data);
    }


    function apiLoadImage()
    {
        // Get the brand data from the (this) Model using the dbGetBrand() meyhod in this Model class	
        ChromePhp::warn('controller.php: [apiLoadImage] Get the Brand data');
//        $data = $this->model->dbGetBrand();
        // Note, the viewDrinks.php view being loaded here calls a new model
        // called modelDrinkDetails.php, which is not part of the Model class
        // It is a separate model illustrating that you can have many models


        $this->load->view('viewX3D');
    }


    function dbCreateTable()
    {
        echo "Create Table Function";
    }

    function dbInsertData()
    {
        echo "Data Insert Function";
    }

    function dbGetData()
    {
        echo "Data Read Function";
    }

}

?>    