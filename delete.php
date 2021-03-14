<?php 
    require_once 'db/conn.php'; 
    if(!isset($_GET['id'])){
        
        echo 'error';
    }
    else{
        //Get id values
        $id = $_GET['id'];

        //Call Delete Function 
        $result = $crud->deleteAttendee($id);

        //Redirect to list
        if($result){
            
            header("Location : viewrecords.php");
        }
        else{
            echo '';
        }
    }

?>