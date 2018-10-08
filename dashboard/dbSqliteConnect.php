<?php
    class dbSqliteConnect{
        protected $connection;
        private $path = 'xampp.sqlite';

        public function __construct(){
            try {
                $this->connection = new PDO("sqlite:".$this->path);
            }
            catch(PDOException $e) {
                 // bład przy otwieraniu/tworzeniu bazy 
                echo $e->getMessage();
            }
        }

        public function insertProject($projectName, $projectPath, $projectXamppPath) {
            $sql = 'INSERT INTO projects(project_name, project_path, project_xampp_path) VALUES(:project_name, :project_path, :project_xampp_path)';
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':project_name', $projectName);
            $stmt->bindValue(':project_path', $projectPath);
            $stmt->bindValue(':project_xampp_path', $projectXamppPath);
            $stmt->execute();
            return $this->pdo->lastInsertId();
        }

    }
?>