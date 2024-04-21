<?php
    class MyClass {
        public $name;
        public $age;

        public function  __construct($name , $age) {
            $this->name = $name;
            $this->age = $age;
        }
    }

    class MyClass2 extends MyClass {      
        public function OverrideShowProfile() {
            echo '名前は' . $this->name . '<br>' . '年齢は' . $this->age;
        }
    }

    $overrideObj = new MyClass2('太郎' , 20);
    $overrideObj->OverrideShowProfile(); 
?>