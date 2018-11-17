<?php
    function displayProjects($projects){
        if(!empty($projects) && isset($projects)){
            echo '<ul>';
            foreach($projects as &$project){
                echo '<li><a href="'.$project->project_xampp_path.'" target="blank">'.$project->project_name.'</a>
                (<a href="index.php?action=deleteProject&rowid='.$project->rowid.'">Delete</a>|<a href="index.php?action=editForm&rowid='.$project->rowid.'">Edit</a>)</li>';
            }
            echo '</ul>';
        }else{
            echo 'no projects';
        }
    }
?>