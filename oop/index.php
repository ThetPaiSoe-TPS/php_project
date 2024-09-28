<?php
// one of the desing principle with interface
    interface Animal
    {
        public function hello();
    }

    class Cat implements Animal{
        public function hello()
        {
            echo "Hello Cat";
        }
    }

    class Dog implements Animal{
        public function hello()
        {
            echo "Hello Dog";
        }
    }

    function app(Animal $obj){
        $obj-> hello();
    }

    app(new Dog);
    echo "<br>";

    app(new Cat);