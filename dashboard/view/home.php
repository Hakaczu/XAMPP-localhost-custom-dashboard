<h2>All Projects</h2>
<?php
    include 'dashboard/action/selectProjects.php';
    $projects = selectProjects();
    if(!empty($projects) && isset($projects)){
        echo '<ul>';
        foreach($projects as &$project){
            echo '<li><a href="'.$project->project_xampp_path.'" target="blank">'.$project->project_name.'</a></li>';
        }
        echo '</ul>';
    }
?>