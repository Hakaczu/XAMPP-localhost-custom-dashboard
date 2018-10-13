<?php
    if(isset($_GET['view']) && !empty($_GET['view'])){
        $request = $_GET['view'];
        
        switch($request){
            case 'add':
                require 'view/addForm.html';
                break;
            default: 
                require 'view/home.html';
        }
    }elseif(isset($_GET['action']) && !empty($_GET['action'])){
        $request = $_GET['action'];
        switch($request){
            case 'addProject':
                require 'dashboard/action/addProject.php';
                break;
            default: 
                require 'view/home.html';
        }

    }
    else{
        require 'view/home.html';
    }
    
?>
