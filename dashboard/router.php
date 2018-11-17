<?php
    if(isset($_GET['action']) && !empty($_GET['action'])){
       $request = $_GET['action'];
        switch($request){
            case 'addForm':
                require 'dashboard/view/addForm.html';
                break;
            case 'addProject':
                require 'dashboard/action/addProject.php';
                require 'dashboard/view/home.php';
                break;
            case 'deleteProject':
                require 'dashboard/action/deleteProject.php';
                break;
            case 'editForm':
                require 'dashboard/view/projectEditForm.php';
                break;
            case 'editProject':
                require 'dashboard/action/editProject.php';
                require 'dashboard/view/home.php';
                break;
            default: 
                require 'dashboard/view/home.php';
        }

    }
    else{
        require 'dashboard/view/home.php';
    }
    
?>
