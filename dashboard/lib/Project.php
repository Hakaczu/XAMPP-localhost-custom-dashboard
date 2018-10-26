<?php
    class Project {
        public $projectName;
        public $projectPath;
        public $projectXamppPath;
        private static $serverRoot = 'C:/xampp/htdocs';

        public function __construct(string $projectName, string $projectPath)
        {
            $this->projectName = $projectName;
            $this->projectPath = $projectPath;
            $this->projectXamppPath = $this->generateXamppPath($projectPath);
        }

        private function generateXamppPath(string $projectPath){
            $projectPath = str_replace('\\','/', $projectPath);
            $len = strlen($projectPath);
            $marker = strpos($projectPath, self::$serverRoot);
            $xamppPath = substr($projectPath, $marker + strlen(self::$serverRoot));
            return $xamppPath;
        }

        public function __get($property) {
            if (property_exists($this, $property)) {
              return $this->$property;
            }
          }
        
          public function __set($property, $value) {
            if (property_exists($this, $property)) {
              $this->$property = $value;
            }
        
            return $this;
          }
    }
?>