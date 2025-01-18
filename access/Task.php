<?php

    Class Task {
        private $title;
        private $description;

        public function __construct($title, $description) {
            $this->title = $title;
            $this->description = $description;
            $this->status = "Не выполнено";
        }

        public function __destruct() {
            $this->status = "Задача '{$this->title}' удалена.";
        }

        public function __call($method, $arguments) {
            if (strpos($method, 'set') === 0) {
                $property = strtolower(substr($method, 3));
                if (property_exists($this, $property)) {
                    $this->$property = $arguments[0];
                }
            } elseif (strpos($method, 'get') === 0) {
                $property = strtolower(substr($method, 3));
                if (property_exists($this, $property)) {
                    return $this->$property;
                }
            }
        }

        public function __toString() {
            return "Задача: {$this->title} — {$this->status}";
        }

    }

?>