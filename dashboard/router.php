<?php
    if(isset($_GET['action']) && !empty($_GET['action'])){
       $request = $_GET['action'];
        switch($request){
            case 'addForm':
                require 'dashboard/view/addForm.html';
                break;
            case 'addProject':
                require 'dashboard/action/addProject.php';
                break;
            case 'deleteProject':
                require 'dashboard/action/deleteProject.php';
                break;
            default: 
                require 'dashboard/view/home.php';
        }

    }
    else{
        require 'dashboard/view/home.php';
    }
    
?>
