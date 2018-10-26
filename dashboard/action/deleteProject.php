<?php
  $rowid = $_GET['rowid'];
  $db =  new DbSqliteConnect();
  print $db -> deleteProject($rowid);  
?>
