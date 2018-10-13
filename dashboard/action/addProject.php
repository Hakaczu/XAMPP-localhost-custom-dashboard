<?php
    #include '../lib/DbSqliteConnect.php';
    #include '../lib/Project.php';
    #$project = new Project('xampp', 'C:\xampp\htdocs\index.php');
    $project = new Project($_POST['projectName'], $_POST['projectPath']);
    $db =  new DbSqliteConnect();
    print $db->insertProject($project);
?>