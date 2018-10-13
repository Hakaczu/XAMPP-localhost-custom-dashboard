<?php
function selectProjects(){
    $db =  new DbSqliteConnect();
    $projects = $db -> getProjectObjectList();
    return $projects;

}
