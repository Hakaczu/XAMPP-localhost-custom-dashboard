<?php
    class DbSqliteConnect{
        protected $connection;
        private $path = '../xampp.sqlite';

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
            $query = $this->connection->prepare($sql);
            $query->bindValue(':project_name', $project->__get('projectName'));
            $query->bindValue(':project_path', $project->__get('projectPath'));
            $query->bindValue(':project_xampp_path', $project->__get('projectXamppPath'));
            $query->execute();
            return $this->connection->lastInsertId();
        }

    }
?>