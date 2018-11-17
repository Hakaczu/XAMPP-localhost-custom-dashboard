<?php
function selectProject($rowid){
    $db =  new DbSqliteConnect();
    $project = $db -> getProjectById($rowid);
    return $project;
}
?>
