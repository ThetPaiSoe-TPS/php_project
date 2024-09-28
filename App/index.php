<?php  
    class Animal
    {
        public function hello(){
            echo "Hello $this-> name";
        }

        protected $name;

        public function __construct($name){
            $this-> name= $name;
        }

        static function info(){
            echo "Animal Class";
        }
    }

    class Dog extends Animal
    {
        public function run(){
            echo "$this->name is running";
        }
    }

    Dog::info();

    $bobby= new Dog("Bobby");
    $bobby-> run();

    