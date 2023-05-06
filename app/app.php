<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Util.php";
    require_once __DIR__."/../src/Board.php";

    class App {
        private $name;
        private $version;
        private $db_type;

        public function __construct()
        {
            $this->name = "Board";
            $this->version = "0.1";
            $this->db_type = "mysql";
        }

        public function DBRegister()
        {
            DebugIndentBegin();
            switch($this->db_type)
            {
                case "mysql":
                    $this->DBRegisterMysql();
                    break;
            }
            DebugIndentEnd();
        }

        private function DBRegisterMysql()
        {
            DebugLog("DBRegisterMysql()");
        }

        public function Run()
        {
            $this->DBRegister();
            DebugLog("Run()");
        }

    }

    $app = new App();
    return $app;

?>