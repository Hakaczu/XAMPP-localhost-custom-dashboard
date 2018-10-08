<?php
    $dir = scandir('.');
    
    if(array_search('xampp.sqlite', $dir))
    {
        echo '<script>console.log( "Database for Dashboard exist!" );</script>';
    }

    else{
        
        try {
            // otwarcie/utworzenie bazy
            $db = new PDO("sqlite:xampp.sqlite");
        }
        catch(PDOException $e) {
             // bład przy otwieraniu/tworzeniu bazy 
            echo $e->getMessage();
        }

        $query =  'CREATE TABLE IF NOT EXISTS projects (project_name TEXT NOT NULL, project_path TEXT NOT NULL, project_xampp_path TEXT NOT NULL);';
        try{
            $db->exec($query);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
    }
    
?>