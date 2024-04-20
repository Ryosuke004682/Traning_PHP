<?php
    class MyClass{
        private $name;
        private $age;

        public function __construct($name , $age) {
            $this->__set('name' , $name);
            $this->__set('age' , $age);
        }

        public function __set($var , $value) {
            switch ($var) {
                case 'name':
                    $this->name = $value;
                    break;

                case 'age';
                    if (!is_numeric($value)) {
                        echo '数値じゃない';
                    }
                    $this->age = $value;
                    break;
            }
        }

        public function __get($var) {
            return $this->$var;
        }
    }

    $obj = new MyClass('太郎' , 20);
    echo '名前は' . $obj->name . '、';
    echo '年齢は' . $obj->age;
?>