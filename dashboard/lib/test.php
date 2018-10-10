<?php 
include 'Project.php';
include 'DbSqliteConnect.php';

$project = new Project('test', 'test');
$db = new DbSqliteConnect();
print $db->insertProject($project);