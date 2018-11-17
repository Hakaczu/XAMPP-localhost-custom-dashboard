<?php 
include 'dashboard/action/selectProject.php';
$project = selectProject($_GET['rowid']);
if(empty($project) && !isset($project))
{
    echo "no project with given id";
    exit;
}
?>

<form method="post" action="index.php?action=editProject">
    <label>Project Name</label>
    <input type="hidden" name="rowid" <?php echo 'value="'.$project->rowid.'"' ?>>
    <input type="text" name="projectName" <?php echo 'value="'.$project->project_name.'"' ?>  required>
    <label>Project Path</label>
    <input type="text" name="projectPath" <?php echo 'value="'.$project->project_path.'"' ?> required>
    <label>Url: <?php echo 'localohost'.$project->project_xampp_path ?></label>
    <button type="submit">Save Project</button>
</form>

