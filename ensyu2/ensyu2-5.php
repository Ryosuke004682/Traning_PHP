<?php
    class MyClass {
        private $name;
        private $age;

        public function showProfile() {
            $this->name = '太郎';
            $this->age = '20';

            echo '名前は' . $this->name . '、' . '年齢は' . $this->age;
        }
    }

    $callClass = new MyClass;
    echo $callClass->showProfile();
?>