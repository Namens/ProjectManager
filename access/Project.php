<?php

    Class Project {
        private $name;
        private $tasks;

        public function __construct($name){
            $this->name = $name;
            $this->tasks = [];
        }

        public function __destruct() {
            echo "Проект '{$this->name}' закончен.";
        }

        public function addTask($task) {
            $this->tasks[] = $task;
        }

        public function __toString() {
            return "Проект: {$this->name}, Количество задач: " . count($this->tasks);
        }
    }

?>