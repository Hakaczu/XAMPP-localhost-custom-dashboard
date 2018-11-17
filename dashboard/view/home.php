<h2>All Projects</h2>
<?php
    include 'dashboard/action/selectProjects.php';
    include 'displayProjects.php';
    $projects = selectProjects();
    displayProjects($projects);
?>