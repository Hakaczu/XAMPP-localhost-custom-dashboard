<?php
    if(isset($_GET['action']) && !empty($_GET['action'])){
       $request = $_GET['action'];
        switch($request){
            case 'addForm':
                require 'view/addForm.html';
                break;
            case 'addProject':
                require 'dashboard/action/addProject.php';
                break;
            default: 
                require 'view/home.php';
        }

    }
    else{
        require 'view/home.php';
    }
    
?>
