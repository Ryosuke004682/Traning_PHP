<?php
    //クラスMyClass を利用するクラス MyClassWriterで、文字出力

    class MyClass {
        public $name;
        public $age;

        //初期化
        public function __construct ($name , $age) {
            $this->name = $name;
            $this->age  = $age;
        }
    }

    class MyClassWeiter {
        public function modify_obj ($obj , $s , $n) {
            $obj->name = $s;
            $obj->age  = $n;
        }

        public function print_obj($obj) {
            echo '名前は' . $obj->name . '<br>' . '年齢は' . $obj->age;
        }
    }

    //値を代入しとく
    $callMyClass       = new MyClass('太郎' , 20);
    $callMyClassWriter = new MyClassWeiter();

    //メソッドのコールバック
    $callMyClassWriter->modify_obj($callMyClass , '太郎' , 20);
    $callMyClassWriter->print_obj($callMyClass);
    
?>