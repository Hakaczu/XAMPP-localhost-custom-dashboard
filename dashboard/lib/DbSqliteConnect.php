<?php

    class DbSqliteConnect{
        protected $connection;
        private $path = 'dashboard/xampp.sqlite';

        public function __construct(){
            try {
                $this->connection = new PDO("sqlite:".$this->path);
            }
            catch(PDOException $e) {
                 // bład przy otwieraniu/tworzeniu bazy 
                echo $e->getMessage();
            }
        }

        public function insertProject(Project $project) {
            $sql = 'INSERT INTO projects(project_name, project_path, project_xampp_path) VALUES(:project_name, :project_path, :project_xampp_path)';
            //$sql = 'INSERT INTO projects(project_name, project_path, project_xampp_path) VALUES(test,test,test)';          
            $query = $this->connection->prepare($sql);
            if($query){

                $query->bindValue(':project_name', $project->projectName, PDO::PARAM_STR);
                $query->bindValue(':project_path', $project->projectPath, PDO::PARAM_STR);
                $query->bindValue(':project_xampp_path', $project->projectXamppPath, PDO::PARAM_STR);
                
                $query->execute();
                if($query){
                    return 'Succesfull Add '. $project->projectName;
                }
                else{
                    return 'Failed insert project';
                }
            }else{
                return 'Failed insert project';
            }
  
            
        }
        public function deleteProject(int $rowid){
            $sql = 'DELETE FROM projects WHERE rowid=:rowid';
            $query = $this->connection->prepare($sql);
            if($query){
                $query->bindValue(':rowid', $rowid, PDO::PARAM_INT);
                $query->execute();
                
                if($query){
                    return 'Succesfull Delete Project';
                }else{
                    return 'Failed delete project';
                }
            }else{
                return 'Failed delete project';
            }
        }

        public function getProjectObjectList() {
            $sql = 'SELECT rowid, project_name, project_xampp_path FROM projects';
            $query = $this->connection->query($sql);
            if($query){
                $projects = [];
                while($project = $query->fetchObject()){
                    $projects[]=$project;
                }
                return $projects;
            }
            
        }

        public function getProjectById($rowid)
        {
            $query = $this->_connection->prepare("SELECT * FROM projects WHERE rowid=" . $rowid);
            $query->execute();
            $result = $query->fetchObject();
            if (isset($result)) {
                return $result;
            } else {
                return $id;
            }
        }
}
?>