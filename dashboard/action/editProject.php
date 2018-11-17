<?php
    $project = new Project($_POST['projectName'], $_POST['projectPath']);
    $db =  new DbSqliteConnect();
    print $db->editProject($_POST['rowid'], $project);
?>