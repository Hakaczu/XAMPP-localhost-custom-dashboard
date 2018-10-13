<?php 
include 'Project.php';
include 'DbSqliteConnect.php';

$test = new Project('xampp', 'C:\xampp\htdocs\cycekkkk\index.php');
$link = $test->__get('projectXamppPath');
echo '<a target="blank" href="'.$link.'">Link</a>';